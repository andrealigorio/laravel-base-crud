@extends('layouts.app')

@section('title', 'My Shop | ' .$dress['name'])

@section('content')
    <div class="jumbo news">
            <div class="dress_box">
                <div class="dress_image">
                    @if ($dress['image'] != null)
                        <img src="{{asset('img/'. $dress['image'])}}" alt="">
                    @else
                        <img src="{{asset('img/img_default.jpg')}}" alt="">
                    @endif
                </div>
                <div class="dress_content">
                    <h2 class="name">{{$dress['name']}}</h2>
                    <p class="description">{{$dress['description']}}</p>
                    <div class="price">{{$dress['price']}} €</div>
                    <div class="color">Color: {{$dress['color']}}</div>
                    <div class="size">Size: {{$dress['size']}}</div>
                    <button class="btn add_cart">AGGIUNGI AL CARRELLO</button>
                </div>
            </div>
    </div>
@endsection