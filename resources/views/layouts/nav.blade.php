<nav class="w-full flex bg-white fixed z-10 top-0 h-12">

    <div class="brand w-3/12 h-12">aaaaaaa</div>

    <div class="w-6/12">
        <input type="text" class="w-full h-full px-6 font-hairline text-lg bg-transparent" style="outline:none" placeholder="Type to search.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type to search..'">
    </div>

    <div class="w-3/12 flex">
        <button class="flex px-2 py-2 text-center hover:bg-gray-300" id="more">
            <div class="my-auto pr-2 text-gray-700"><i class="fas fa-angle-down"></i></div>
            <img src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="rounded-full w-6 h-6 mx-3 mt-1">
            {{-- Dropdown --}}
            <div class="dropdown shadow hidden bg-white rounded-b-lg z-30 absolute w-56 justify-center -ml-2 mt-10" id="dropdown">
                <a href="">
                    <div class="text-center font-semibold text-gray-600 hover:text-gray-800 hover:bg-gray-300 rounded-lg m-2 py-2">
                    Setting
                    </div>
                </a>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="text-center font-semibold text-red-600 hover:text-white hover:bg-red-500 rounded-lg m-2 py-2">
                        Log out
                    </div>
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none">
                @csrf
            </form>
        </button>
        <div class="py-3 text-gray-700 pointer-events-none">
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
</nav>

