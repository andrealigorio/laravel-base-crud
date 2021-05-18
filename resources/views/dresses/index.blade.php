@extends('layouts.app')

@section('title', 'I nostri vestiti')

@section('content')
<div class="jumbo news">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="dresses_table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dresses as $dress)
                <tr>
                    <th scope="row">{{$dress['id']}}</th>
                    <td>{{$dress['name']}}</td>
                    <td>{{$dress['description']}}</td>
                    <td>{{$dress['price']}} €</td>
                    <td>
                        <a href="{{route('dresses.show', [$dress['id']])}}" class="btn btn_table">Details</a>
                        <a href="{{route('dresses.edit', [$dress['id']])}}" class="btn btn_table">Update</a>
                        <form class="delete" action="{{route('dresses.destroy', $dress['id'])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn_table btn_delete" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection