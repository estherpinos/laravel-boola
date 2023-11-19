@extends('layouts.main')

@section('content')

<div class="container" id="container-main">

    @forelse ($products as $product)

            <div class="product">

                {{-- image 1 --}}
                <img src="/img/{{ $product['frontImage']}}" alt="{{$product['name']}}">

                {{-- red and green  --}}
                @if (($product['badges']))
                @foreach ($product['badges'] as $badge)
                    @if ($badge['type'] === 'tag')
                        <span class="sostenibilità">{{ $badge['value'] }}</span>
                    @elseif ($badge['type'] === 'discount')
                        <span class="saldi">{{ $badge['value'] }}</span>
                    @endif
                @endforeach
                @endif


                {{-- image 2 --}}
                <div class="product-2">
                    <img src="/img/{{ $product['backImage']}}" alt="{{$product['name']}}">
                </div>
                <div class="heart"><i class="fa-solid fa-heart"></i></div>


                <div class="text-foto">
                    <p class="marca">{{$product['brand']}}</p>
                    <h4>{{$product['name']}}</h4>
                    <span class="prezzo-saldi">&euro;</span>
                    <span class="prezzo"> {{$product['price']}}&euro;</span>

                 </div>
            </div>

    @empty

    @endforelse


</div>


@endsection
