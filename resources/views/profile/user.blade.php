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
                        <img id="user-image" src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="border rounded-full w-12 h-12">
                    </div>
                    <div class="mt-2">
                        <a name="name" href="" class="text-sm font-semibold">Muhammad Yusuf Auliya</a>
                        <p class="text-xs font-hairline">Personal Account</p>
                    </div>
                </div>

                {{-- Jika belum menjadi teman --}}
                {{-- <div class="py-1">
                    <button name="add_connection" type="submit" class="bg-blue-700 rounded-full px-8 py-4 text-sm text-white">Add Connection</a>
                </div> --}}
                
            </div>
        </div>
    </div>
    
    <div class="px-6 py-4">
        {{-- <div class="w-4/12 mr-3">
            <div class="bg-white rounded-lg w-full">
                asd
            </div>
        </div> --}}
        {{-- <div class="w-8/12"> --}}
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="new-status-modal" id=modal>
                    <div class="new-status-card text-center px-4">
                        <p class="timeline-label">Apa yang kamu pikirkan?</p>
                        <img src="{{ asset('admin/img/avatar.png') }}"
                            class="justify-center rounded-full w-10 h-10 mx-auto mb-2">
                        <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 text-sm rounded-full text-gray-800">
                            <i class="fas fa-camera"></i>
                            Upload Foto
                        </button>
                        <textarea class="h-24 status resize-none py-1 px-2 text-md flex-auto w-full my-2" type="text"
                            placeholder="Tulis sesuatu.." name="content">
                        </textarea>
                    <button class="bg-gray-500 w-full rounded text-white hover:bg-gray-700 mb-3 py-2 font-semibold" type="submit">Kirim</button>
                </div>
            </div>
                <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
            </form>
            
            <div class="text-center my-4">
                <p class="timeline-label">Wall</p>
            </div>
            <div class="status-card">
                    <div class="postcard-head flex mb-2">
                        <img src="https://i.imgur.com/8Km9tLL.jpg" class="rounded-full w-10 h-10 mr-3 mt-3">
                        <div class="flex-1 mt-3">
                            <a href="" class="font-bold text-sm" id="name">asd</a>
                            <div class="font-hairline text-xs">2 hours ago</div>
                        </div>
                        <button class="mt-2 mr-4 text-gray-700"><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                    <div class="content text-sm mb-2">
                            {{--
                                
                                COBA SETTING INI
                                <img src="{{ asset('img/a.jpeg') }}" class="mb-2 rounded-lg" alt="asd">
                                
                            --}}
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad harum vitae nisi blanditiis soluta corrupti, veritatis laborum accusamus nesciunt eveniet dignissimos ab corporis! Accusantium debitis illum autem molestiae sit quia?</p>
                    </div>
                    <div class="text-xs mb-1">
                        <p class="sum_like">3 like</p>
                    </div>
                    <div class="flex text-gray-400">
                        <button class="mr-2">
                            <i class="far fa-heart text-xl"></i>
                        </button>
                        <button class="mx-2">
                            <i class="far fa-comment text-xl"></i>
                        </button>
                    </div>
                
                    {{-- @include('user.timeline.comment') --}}
                
                    <div class="flex my-2 mb-4">
                        <img name="user_profile" src="https://i.imgur.com/8Km9tLL.jpg" class="rounded-full w-5 h-5 mr-2">
                        <input name="comment" type="text" class="w-full text-sm" placeholder="Beri komentar..">
                    </div>
                </div>
            </div>
        {{-- </div> --}}

</div>

@include('profile.right');

@endsection
