@foreach ($posts as $post)
    
<div class="status-card bg-white rounded px-3 border-b-2 border-gray-500 mb-3">
    <div class="postcard-head flex mb-2">
        <img src="{{ asset('zondicons') }}/{{$post->post_from_user->pic}}" class="rounded-full w-10 h-10 mr-3 mt-3">
        <div class="flex-1 mt-3">
        
            <a href="" class="font-bold text-sm" id="name">{{$post->post_from_user->name}}</a>
            <div class="font-hairline text-xs">{{ $simpanbeda[$loop->index] }}</div>
        </div>
        <button class="mt-2 mr-4 text-gray-700"><i class="fas fa-ellipsis-h"></i></button>
    </div>
    <div class="content text-sm mb-2">
            {{--
                
                COBA SETTING INI
                <img src="{{ asset('img/a.jpeg') }}" class="mb-2 rounded-lg" alt="asd">
                
            --}}
        <p>
            {{$post->post}}
        </p>
    </div>
    <div class="text-xs mb-1">
        <p class="sum_like">3 like</p>
        {{$post->id}}
    </div>
    <div class="flex text-gray-400">
        <button class="mr-2">
            <i class="far fa-heart text-xl"></i>
        </button>
        <button class="mx-2">
            <i class="far fa-comment text-xl"></i>
        </button>
    </div>
    <div class="">

    </div>

    @include('layouts.comment' , ['comments' => $post->comment_to_post])
    {{-- ['comments' => $posts->comments, 'post_id' => $posts->id] --}}
    <form action="{{ route('makeComment',$post->id) }}" method="post">
            @csrf
            <div class="flex my-2 mb-4">
                {{-- @php
                    dd($post->id)   ;
                @endphp --}}
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <img name="user_profile" src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="rounded-full w-5 h-5 mr-2">
                <input name="comment" type="text" class="w-full text-sm" placeholder="Beri komentar..">
            </div>
            <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
        </form>

</div>


@endforeach



