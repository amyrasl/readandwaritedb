@extends('layouts.app')


@section('content')

<div class="container">
@foreach($cart as $c)
    <div class="card">
        <div class="card-body">
            <h5>Stationery Name: {{ $c->stationery->name }} </h5>
            <li>Stationery Price: {{ $c->stationery->price }} </li>
            <li>Quantity: {{ $c->qty }} </li>
            <hr style="width:50%;text-align:left;margin-left:0">
            <a>Stationery Price: {{ $c->subtotal }} </a>
            <br><br>
            <a class="nav-link float-right btn btn-info mr-1" type="button" href="{{ url('editcart') }}/{{ $c->id }}">Edit</a>
            <form action="{{ url('deletecart') }}" method="POST">
            {{csrf_field()}}
                <input type="hidden" name="id" value="{{$c->id}}">
                <input type="submit" name="submitbtn" value="delete" class="nav-link float-right btn btn-danger mr-1">
            </form>
        </div>
    </div>
@endforeach
<a class="btn btn-success" type="button" href="{{ url('addhistory') }}">Check Out Now!</a>
</div>

@endsection