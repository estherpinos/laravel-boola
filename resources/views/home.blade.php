@extends('layouts.main')

@section('content')

<div class="container" id="container-main">
    <div v-for="(item, index) in menuMain" :key="index" class="product">
      <img :src="getImagePath(item.primaryImage)">

      <span class="saldi" v-if="item.discount">{{ item.discount }}</span>
      <span class="sostenibilità" v-if="item.sostenibilita">{{item.sostenibilita}}</span>
      <div class="product-2">
        <img :src="getImagePath(item.secondaryImage)">
      </div>
      <div class="heart"><i class="fa-solid fa-heart"></i></div>


      <div class="text-foto">
        <p class="marca">{{ item.marca }}</p>
        <h4>{{ item.modello }}</h4>
        <span class="prezzo-saldi">{{ item.lastPrice }} &euro;</span>
        <span class="prezzo" v-if="item.fullPrice"> {{ item.fullPrice }} &euro;</span>

      </div>
    </div>

</div>


@endsection
