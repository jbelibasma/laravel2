@extends('layout')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>


            </div>
        </div>

        <ul>
            @foreach ($categories as $category )
            <li>{{$category->category}}</li>
            @endforeach
        </ul>
@endsection

@section('footer')
    <div class="links">
        <a href="/libre">Libre</a>
        <!-- donner un nom au route -->
        <a href="{{route('autre')}}"">Libre avec route name </a>
        <a href="/libre/olfa">Libre avec un parametre </a>
        <a href="{{route('parametre',['Olfa','landolsi'])}}">Libre avec un parametre et un nom </a>
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection

