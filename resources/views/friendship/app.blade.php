<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')

    <body class="bg-gray-300">

        @include('layouts.nav')

        <div class="flex">

            <div class="w-3/12 pt-12 fixed">
                @include('layouts.sidebar')
            </div>

            <div class="w-2/12 mt-12 mr-12">
                {{-- this section to empty field and manage timeline to the center --}}
            </div>

            <div class="main mt-16 ml-4 w-6/12">
                @yield('friendship')
            </div>
            <div class="search-filter mt-16 w-2/12">
                
            </div>

        </div>

        </body>

    @include('layouts.footer')

</html>
