@extends('layouts.header')
@section('master')
    <div class="container">
        <h1>Užsakymas knygos:</h1>
           <h2>{{$x->name}}</h2>
        <hr>

        <form method="POST" action="/" class="container">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Jūsų el. paštas</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Norimas kiekis</label>
                <input type="number" min="0" class="form-control" id="exampleInputPassword1" placeholder="1" name="quantity">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control"  value="{{$x->name}}" name="book_name">
            </div>
            <button type="submit" class="btn btn-default">Užsakyti</button>
        </form>

    </div>
@endsection