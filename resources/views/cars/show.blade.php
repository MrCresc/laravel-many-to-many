@extends('layouts.standard')
@section('page_title')
  Cars Show
@endsection

@section('main_content')
<h1>Dettagli Auto</h1>

<h2> {{ $car->manifacturer}} {{ $car->model}} </h2>
<div>
  <img src="{{$car->imgurl}}" alt="">
  @if ($car->tags->isEmpty())
    <h3>No type for this car!</h3>
  @else
    <h3>Type:
    @foreach ($car->tags as $tag)
      - {{$tag->name}}
    @endforeach
    </h3>
  @endif

</div>
<ul>
  <li>Engine: {{ $car->engine }}</li>
  <li>Year: {{ $car->year }}</li>
  <li>Plate: {{ $car->plate }}</li>
</ul>

<h3>Owner details</h3>
<p>
  <b>{{ $car->user->name}}</b>
</p>
<p>
  For contacts: <br>
  <i>{{ $car->user->email}}</i>
</p>
<hr>
<a href="{{route('cars.edit', $car)}}">Modify</a><hr>
<a href="{{ route('cars.index')}}">Go back</a><hr>
@endsection
