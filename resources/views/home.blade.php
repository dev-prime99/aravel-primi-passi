@extends('layouts.base')

@section('section')

  <div class="cds-container">
    @foreach ($cd as $item)
      <div class = "cd">
        <img src="{{$item["poster"]}}" alt="">
        <h3>{{$item["title"]}}</h3>
        <small>{{$item["author"]}}</small>
        <strong>{{$item["year"]}}</strong>
      </div>
    @endforeach
  </div>

@endsection
