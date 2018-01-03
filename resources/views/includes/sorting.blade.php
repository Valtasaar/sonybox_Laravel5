<div class="col-md-8">
  <div class="search__sorting">
    <form method="get">
      <span class="search__sorting__title">Сортировать по:</span>
      <div class="search__sort-butt">
        <button class="dropdown-toggle search_select-button search_select-sorting red_bord_hover js-sort-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Не важно</button>
        <input name="sort_rating" type="text" value="" hidden>
        <input name="sort_price" type="text" value="" hidden>
        <input name="sort_price_rate" type="text" value="" hidden>
        <div class="dropdown-menu search_select-list search_sort-list js-sort-list">
          <ul>
            <li class="js-sort-price" data-sort="asc">Цене: по возрастанию</li>
            <li class="js-sort-price" data-sort="desc">Цене: по убыванию</li>
            <li class="js-sort-rate" data-sort="asc">Рейтингу: по возрастанию</li>
            <li class="js-sort-rate" data-sort="desc">Рейтингу: по убыванию</li>
            <li class="js-sort-rate-price" data-sort="asc">Рейтингу и цене: по возрастанию</li>
            <li class="js-sort-rate-price" data-sort="desc">Рейтингу и цене: по убыванию</li>
            <li class="js-sort-def" data-sort="">Не важно</li>
          </ul>
        </div>
      </div>
    </form>
  </div>
</div>