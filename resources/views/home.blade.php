@extends('layouts.base')

@section('pageTitle')
DC COMICS - home
@endsection

@section('mainContent')
<div class="container">

    <div class="row">
        <div class="button-blu1">
            current series
        </div>
        @foreach ($comicscards as $comicscard)
        <div class="col">
            <img src="{{$comicscard['thumb']}}" alt="{{$comicscard['title']}}">
            <a href="/actioncomics">{{$comicscard['series']}}</a>            
        </div>
        @endforeach
        <div class="botton-blu2">
           load more 
        </div>
    </div>
</div>
@endsection