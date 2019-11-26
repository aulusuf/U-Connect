@extends('friendship.app')

@section('friendship')
    
<div class="bg-white rounded-lg px-3 py-2 pb-5">
    <h1 class="font-hairline text-xl mt-4 mb-2 ml-4">Search Result</h1>
    <hr>

    @foreach ($allUser as $list)



    <div class="p-5 border-b border-gray-200">
        <div class="flex justify-between">
            <div class="w-10/12 flex">
                <img id="user-image" src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="rounded-full w-20 h-20">
                <div class="search-small-detail-friend ml-5">
                    <a href="" class="">
                        <p class="text-lg truncate">{{ $list->name }} {{ $list->id }}</p>
                    </a>
                    <p class="text-sm my-1">Personal</p>
                    <p class="text-sm">1 teman yang sama</p>
                </div>
            </div>
            <div class="w-2/12 my-4">
                
                <?php 
                $check = DB::table('friendships')
                ->where('user_requested','=', $list->id)
                ->where('requester','=', Auth::user()->id)->first();

                if($check==''){
                    ?>

                    <a href="{{ url('/') }}/addFriend/{{ $list->id }}" id="sendReq-btn" class="bg-blue-600 rounded-full text-white text-sm py-2 px-3 ">
                        Add friend
                    </a>

                <?php
                } else { ?>
                    <p class="bg-blue-600 rounded-full text-white text-sm py-2 px-3 text-center"> Already Sent</p>
                <?php
                }?>

            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection