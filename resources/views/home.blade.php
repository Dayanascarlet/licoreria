@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<h1 class="text-white" class="bg-info">𝕷𝖎𝖘𝖙𝖆 𝖉𝖊 𝕮𝖔𝖒𝖎𝖉𝖆</h1>
<div class="row">
    <div class="col-md-4  ">
      <div class="card" style="width: 18rem; margin-left: 2%;">
        <img class="card-img-top" src="https://informativoecuadorcom.files.wordpress.com/2020/05/encebollado-ecuatoriano-1-1.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">𝕰𝖓𝖈𝖊𝖇𝖔𝖑𝖑𝖆𝖉𝖔</h5>
          <p class="card-text">2.00</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin-left: 2%;">
        <img class="card-img-top" src="https://static3.abc.es/media/bienestar/2019/12/28/langosta-gallega-kcaC--620x349@abc.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">𝕷𝖆𝖓𝖌𝖔𝖘𝖙𝖆</h5>
          <p class="card-text">15.00</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin-left: 2%;">
        <img class="card-img-top" src="https://www.deliciosi.com/images/600/668/arroz-con-camarones.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">𝕬𝖗𝖗𝖔𝖟 𝕮𝖔𝖓 𝕮𝖆𝖒𝖆𝖗𝖔𝖓</h5>
          <p class="card-text">4.00</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin-top: 2%;">
      <div class="card" style="width: 18rem; margin-left:2%;">
        <img class="card-img-top" src="https://recetas123.net/wp-content/uploads/camarones-apanados.jpg">
        <div class="card-body">
          <h5 class="card-title">𝕮𝖆𝖒𝖆𝖗𝖔𝖓 𝕬𝖕𝖆𝖓𝖆𝖉𝖔</h5>
          <p class="card-text">3.50</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin-top: 2%;">
      <div class="card" style="width: 18rem; margin-left:2%;">
        <img class="card-img-top" src="https://www.tqma.com.ec/images/com_yoorecipe/banner_superior/4744_1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">𝕮𝖊𝖛𝖎𝖈𝖍𝖊</h5>
          <p class="card-text">2.50</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗e</a>
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin-top: 2%;">
      <div class="card" style="width: 18rem; margin-left:2%;">
        <img class="card-img-top" src="https://i.pinimg.com/originals/31/99/71/319971e1eeff2fbcfefee2c6a1775c38.jpg"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">𝕮𝖔𝖗𝖛𝖎𝖈𝖍𝖊</h5>
          <p class="card-text">1.50</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>


</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
