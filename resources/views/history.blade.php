@extends('layouts.app')


@section('content')

@php
    $total = 0;
@endphp

<div class="container">
    <div class="row justify-content-center">
        <table class="table table-borderless">
            @foreach($thedate as $col)
                <thead>
                    <tr class="table-primary">
                    <th colspan="3">{{ $col->date }}</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                @foreach($checkout as $c)
                    <tbody>
                        <tr>
                        @if($col->date == $c->date)
                            <td scope="row">{{ $c->name }}</td>
                            <td>{{ $c->price }}</td>
                            <td>{{ $c->qty }}</td>
                            <td>{{ $c->subtotal }}</td>
                            <th colspan="3">
                            @php
                            $total += $c->subtotal;
                            @endphp
                            </th>
                        @endif
                        </tr>
                    </tbody>
                @endforeach
                    <tbody>
                        <tr>
                        <th colspan="3">Total : {{ $total }}</th>
                        </tr>
                    </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection