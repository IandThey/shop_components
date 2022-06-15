@extends('SP.main_SP')

@section('title')
    TQYES || Католог ГО
@endsection

@section('content')
<div class="cars-container">
  <div class="container-xxl" id="container-cars">
    <div class="row">
        <hr>
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <h1>
                    Каталог комплектующих
                </h1>
            </div>
        <hr>
    </div>

    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4 my-0 cars" id="cars">
        @foreach ($katalogs as $elemk)
            @include('SP.razdel_SP',[
                'id' => $elemk['id'],
                'name_razdel' => $elemk['name_razdel'],
                'a_razdel' => $elemk['a_razdel'],
                'img_razdel' => $elemk['img_razdel'],
            ])
        @endforeach
    </div>
  </div>
</div>
@endsection