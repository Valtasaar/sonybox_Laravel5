@extends('layouts.app')

@section('content')
  <div class="row fl_row_center mt">
    <div class="ser-content__title s__item__name__title col-md-6">
      <h1>Service name в city</h1>
    </div>
    <!-- Ссылка на страницу отзывов -->
    <div class="col-md-3 col-md-offset-3">
      <a href="/service-comments/" class="btn site-btn" title="">Оставить свой отзыв</a>
    </div>
  </div>

  <div class="row pos_rel">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="ser-content__header row">
            <div class="col-md-6">
              <!-- Логотип -->
              <div class="ser__logo">
                <img src="/img/logos/servissot.jpg" alt="">
              </div>
              <!-- Тип сервиса -->
              <span class="ser__type s__item__name__type">type</span>
            </div>

            <div class="col-md-6">
              <!-- Рейтинг -->
              <div class="ser_rating">
                <span class="s__item__rating_icon"></span>
                <span class="ser_rating__val s__item__rating">4.5</span>
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
            <p>Lorem</p>
          </div>

          <!-- Фото -->
          <div class="ser-content__fotos">

          </div>

          <!-- Карта -->
          <div id="map" class="ser-content__map"></div>
        </div>
      </div>
    </div>

    <div class="ser-content__contacts col-md-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="ser-content_address">
            <!-- Адрес -->
            <div class="s__item__name__title">Адрес:</div>
            <span id="serviceAddress">address</span>
          </div>

          <!-- Список метро -->
          <div id="servSub" class="ser-content__subways"></div>

          <!-- Телефоны -->
          <div class="ser-content_tel clearfix">
            <div class="row">
              <div class="col-md-6">
                <button type="button" class="btn site-btn btn-lg">Показать телефон</button>
              </div>
            </div>

            <div class="s__item__tels js-tels-block">
              895-65-65
            </div>
          </div>

          <div class="ser-content_work">
            <div class="s__item__name__title">Режим работы</div>
            <span class="s__item__address_wt ser-content_work_days">
            <span>Пн.-Пт.</span>
            09:00 - 18:00
            <br>

            <span>Сб.</span>
            09:00 - 18:00
            <br>

            <span>Вс.</span>
            Выходной
            <br>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
