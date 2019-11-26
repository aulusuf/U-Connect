@extends('index.app')

@section('title')
    Register
@endsection

@section('index')

<div class="container mx-auto h-full justify-center overflow-hidden mt-12">
        <div class="text-center">
            <p class="my-4 text-2xl">Sign Up</p>
            <p class="font-hairline text-l">Join with us for better experiences.</p>
        </div>
        <div class="text-center">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="w-1/3 p-8 rounded-lg inline-block">
                    <div class="mb-2">
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="text-hairline block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded text-center @error('email') border-red-700 @enderror"
                            placeholder="Full Name">
                        @error('name')
                        <span class="text-hairline text-red-700 font-hairline text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded text-center @error('email') border-red-700 @enderror"
                            placeholder="Email">
                        @error('email')
                        <span class="text-hairline text-red-700 font-hairline text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <select name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="password" id="password" name="password"
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded text-center @error('email') border-red-700 @enderror"
                            placeholder="Password">
                        @error('password')
                        <span class="text-red-700 font-hairline text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="rounded bg-blue-500 hover:bg-blue-400 text-white font-semibold py-2 px-4 w-full">
                            Agree & Join
                        </button>
                    </div>
                </div>
            </form>
            <div class="text-center">
                <p class="text-grey-dark text-sm">Already have account? <a href="{{ route('login') }}"
                        class="no-underline text-blue-600 hover:text-blue-400 font-bold">Login now!</a></p>
            </div>
        </div>
    </div>

@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select name="gender" id="">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

