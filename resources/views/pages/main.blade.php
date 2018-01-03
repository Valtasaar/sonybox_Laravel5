@extends('layouts.app')

@section('content')
<section>
  <div class="container site-content">
    <div class="card">
      <div class="search search_main">
        <div class="card-header">
          <div class="card__card-title-top">
            <h1>Сервисные центры Sony - поиск по каталогу</h1>
          </div>
        </div>
        <div class="card-block">
          <form id="search-form" method="get">
            <div class="col-md-6">
              <div class="search_col">
                <div class="card__card-title">Выбор города</div>
                <div class="search__choice-city search__block">
                  <button value="" class="dropdown-toggle search_select-button red_bord_hover js-city-button"
                          type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Выберите город</button>

                  <div class="search-form__city-error">Выберите город</div>

                  <div class="dropdown-menu search_select-list js-city-button-list">
                    <ul>
                      <li data-city="moskva">Москва</li>

                      {{--@foreach($cities_names as $cities)
                        <li data-city="{{$cities['slug']}}">{{$cities['name']}}</li>
                      @endforeach--}}
                    </ul>
                  </div>
                </div>

                <div class="card__card-title">Тип сервисного центра:</div>
                <div class="search__choice-type search__block">
                  <div class="search__input-block">
                    <input id="sc-type_1" class="search__check" type="checkbox" name="sc_type"
                           value="sc_type_1">
                    <label for="sc-type_1" class="search__label">aвторизованный</label><br>
                  </div>
                  <div class="search__input-block">
                    <input id="sc-type_2" class="search__check" type="checkbox" name="sc_type"
                           value="sc_type_2">
                    <label for="sc-type_2" class="search__label">специализированный</label>
                  </div>
                </div><br>

                <div class="search__choice-time search__block">
                  <div class="card__card-title">время работы сервиса:</div>
                  <div class="search__input-block">
                    <input id="time-1" class="search__check" type="checkbox" name="work_time-1"
                           value="work_time-1">
                    <label for="time-1" class="search__label">будни</label><br>
                  </div>
                  <div class="search__input-block">
                    <input id="time-2" class="search__check" type="checkbox" name="work_time-2"
                           value="work_time-2">
                    <label for="time-2" class="search__label">будни и выходные</label>
                  </div>
                </div><br>
              </div>
            </div>

            <div class="col-md-6">
              <div class="search_right-col search_col">
                <div class="card__card-title">Тип обслуживающей техники:</div>
                <div class="search__technique search__block">
                  <button value="Все типы"
                            class="dropdown-toggle search_select-button red_bord_hover js-type-button"
                            type="button" aria-haspopup="true" aria-expanded="false">Все типы</button>

                    <div class="dropdown-menu search_select-list js-type-button-list">
                      <ul>
                        <li>
                          <div class="search__input-block">
                            <input id="type-1" class="search__check red_text_hover" type="checkbox"
                                   name="type_1" value="type-1">
                            <label for="type-1" class="search__label red_text_hover">Компактные фотоаппараты, видеокамеры,носители информации</label><br>
                          </div>

                          <div class="search__input-block">
                            <input id="type-2" class="search__check red_text_hover" type="checkbox"
                                   name="type_2" value="type-2">
                            <label for="type-2" class="search__label red_text_hover">Аудио-видеотехника (домашняя, персональная, автомобильная)</label><br>
                          </div>

                          <div class="search__input-block">
                            <input id="type-3" class="search__check red_text_hover" type="checkbox"
                                   name="type_3" value="type-3">
                            <label for="type-3" class="search__label red_text_hover">Фотоаппараты со сменной оптикой, объективы, аксессуары</label><br>
                          </div>

                          <div class="search__input-block">
                            <input id="type-4" class="search__check red_text_hover" type="checkbox"
                                   name="type_4" value="type-4">
                            <label for="type-4" class="search__label red_text_hover">Игровые приставки и аксессуары PlayStation</label><br>
                          </div>

                          <div class="search__input-block">
                            <input id="type-5" class="search__check red_text_hover" type="checkbox"
                                   name="type_5" value="type-5">
                            <label for="type-5"
                                     class="search__label red_text_hover">Ноутбуки VAIO</label><br>
                          </div>
                        </li>
                      </ul>
                    </div>
                </div>

                <div class="search__courier search__block">
                  <div class="search__input-block">
                    <input id="courier-1" class="search__check red_text_hover" type="checkbox"
                           name="courier" value="courier-1">
                    <label for="courier-1" class="search__label card__card-title red_text_hover">Наличие курьерской доставки</label><br>
                  </div>
                </div><br>

                <div class="search__repair search__block">
                  <div class="search__input-block">
                    <input id="courier" class="search__check red_text_hover" type="checkbox" name="rep"
                           value="rep-1">
                    <label for="courier" class="search__label card__card-title red_text_hover">Наличие срочного ремонта</label>
                  </div>
                </div><br>

                <div class="search__diagnistic search__block">
                  <div class="search__input-block">
                    <input id="dia" class="search__check red_text_hover" type="checkbox" name="dia"
                           value="dia-1">
                    <label for="dia" class="search__label card__card-title red_text_hover">Наличие срочной диагностики</label>
                  </div>
                </div>

                <div class="card__card-title">Рейтинг</div>
                <div class="search__rate search__block">
                  <div class="search__input-block">
                    <input id="rate-1" class="search__check" type="checkbox" name="rate_1" value="1,3">
                    <label for="rate-1" class="search__label">1-3</label><br>
                  </div>

                  <div class="search__input-block">
                    <input id="rate-2" class="search__check" type="checkbox" name="rate_2" value="4,5">
                    <label for="rate-2" class="search__label">4-5</label><br>
                  </div>
                  <br>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
              <button class="search_confirm-request red_hover" type="submit">Отправить</button>
          </form>
        </div>
      </div>

      <div class="main-text"></div>
    </div>
  </div>
</section>
@endsection