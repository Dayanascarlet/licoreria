@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('LICORES') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<h1 class="text-white" class="bg-info">licorería</h1>
<div class="row">
    <div class="col-md-4 ">
      <div class="card" style="width: 10rem; margin-left:1%;">
        <img class="card-img-top" src="https://licoreschullavida.com/wp-content/uploads/2020/07/norteno-375-ml.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Norteño</h5>
          <p class="card-text">5.50</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 10rem; margin-left:1%;">
        <img class="card-img-top" src="https://licoreschullavida.com/wp-content/uploads/2020/11/tropico-seco-2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Trópico seco</h5>
          <p class="card-text">10.00</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 9rem; margin-left:1%;">
        <img class="card-img-top" src="https://licoreschullavida.com/wp-content/uploads/2020/07/cana-manabita.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Caña manabita </h5>
          <p class="card-text">12.00</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin-top: 5%;">
      <div class="card" style="width: 10rem; margin-left:1%;">
        <img class="card-img-top" src="https://licoreschullavida.com/wp-content/uploads/2020/07/pajaro-azul.jpg">
        <div class="card-body">
          <h5 class="card-title">pajaro azul</h5>
          <p class="card-text">10.50</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin-top: 5%;">
      <div class="card" style="width: 9rem; margin-left:1%;">
        <img class="card-img-top" src="https://licoreschullavida.com/wp-content/uploads/2020/07/Aguardiente-antioqueno-750-ml.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Aguardiente antioqueño</h5>
          <p class="card-text">17.50</p>
          <a href="#" class="btn btn-primary">𝕮𝖔𝖒𝖕𝖗𝖆𝖗</a>
        </div>
      </div>
    </div>

    <div class="col-md-4" style="margin-top: 2%;">
      <div class="card" style="width: 10rem; margin-left:1%;">
        <img class="card-img-top" src="https://licoreschullavida.com/wp-content/uploads/2020/07/zhumir-durazno-2.jpg"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Zhumir durazno</h5>
          <p class="card-text">9.50</p>
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
