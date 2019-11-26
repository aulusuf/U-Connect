@extends('index.app')

@section('title')
    Login
@endsection

@section('index')

<div class="mt-12 container mx-auto h-full flex justify-center items-center">
        <div class="text-center">
    
            <p class="my-4 text-2xl">Welcome</p>
            <p class="font-hairline text-l">Don't miss your next opportunity. Sign in to stay updated on your professional
                world.</p>
    
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="p-8 mb-6 rounded-lg w-2/3 inline-block">
                    <div class="mb-4">
                        <input type="email"
                            class="font-hairline block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded text-center"
                            value="{{ old('email') }}" placeholder="Your Email" name="email" id="email">
                    </div>
                    <div class="mb-6">
                        <input type="password"
                            class="font-hairline block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded text-center"
                            placeholder="Your Password" name="password" id="password">
    
                    </div>
                    <div class="text-center mt-4">
                        <button href="home.html"
                            class="bg-blue-400 hover:bg-blue-500 text-white font-semibold py-3 px-10 w-1/2 rounded"
                            type="submit">
                            Login
                        </button>
                    </div>
                    <div class="my-4 -mb-8">
                        @error('email')
                        <span class="text-red-600 font-semibold" role="alert">
                            {{ "Email atau password salah!" }}
                        </span>
                        @enderror                        
                    </div>
                </div>
    
            </form>
            <div class="text-center">
                <a class="no-underline align-baseline font-bold text-sm text-blue-600 hover:text-blue-dark" href="">
                    Forgot Password?
                </a>
                <p class="mt-5 text-grey-dark text-sm">Don't have an account?
                    <a class="no-underline text-blue-600 font-bold" href="{{ route('register') }}">Create an Account</a></p>
            </div>
        </div>
    </div>
@endsection
