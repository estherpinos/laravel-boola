@extends('layouts.main')

@section('content')

<div class="container" id="container-main">
    <div class="product">
      <img :src="{{ Vite::asset('/resources/img/1.webp')}}">

      <span class="saldi"></span>
      <span class="sostenibilità"></span>
      <div class="product-2">
        <img :src="">
      </div>
      <div class="heart"><i class="fa-solid fa-heart"></i></div>


      <div class="text-foto">
        <p class="marca">marca</p>
        <h4>ciao</h4>
        <span class="prezzo-saldi">&euro;</span>
        <span class="prezzo"> 20 &euro;</span>

      </div>
    </div>

</div>


@endsection
