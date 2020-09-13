@extends('layouts.standard')
@section('page_title')
  Cars Show
@endsection

@section('main_content')
<h2>Dettagli Auto</h2>

<div class="main_wrapper">
  <div class="singleCar">
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
    <div class="btn_wrapper">
      <a class="standard_btn" href="{{route('cars.edit', $car)}}">Modify</a>

      <form action="{{route('cars.destroy',$car)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="delete_btn" type="submit" onclick="return confirm('Are you sure to delete {{$car->manifacturer}}?')" value="Delete">
      </form>

      <a class="standard_btn"  href="{{ route('cars.index')}}">Go back</a>
    </div>
  </div>
</div>
@endsection
