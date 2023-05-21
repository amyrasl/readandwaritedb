@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @if($stationery->isEmpty())
            <p>There is no product match with the keyword</p>
            @else
                @foreach($stationery as $s)
                <div class="col">
                    <div class="col-md-4" style="margin-bottom:5px">
                        <div class="card" style="width: 18rem;">
                            <img  src="{{asset('storage/'.$s->photo)}}" height="250px;" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-text" href ="{{ url('detail') }}/{{ $s->id }}">{{ $s->name }}</a><br>
                                <a>{{ $s->description }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
    {{ $stationery->withQueryString()->links() }}
</div>


@endsection