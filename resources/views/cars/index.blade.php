@extends('layouts.standard')
@section('page_title')
  Cars Index
@endsection

@section('main_content')
  <h2>Cars list</h2>
  <div class="top_bar_btn">
    <a class="standard_btn create_car" href="{{route('cars.create')}}">Add new car</a>
  </div>
  <div class="main_wrapper">
    @foreach ($cars as $car)
    <a href="{{ route('cars.show', $car)}}" >
      <div class="singleCar selectable">
        <img src="{{$car->imgurl}}" alt="">
        <p>{{$car->manifacturer}} {{ $car->model}}</p>
        <div class="btn_wrapper">
          <a class="standard_btn" href="{{route('cars.edit', $car)}}">Modify</a>
          <form action="{{route('cars.destroy',$car)}}" method="post">
            @csrf
            @method('DELETE')
            <input class="delete_btn" type="submit" onclick="return confirm('Are you sure to delete {{$car->manifacturer}}?')" value="Delete">
          </form>
        </div>
      </div>
    </a>
    @endforeach
  </div>
@endsection
