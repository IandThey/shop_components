<br>
<hr>
<div class="container mb-3">
    <div class="row">
      <div class="col">
        <hr>
        <img src="/storage/img/{{ $a_img_tovar }}.jpg" width="150px" height="150px" class="img-fluid rounded-start" alt="...">
        <hr>
      </div>
      <div class="col">
        <div class="card-body">
          <h5 class="card-title">{{ $name_tovar }}</h5>
          <p class="card-text">{{ $text_tovar }}</p>
        </div>
        <div class="col card">
            <h3 class="d-flex justify-content-center">{{ $price_tovar }} P</h3>
            <a type="button" href="/buy_add/tovar/{{ $id }}" class="btn btn-success">Заказать</a>
        </div>
      </div>
    </div>
  </div>