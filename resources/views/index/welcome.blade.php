@extends('index.app')

@section('title')
    Welcome
@endsection

@section('index')

<body class="bg-gray-100 tracking-normal font-sans leading-normal">
    <nav class="p-2 mt-0 w-full z-10">
        <div class="container mx-auto px-20 flex flex-wrap items-center">
		    <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
            </div>
            <div class="flex w-full pt-5 md:w-1/2 md:justify-end">
                @auth
                    {{-- <a href="{{ url('/home') }}/{{ Auth::user()->slug }}">Home </a> --}}
                    <a href="{{ url('/profile') }}/{{ Auth::user()->id }}">Profile</a>
                    {{-- {{route('timeline')}} --}}
                    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div>Logout</div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none">
                            @csrf
                        </form>
                @else
                    <a href="{{ route('login') }}" class="py-2 px-6 text-white font-bold rounded-lg bg-blue-300 hover:bg-white hover:border-blue-300 hover:text-blue-300 border-2 border-blue-300 shadow">Login</a>
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="py-2 px-6 text-blue-500 hover:text-white font-bold rounded-lg bg-white hover:bg-blue-300 mx-5 shadow">Join us</a>
                    @endif
                @endauth
			</div>
        </div>
    </nav>

    <div class="container w-full px-1 md:px-40  text-center z-10">
        <div class="mt-10 z2">
            <p class="font-sans text-5xl font-light text-gray-800">
                Welcome to our graduate community
            </p>
            <p class="font-sans text-4xl text-gray-600 mt-5">
                Ikatan Alumni Sistem Informasi <br />
                Universitas Jember
            </p>
            <div class="mt-10">
                <input class="px-5 py-2 inline-block w-1/2 rounded-lg text-2xl placeholder-gray-400 text-center font-light shadow-md"
                    type="text" name="" id="" placeholder="Find our graduates" />
            </div>
        </div>
    </div>
</body>
@endsection