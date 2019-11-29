@extends('profile.app')

@section('title')
{{ Auth::user()->name }}
@endsection

@section('content')

{{-- @if ()
    
@endif --}}

<div class="w-7/12 mt-12">
    <div class="px-6 py-4">
        <div class="cover border rounded-lg bg-white">
            <img id="user-cover" src="{{ asset('img') }}/{{ $user->cover }}" class="object-cover rounded-t-lg relative h-56 w-full" alt="cover profile">

                <div class="float-right">
                    <div class="absolute object-none object-right -mt-10 -ml-64">
                        <form action="{{ route('changePic') }}" id="form-changepic" method="POST" enctype="multipart/form-data">
                            <input class="hidden" type="file" name="picture" id="picture">
                            <button type="button" id="change-pic-btn" class="bg-gray-100 px-2 py-1 rounded-lg cursor-pointer justify-end">Change profile</button>
                        </form>
                    </div>
                </div>
                <div class="float-right">
                        <div class="absolute object-none object-right -mt-10 -ml-32">
                            <form action="{{ route('changeCov') }}" id="form-changecov" method="POST" enctype="multipart/form-data">
                                <input class="hidden" type="file" name="cover" id="cover">
                                <button type="button" id="btn-change-cov" class="bg-gray-100 px-2 py-1 rounded-lg cursor-pointer justify-end">Change cover</button>
                            </form>
                        </div>
                    </div>

            <div class="p-2 flex justify-between">
                <div class="flex">
                    <div class="ml-8 mr-4 my-2">
                        <img id="user-image" src="{{ asset('zondicons') }}/{{ $user->pic }}" class="border rounded-full w-12 h-12">
                    </div>
                    <div class="mt-2">
                        <a name="name" href="" class="text-sm font-semibold">{{ $user->name }}</a>
                        <p class="text-xs font-hairline">Personal Account</p>
                    </div>
                </div>
{{-- @php
    dd($checkFollow);
@endphp --}}
                
                {{-- Jika belum menjadi teman --}}
                @if ($user->id != Auth::user()->id) {{-- Jika user yang ditampilkan tidak sama dengan id login, tampilkan button --}}                
                    @if ($checkFollow==null)
                        <a href="{{ route('follow', $user->id) }}" class="my-3 bg-blue-700 rounded-full px-8 py-2 text-sm text-white">Follow</a>
                    @else
                    <a href="{{ route('unfollow', $user->id) }}" class="my-3 bg-blue-700 rounded-full px-8 py-2 text-sm text-white">Unfollow</a>
                    @endif
                @endif
                        

                
            </div>
        </div>
    </div>
    
    <div class="px-6 py-4">

                @include('post.new-post') 
            
            
            
            <div class="text-center my-4">
                <p class="timeline-label">Wall</p>
            </div>
            @include('post.post')
        </div>
        {{-- </div> --}}

</div>

@include('profile.right')

@endsection
