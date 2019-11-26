<aside class="text-gray-600 pl-12 pr-6 pt-8 text-sm z-10 h-screen w-10/12">
    <ul>
        <li class="pb-4 py-1">
            <a class="w-full flex" href="{{ url('/profile') }}/{{ Auth::user()->id }}">
                <div class="w-2/12 py-2">
                    <img src="{{ asset('zondicons') }}/{{Auth::user()->pic}}" class="rounded-full w-6 h-6">
                </div>
                <div class="w-10/12 pl-2 py-2 truncate flex justify-between">
                    <p class="pointer-events-none">Profile</p>
                </div>
            </a>
        </li>
        <li class="pb-4 py-2">
            <a class="w-full flex" href="{{ route('timeline') }}">
                    {{-- {{ route('timeline') }} --}}
                <div class="w-2/12 py-2">
                    <svg class="w-6 h-6 fill-current text-gray-600 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v18l-8-4-8 4V2z"/>
                    </svg>
                </div>
                <div class="w-10/12 pl-2 py-2 truncate">
                        <p class="truncate">News Feed</p>
                        {{-- <div class="rounded-lg text-xs px-2 py-1 -mt-1 border border-gray-500 text-gray-500">10</div> --}}
                </div>
            </a>
        </li>
        {{-- <li class="pb-4 py-2">
            <a class="w-full flex" href="">
                <!--{{ route('job') }}-->
                <div class="w-2/12 py-2">
                    <svg class="w-6 h-6 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M6 4H5a1 1 0 1 1 0-2h11V1a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1h-7v8l-2-2-2 2V4z"/>
                    </svg>
                </div>
                <div class="w-10/12 pl-2 py-2 truncate">
                    <p class="truncate">Job</p>
                </div>
                <!-- <div class="w-2/12 text-right"> </div> -->
            </a>
        </li> --}}
        {{-- <li class="pb-4 py-2">
            <a class="w-full flex" href="{{ route('reqWaiting') }}">
                <div class="w-2/12 py-2">
                    <svg class="w-6 h-6 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z"/>
                    </svg>
                </div>
                <div class="w-10/12 pl-2 py-2 truncate">
                    <p class="truncate">Friend Request</p>
                </div>
                <div class="rounded-full text-xs bg-red-500 text-white font-medium my-1">
                    <p class="px-4 py-2">{{ App\Friendship::where('state', 0)->where('user_requested', Auth::user()->id)->count() }}</p>
                </div>
            </a>
        </li> --}}
    </ul>
</aside>