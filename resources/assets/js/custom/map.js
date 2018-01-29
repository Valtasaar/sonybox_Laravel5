var map;
var geocoder;
var center;
var directionsService;
var iconGrey = window.location.origin + '/img/icons/grey-marker.png';
var iconRed = window.location.origin + '/img/icons/red-marker.png';
var servicesMarkers = [];
var marker;
//var services = document.getElementsByClassName('s__item');
var services = document.getElementsByClassName('js-serv-items');
var infowindow;
var geocoderCity;
var cityMap;

/*
* Карта на странице сервиса
* */
// Инициализация карты
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
    });

    geocoder = new google.maps.Geocoder();
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);

    geocodeAddress(geocoder, map);
}

function initMapCity() {
    cityMap = new google.maps.Map(document.getElementById('cityMap'), {
        zoom: 10,
    });
    infowindow = new google.maps.InfoWindow({
        pixelOffset: new google.maps.Size(200, 200),
        maxWidth: 322
    });
    geocoderCity = new google.maps.Geocoder();

    geocodeCity(geocoderCity, cityMap);
}

// Поиск по городу
function geocodeCity(geocoder, resultsMap) {
    (function iterate(iter) {
        var address = $(services[iter]).find('.s__item__address_at').text();
        var title = $(services[iter]).find('.s__item__name__title').text();
        var rating = $(services[iter]).find('span.s__item__rating').text();
        var more = $(services[iter]).find('.s__item__more a').attr('href');
        var contentString = '<div id="cityMapInfo" class="cityMap__info clearfix">' +
            '    <a href="' + more + '">' +
            '    <span class="s__item__name__title red_link_hover">Тут ' + title + '</span>' +
            '</a>' +
            '<div class="s__item__rating ser_rating">' +
            '    <span  class="s__item__rating_icon"></span>' +
            '    <span class="s__item__rating">' + rating + '</span>' +
            '    </div>' +
            '    <span class="s__item__address_at">' + address + '</span> <div class="s__item__more">' +
            '    <a href="' + more + '">Подробнее</a>' +
            '    </div>' +
            '    </div>';


        cityMultiMarkers(address, contentString, resultsMap, geocoder);
        if (iter < services.length - 1) {
            setTimeout(function() { iterate(iter + 1); }, 800);
        }

        if ( iter < 1 && services.length > 1 ) {
            $('.city__map__loader').show(300);
            //console.log(services.length);
        } else if ( iter == services.length - 1 ) {
            $('.city__map__loader').hide(300);
        }
    })(0);
}

function cityMultiMarkers(address, content, resultsMap, geocoder) {
    geocoder.geocode({'address': address}, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            geoFromAddress(results, resultsMap, content);
        } else {
            geocoder.geocode({'address': address.split(",").slice(0, -1).join(",")}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    geoFromAddress(results, resultsMap, content);
                }
            });
        }
    });
}

function geoFromAddress(results, resultsMap, content) {
    center = results[0].geometry.location;
    resultsMap.setCenter(results[0].geometry.location);

    marker = new google.maps.Marker({
        map: resultsMap,
        position: center,
        icon: iconGrey,
    });

    google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
            for ( i=0; i < servicesMarkers.length; i++ ) {
                servicesMarkers[i].setIcon(iconGrey);
            }
            marker.setIcon(iconRed);
            infowindow.setContent(content);
            infowindow.open(resultsMap, marker);

            var cityMapInfoArr = document.getElementById('cityMapInfo');
            var parentArr = cityMapInfoArr.parentNode.parentNode.parentNode
                .previousSibling;
            parentArr.childNodes[2].setAttribute('style', 'display:none');
            parentArr.insertAdjacentHTML('afterbegin', '<div class="cityMap__arr"></div>');
        }
    })(marker));

    infowindow.addListener('closeclick',function(){
        marker.setIcon(iconGrey);
    });

    servicesMarkers.push(marker);
}

/*function cityMultiMarkers(address, content, resultsMap, geocoder) {
    geocoder.geocode({'address': address}, function (results, status) {
        //console.log('address: ' + address + '; status: ' + status);
        if (status === google.maps.GeocoderStatus.OK) {
            geoFromAddress()
        } else if ( status === 'OVER_QUERY_LIMIT' ) {
            console.log('address: ' + address);

            window.setTimeout(geoFromAddress(), 1000)
        }
        /!*else {
            geocoder.geocode({'address': address.split(",").slice(0, -1).join(",")}, function (results, status) {
                console.log(status);
                center = results[0].geometry.location;
                resultsMap.setCenter(results[0].geometry.location);

                marker = new google.maps.Marker({
                    map: resultsMap,
                    position: center,
                    icon: iconGrey,
                });

                google.maps.event.addListener(marker, 'click', (function(marker) {
                    return function() {
                        for ( i=0; i < servicesMarkers.length; i++ ) {
                            servicesMarkers[i].setIcon(iconGrey);
                        }
                        marker.setIcon(iconRed);
                        infowindow.setContent(content);
                        infowindow.open(resultsMap, marker);

                        var cityMapInfoArr = document.getElementById('cityMapInfo');
                        var parentArr = cityMapInfoArr.parentNode.parentNode.parentNode
                            .previousSibling;
                        parentArr.childNodes[2].setAttribute('style', 'display:none');
                        parentArr.insertAdjacentHTML('afterbegin', '<div class="cityMap__arr"></div>');
                    }
                })(marker));

                infowindow.addListener('closeclick',function(){
                    marker.setIcon(iconGrey);
                });

                servicesMarkers.push(marker);
            });
        }*!/
    });
}*/

// Поиск координат по адресу
function geocodeAddress(geocoder, resultsMap) {
    var service = new google.maps.places.PlacesService(resultsMap);
    var address = document.getElementById('serviceAddress').textContent;
    geocoder.geocode({'address': address}, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            center = results[0].geometry.location;
            resultsMap.setCenter(results[0].geometry.location);
            marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location,
                icon: iconRed,
            });

            // Поиск ближайших метро
            service.nearbySearch({
                location: results[0].geometry.location,
                types: ['subway_station'],
                rankBy: google.maps.places.RankBy.DISTANCE
            }, callback);
        } else {
            geocoder.geocode({'address': address.split(",").slice(0, -1).join(",")}, function (results, status) {
                center = results[0].geometry.location;
                resultsMap.setCenter(results[0].geometry.location);
                marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location,
                    icon: iconRed,
                });

                // Поиск ближайших метро
                service.nearbySearch({
                    location: results[0].geometry.location,
                    types: ['subway_station'],
                    rankBy: google.maps.places.RankBy.DISTANCE
                }, callback);
            });
        }
    });
}

// перебор найденных станций метро
function callback(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
        // Вывод максимум четырех
        for (var i = 0; i < 4; i++) {
            var placeLoc = results[i].geometry.location;
            var name = results[i].name;

            addBlock(name, placeLoc);
        }
    }
}

// Добавление блока с инфой метро
function addBlock(name, dest) {
    var request = {
        origin: center,
        destination: dest,
        travelMode: google.maps.TravelMode.WALKING
    };

    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            var distance = result.routes[0].legs[0].distance.value;
            var minutes = Math.round(distance / 1000 / 5 * 60);
            var subBlock = document.getElementById('servSub');
            var subItem = document.createElement('div');
            var duration = result.routes[0].legs[0].duration.text;

            subItem.className = "ser-content__subway";
            subItem.innerHTML = '<span class="ser-content__subway__name">' + name + ' </span>' +
                '<span class="ser-content__subway__time">(' + duration + ')</span>';
            subBlock.appendChild(subItem);
        }

    });
}


