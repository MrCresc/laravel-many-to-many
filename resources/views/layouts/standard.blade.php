<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
  <body>
    <main>
      <header>
        <nav>

            <a href="{{ route('cars.index')}}"><img class="logo" src="{{asset('img/logo.png')}}" alt=""></a>
            <a href="{{ route('cars.index')}}"><h1>Mr.Cresc showroom</h1></a>
        </nav>
      </header>
      @yield('main_content')
    </body>
  </main>

</html>
