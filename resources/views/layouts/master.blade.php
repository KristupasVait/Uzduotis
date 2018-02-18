@extends('layouts.header')
@section('master')
    <div class="container">
        <ul>
            @foreach ($books as $x)
                <li> <a href="books/{{$x->id}}">{{ $x->name }} </a></li>
            @endforeach
            {{$books->links()}}
        </ul>
    </div>
@stop