@extends('layouts.standard')
@section('page_title')
  Cars Index
@endsection

@section('main_content')
  <h1>Cars list</h1>
  <div>
    <a href="{{route('cars.create')}}">Add new car</a>
  </div>
  <br>
  <br>
  <div class="main_wrapper">
    @foreach ($cars as $car)
      <div class="singleCar">
        <img src="{{$car->imgurl}}" alt="">
        <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->model}}</a><br>
        <a href="{{route('cars.edit', $car)}}">Modify</a>
        <form action="{{route('cars.destroy',$car)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" onclick="return confirm('Are you sure to delete {{$car->manifacturer}}?')" value="Delete">
        </form>
      </div>
    @endforeach
  </div>
@endsection
