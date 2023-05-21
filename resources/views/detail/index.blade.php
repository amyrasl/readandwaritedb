@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm">
                        <img src="{{asset('storage/'.$stationery->photo)}}" class="rounded mx-auto
                        d-block" width="80%" alt="">
                    </div>
                    <div class="col-sm mt-4">
                        <p>Stationery Name: {{ $stationery->name }}</p>
                        <p>Stationery Price: {{ $stationery->price }}</p>
                        <p>Stationery Stock: {{ $stationery->stock }}</p>
                        <p>Stationery Type: {{ $stationery->stationeryType->name }}</p>
                        <p>Description: {{ $stationery->description }}</p>
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
                        <form method ="POST" action="{{ url('detail') }}/{{ $stationery->id }}">
                            {{csrf_field()}}
                            <tr>
                                <td><input type="number" name="qty" class="form-control" required=""></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-primary">Add to Cart</button></td>
                            </tr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection