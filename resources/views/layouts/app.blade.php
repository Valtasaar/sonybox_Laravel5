<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  @if (env('APP_ENV') == 'local')
    <link href="{{ asset('css/lib-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @else
    <link href="{{ va('css/app.css') }}" rel="stylesheet">
  @endif
</head>
<body>

<div id="app">
  <header class="header">
    <div class="container">
      <div class="fl_row_center">
        <div class="logo col-md-4 col-xs-10 fl_col_center">
          <a href="/" title="">
            <div class="logo__name">SONYBOX</div>
            <div class="logo__text">Сервисные центры Sony</div>
          </a>
        </div>

        <div class="header__menu col-xs-6 hidden-xs hidden-sm">
          <nav>
            <ul>
              <li><a href="/news" title="">Новости</a></li>
              <li><a href="/articles" title="">Статьи</a></li>
              <li><a href="/questions" title="">Вопросы и ответы</a></li>
              <li><a href="/o-proekte" title="">О проекте</a></li>
              <li><a href="/contacts" title="">Контакты</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-xs-2 hidden-md hidden-lg text-right">
          <button class="js-mmenu-btn hamburger hamburger--collapse" type="button">
           <span class="hamburger-box">
              <span class="hamburger-inner"></span>
           </span>
          </button>
        </div>

        <nav class="js-mmenu">
          <ul>
            <li><a href="#" title="">Новости</a></li>
            <li><a href="/articles" title="">Статьи</a></li>
            <li><a href="/questions" title="">Вопросы и ответы</a></li>
            <li><a href="/o-proekte" title="">О проекте</a></li>
            <li><a href="/contacts" title="">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="container site-content">
    @yield('content')
  </div>

  <div class="footer fl_col_center">
    <div class="container">
      <div class="col-md-8">
        <div>
          <a href="/addcompany" title="" class="footer__links">+ Добавить организацию</a>
          <a href="/feedback" title="" class="footer__links">Обратная связь</a>
          <a href="/polzovatelskoe-soglashenie" title="" class="footer__links">Пользовательское соглашение</a>
        </div>

        <div>
          <a href="/" title="" class="footer__site">SONYBOX</a>
        </div>
      </div>

      {{--<div class="col-md-4">
        <div class="share42init" data-icons-file="//echo get_template_directory_uri()?>/img/icons/social.png" data-url="//the_permalink() ?>" data-title=" //the_title() "></div>
      </div>--}}
    </div>
  </div>
</div>

<!-- Scripts -->
@if (env('APP_ENV') == 'local')
  <script src="{{ asset('js/app.js') }}"></script>
@else
  <script src="{{ va('js/app.js') }}"></script>
@endif

{{--
@isset($page_type)
  @if($page_type == 'city')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq7LHqifXqPAJPjbPBJZDf0RSfHMx-auM&libraries=geometry,places&callback=initMapCity" type="text/javascript"></script>
  @elseif($page_type == 'service')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq7LHqifXqPAJPjbPBJZDf0RSfHMx-auM&libraries=geometry,places&callback=initMap" type="text/javascript"></script>
  @endif
@endisset
--}}

<!-- Pages -->
<button
    type="button"
    class="btn btn-primary btn-sm"
    data-toggle="modal"
    data-target="#pages"
    style="position: fixed;top: 0;right: 0;z-index: 9999;"
>
  Pages
</button>

<!-- Modal -->
<div class="modal fade"
     id="pages"
     tabindex="-1"
     role="dialog"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <ul>
          <li><a href="/static">Главная</a></li>
          <li><a href="/static/city">Сервисы в городе</a></li>
          <li><a href="/static/service">Сервис</a></li>
          <li><a href="/static/comments">Комментарии</a></li>
          <li><a href="/static/add-company">Добавить организацию</a></li>
          <li><a href="/static/feedback">Обратная связь</a></li>
          <li><a href="/static/user-agreement">Пользовательское соглашение</a></li>
          <li><a href="/static/questions">Вопросы и ответы</a></li>
          <li><a href="/static/add-question">ЗАДАТЬ ВОПРОС</a></li>
          <li><a href="/static/articles">Статьи</a></li>
          <li><a href="/static/article">Статья</a></li>
          <li><a href="/static/news" title="">Новости</a></li>
          <li><a href="/static/news-item" title="">Новость</a></li>
          <li><a href="/static/about" title="">О проекте</a></li>
          <li><a href="/static/contacts" title="">Контакты</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>
