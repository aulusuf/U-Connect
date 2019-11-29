@foreach ($posts as $post)
    
    <div class="status-card bg-white rounded px-3 border-b-2 border-gray-500 mb-3">
        <div class="postcard-head flex mb-2">
            <img src="{{ asset('zondicons') }}/{{ $post->post_from_user->pic }}" class="rounded-full w-10 h-10 mr-3 mt-3">
            <div class="flex-1 mt-3">
                <a href="" class="font-bold text-sm" id="name">{{ $post->post_from_user->name }}</a>
                <div class="font-hairline text-xs">{{ $simpanbeda[$loop->index] }}</div>
            </div>
            <button class="mt-2 mr-4 text-gray-700"><i class="fas fa-ellipsis-h"></i></button>
        </div>
        <div class="content text-sm mb-2">
                {{--
                    
                    COBA SETTING INI
                    <img src="{{ asset('img/a.jpeg') }}" class="mb-2 rounded-lg" alt="asd">
                    
                --}}
            <p>{{$post->post}}</p>

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

        @include('comment.comment' , ['comments' => $post->comment_to_post])

        @include('comment.new-comment' , ['post_id' => $post->id])

        {{-- @include('comment.edit-comment' , ['post_id' => $post->id]) --}}

    </div>

@endforeach



