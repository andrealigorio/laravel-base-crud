@extends('layouts.app')

@section('title', 'My Shop')

@section('content')
    <div class="jumbo home">
        <div class="jumbo_box">
            <div class="jumbo_text">
                <h4>new arrivals</h4>
                <h2>new style</h2>
                <h1>new collection</h1>
            </div>
            <a href="{{route('dresses.create')}}" class="btn btn_jumbo">AGGIUNGI UN NUOVO PRODOTTO</a>
        </div>
    </div>
@endsection