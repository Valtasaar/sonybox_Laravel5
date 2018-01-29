<aside class="clearfix col-md-3">
  <div class="panel panel-default mt">
    <div class="panel-heading">
      <div class="card__card-title-top">
        Параметры поиска
      </div>
    </div>

    <div class="panel-body">
      <div class="search search_services">
        <form id="search-form" method="get">
          <div class="form-group">
            <div class="card__card-title">Сортировать по:</div>

            <select class="selectpicker select show-tick">
              <option>Цене: по возрастанию</option>
              <option>Цене: по убыванию</option>
              <option>Рейтингу: по возрастанию</option>
              <option>Рейтингу: по убыванию</option>
              <option>Рейтингу и цене: по возрастанию</option>
              <option>Рейтингу и цене: по убыванию</option>
            </select>

            <input name="sort_rating" type="text" value="" hidden>
            <input name="sort_price" type="text" value="" hidden>
            <input name="sort_price_rate" type="text" value="" hidden>
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

          <div class="form-group">
            <div class="search__courier search__block">
              <div class="search__input-block">
                <input id="courier-1" class="search__check red_text_hover" type="checkbox" name="courier" value="courier-1">
                <label for="courier-1" class="search__label card__card-title red_text_hover">Наличие курьерской
                  доставки</label><br>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="search__repair search__block">
              <div class="search__input-block">
                <input id="courier" class="search__check" type="checkbox" name="rep" value="rep-1">
                <label for="courier" class="search__label card__card-title red_text_hover">Наличие срочного ремонта</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="search__diagnistic search__block">
              <div class="search__input-block">
                <input id="dia" class="search__check" type="checkbox" name="dia" value="dia-1">
                <label for="dia" class="search__label card__card-title red_text_hover">Наличие срочной диагностики</label>
              </div>
            </div>
          </div>

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
              <br>
            </div>
          </div>

          <input id="city" name="city" type="text" {{--value="{{ $service_city }}"--}} hidden>
        </form>
      </div>
    </div>
  </div>
</aside>