@extends('layouts.app')

@section('content')
  <div class="panel panel-default mt">
    <div class="panel-heading">
      <div class="card__card-title-top">
        <h1>Сервисные центры Sony - поиск по каталогу</h1>
      </div>
    </div>

    <div class="panel-body">
      <form id="search-form" method="get">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <div class="card__card-title">Выбор города</div>

              <select class="selectpicker select">
                <option>Москва</option>
                <option>Москва</option>
                <option>Москва</option>
                <option>Москва</option>
              </select>
            </div>

            <div class="form-group">
              <div class="card__card-title">Тип сервисного центра:</div>

              <div class="search__choice-type search__block">
                <div class="search__input-block">
                  <input id="sc-type_1" class="search__check" type="checkbox" name="sc_type" value="sc_type_1">
                  <label for="sc-type_1" class="search__label">aвторизованный</label><br>
                </div>

                <div class="search__input-block">
                  <input id="sc-type_2" class="search__check" type="checkbox" name="sc_type" value="sc_type_2">
                  <label for="sc-type_2" class="search__label">специализированный</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="card__card-title">Время работы сервиса:</div>

              <div class="search__choice-time search__block">
                <div class="search__input-block">
                  <input id="time-1" class="search__check" type="checkbox" name="work_time-1" value="work_time-1">
                  <label for="time-1" class="search__label">будни</label><br>
                </div>

                <div class="search__input-block">
                  <input id="time-2" class="search__check" type="checkbox" name="work_time-2" value="work_time-2">
                  <label for="time-2" class="search__label">будни и выходные</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <div class="card__card-title">Тип обслуживающей техники</div>

              <select class="selectpicker select show-tick" multiple title="Выберите тип">
                <option>Компактные фотоаппараты, видеокамеры, носители информации</option>
                <option>Аудио-видеотехника (домашняя, персональная, автомобильная)</option>
                <option>Фотоаппараты со сменной оптикой, объективы, аксессуары</option>
                <option>Игровые приставки и аксессуары PlayStation</option>
                <option>Ноутбуки VAIO</option>
              </select>
            </div>

            <div class="form-group">
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
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4 col-md-offset-4">
            <button class="btn site-btn btn-lg" type="submit">Отправить</button>
          </div>
        </div>
      </form>
    </div>

    <div class="panel-footer">
      <div class="main-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cumque cupiditate deleniti, distinctio
          dolore doloribus impedit inventore libero magni modi praesentium quas quidem quis quisquam ratione soluta
          temporibus velit. Maiores.</p>
        <p>Accusamus accusantium, ad alias delectus eum excepturi facere fuga iste maiores, maxime minima molestias nobis
          non nostrum odit officia omnis possimus quisquam quo saepe veritatis vero voluptas. Cupiditate explicabo,
          maiores.</p>
        <p>Totam, unde, veritatis. A consectetur debitis ducimus in non. A dicta exercitationem pariatur. Illo itaque
          quidem saepe sit! Beatae error in labore laboriosam odit suscipit velit veritatis vitae? Fugit, vero.</p>
      </div>
    </div>
  </div>
@endsection