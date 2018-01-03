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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
  <header class="header">
    <div class="container">
      <a href="/" title="">
        <div class="logo col-md-4">
          <div class="logo__name">SONYBOX</div>
          <div class="logo__text">Сервисные центры Sony</div>
        </div>
      </a>

      <div class="header__menu col-md-6">
        <nav>
          <ul>
            <li><a href="/news" title="" class="header__menu_links">Новости</a></li>
            <li><a href="/articles" title="" class="header__menu_links">Статьи</a></li>
            <li><a href="/questions" title="" class="header__menu_links">Вопросы и ответы</a></li>
            <li><a href="/o-proekte" title="" class="header__menu_links">О проекте</a></li>
            <li><a href="/contacts" title="" class="header__menu_links">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="header-fix"></div>

  @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
