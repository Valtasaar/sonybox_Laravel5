<div class="footer">
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <a href="/addcompany" title="" class="footer__links">+ Добавить организацию</a>
                <a href="/feedback" title="" class="footer__links">Обратная связь</a>
                <a href="/polzovatelskoe-soglashenie" title="" class="footer__links"> //echo get_the_title_by_slug('polzovatelskoe-soglashenie') </a>
            </div>

            <div class="row">
                <a href="/" title="" class="footer__site">SONYBOX</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="share42init" data-icons-file="//echo get_template_directory_uri()?>/img/icons/social.png" data-url="//the_permalink() ?>" data-title=" //the_title() "></div>
        </div>
    </div>
</div>

<script src="{{ url('/js/lib-scripts.min.js') }}"></script>
<script src="{{ url('/js/script.min.js') }}"></script>
@isset($page_type)
    @if($page_type == 'city')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq7LHqifXqPAJPjbPBJZDf0RSfHMx-auM&libraries=geometry,places&callback=initMapCity" type="text/javascript"></script>
    @elseif($page_type == 'service')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq7LHqifXqPAJPjbPBJZDf0RSfHMx-auM&libraries=geometry,places&callback=initMap" type="text/javascript"></script>
    @endif
@endisset

