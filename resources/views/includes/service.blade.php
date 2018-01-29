
{{--<div class="container">
  <div class="ser-content clearfix">
    <div class="row ser-content__header">
      <div class="ser-content__title s__item__name__title col-md-6">
        <h1>{{ $service->name }} в {{ $citySeoName }}</h1>
      </div>
      <!-- Ссылка на страницу отзывов -->
      <div class="col-md-6 s__resp__block">
        <a href="/service-comments/" class="s__tels-btn s__resp red_hover" title="">Оставить свой отзыв</a>
      </div>
    </div>

    <div style="position: relative" class="clearfix">
      <div class="ser-content__info col-md-6">
        <div class="ser-content__header row">
          <div class="col-md-6">
            <!-- Логотип -->
            <div class="ser__logo" style="background-image: url({{ asset('storage/logos/'.$service->logo) }})"></div>
            <!-- Тип сервиса -->
            <span class="ser__type s__item__name__type">{{ $service->sc_type }}</span>
          </div>

          <div class="col-md-6">
            <!-- Рейтинг -->
            <div class="ser_rating">
              <span  class="s__item__rating_icon"></span>
              <span class="ser_rating__val s__item__rating">{{ $service->rating or 'Оценок нет' }}</span>
            </div>
            <div class="ser_rew s__item__rew">
              <!-- Кол-во отзывов -->
              <span>
                <input name="service_id" type="text" value="" hidden>
              </span>
            </div>
          </div>
        </div>

        <!-- Описание -->
        <div class="ser-content__descr">
          <p>{{ $service->description }}</p>
        </div>

        <!-- Фото -->
        <div class="ser-content__fotos">
          @foreach(json_decode($service->fotos) as $foto)
            <a href="{{ asset('storage/fotos/servissot/'.$foto) }}">
              <div class="ser-content__f">
                <img src="{{ asset('storage/fotos/servissot/'.$foto) }}">
              </div>
            </a>
          @endforeach
        </div>

        <!-- Карта -->
        <div id="map" class="ser-content__map"></div>
      </div>

      <div class="ser-content__contacts col-md-6">
        <div class="ser-content_address">
          <!-- Адрес -->
          <div class="s__item__name__title">Адрес:</div>
          <span id="serviceAddress">{{ $service->address }}</span>
        </div>

        <!-- Список метро -->
        <div id="servSub" class="ser-content__subways"></div>

        <!-- Телефоны -->
        <div class="ser-content_tel clearfix">
          <div class="row">
            <div class="s__tels-btn red_hover js-tels-btn">Показать телефон</div>
          </div>

          <div class="s__item__tels js-tels-block">
            @foreach(json_decode($service->tel) as $tel)
              {{ $tel }}
              <br>
            @endforeach
          </div>
        </div>

        <div class="ser-content_work">
          <div class="s__item__name__title">Режим работы</div>
            <span class="s__item__address_wt ser-content_work_days">
              <span>Пн.-Пт.</span>
              {{ isset(json_decode($service->work_time)->mon_fr) ? json_decode($service->work_time)->mon_fr : 'Выходной' }}
              <br>

              <span>Сб.</span>
              {{ isset(json_decode($service->work_time)->sat) ? json_decode($service->work_time)->sat : 'Выходной' }}
              <br>

              <span>Вс.</span>
              {{ isset(json_decode($service->work_time)->sun) ? json_decode($service->work_time)->sun : 'Выходной' }}
              <br>
            </span>
        </div>
      </div>
    </div>
  </div>
</div>--}}






