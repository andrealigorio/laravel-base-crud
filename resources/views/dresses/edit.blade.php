@extends('layouts.app')

@section('title', 'Inserimento nuovo prodotto')

@section('content')
<div class="jumbo news">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="my_form" action="{{route('dresses.update', $dress['id'])}}" method="post">
        @csrf
        {{-- <input name="_method" type="hidden" value="POST">   con la forma in blade come sotto--}}
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$dress->name}}" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$dress->description}}" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" name="size" id="size" value="{{$dress->size}}" placeholder="Size">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" id="image" value="{{$dress->image}}" placeholder="Image">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color" value="{{$dress->color}}" placeholder="Color">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" min="1" max='1000' class="form-control" name="quantity" id="quantity" value="{{$dress->quantity}}" placeholder="Quantity">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="price" id="price" value="{{$dress->price}}" placeholder="Price">
        </div>
        
        <button type="submit" class="btn btn-default">MODIFICA PRODOTTO</button>
    </form>
</div>
@endsection