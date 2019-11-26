<div class="w-3/12 mt-12">
    <div class="pr-4 py-4">
        <div class="bg-white rounded-lg w-full px-2 py-1 pb-4 border-b-2 border-gray-400">
            <p class="py-2 px-2 font-hairline text-gray-700">Followers</p>
            <div class="flex flex-wrap">

                @foreach ($followers as $follower)

                    <div class="p-2 px-2 w-1/3 text-gray-600 text-center">
                        <img src="{{ asset('zondicons') }}/{{ $follower->requester_to_user->pic }}" class="justify-center mx-auto border rounded-full w-12 h-12">
                        <a href="{{ route('profile', $follower->requester_to_user->id) }}" class="text-center my-1 text-sm truncate">{{ $follower->requester_to_user->name }}</a>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
    <div class="pr-4 py-4">
        <div class="bg-white rounded-lg w-full px-2 py-1 pb-4 border-b-2 border-gray-400">
            <p class="py-2 px-2 font-hairline text-gray-700">Followings</p>
            <div class="flex flex-wrap">

                @foreach ($followings as $following)

                <div class="p-2 px-2 w-1/3 text-gray-600 text-center">
                    <img src="{{ asset('zondicons') }}/{{ $following->user_requested_to_user->pic }}" class="justify-center mx-auto border rounded-full w-12 h-12">
                    <a href="{{ route('profile', $following->user_requested_to_user->id) }}" class="text-center my-1 text-sm truncate">
                        {{ $following->user_requested_to_user->name }}
                    </a>
                </div>

            @endforeach
            </div>
        </div>
    </div>



    <div class="pr-4 py-4">
        <div class="bg-white rounded-lg w-full px-2 py-1">
            <p class="py-2 px-2">Photos</p>
        </div>
    </div>

</div>