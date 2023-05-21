@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm">
                        <img src="{{asset('storage/'.$cart->stationery->photo)}}" class="rounded mx-auto
                        d-block" width="80%" alt="">
                    </div>
                    <div class="col-sm mt-4">
                        <p>Stationery Name: {{ $cart->stationery->name }}</p>
                        <p>Stationery Price: {{ $cart->stationery->price }}</p>
                        <p>Stationery Stock: {{ $cart->stationery->stock }}</p>
                        <p>Stationery Type: {{ $cart->stationery->stationeryType->name }}</p>
                        <p>Description: {{ $cart->stationery->description }}</p>
                    </div>
                    <div class="col-sm float-right">
                        <br><br><br><br><br><br><br><br>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method ="POST" action="{{ url('editcart') }}">
                            {{csrf_field()}}
                            <tr>
                                <input type="hidden" name="id" value="{{$cart->id}}">
                                <td><input type="number" name="qty" class="form-control" required=""></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-dark">Update Cart</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection