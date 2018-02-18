@extends('layouts.header')
@section('offers')
    <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kiekis</th>
                        <th scope="col">Knyga</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($offers as $x)
                    <tr>
                        <th scope="row">{{$x->id}}</th>
                        <td>{{$x->email}}</td>
                        <td>{{$x->quantity}}</td>
                        <td>{{$x->book_name}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
    </div>

@endsection