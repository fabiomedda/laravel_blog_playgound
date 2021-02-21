@extends('layout.app')

@section('title')
    About page
@endsection


@section('jumbotron')
    <div class="jumbotron bg-dark text-white">
        <h1 class="display-3">Jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
@endsection

@section('main')
    <h1>About {{ $name }}</h1>
@endsection