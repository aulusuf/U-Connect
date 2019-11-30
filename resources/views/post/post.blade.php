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
        <div>
            <form action="{{ route('update.post') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="user_id" type="hidden" value="{{ Auth::id() }}">
                <div class="new-status-modal" id=modal>
                    <div class="new-status-card bg-white rounded-lg pb-2 text-center px-4">
                        {{-- <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 text-sm rounded-full text-gray-800">
                            <i class="fas fa-camera"></i>
                            Upload Foto
                        </button> --}}
                        <textarea class="h-24 status resize-none py-1 px-2 text-md flex-auto w-full my-2" type="text" placeholder="Tulis sesuatu.." name="post" value="{{ $post->post }}"></textarea>
                        <button type="submit" class="mx-1 px-2 py-2 w-16 bg-blue-300 rounded-lg text-gray-100">Edit</button>
                        <button class="mx-1 px-2 py-2 w-16 bg-red-300 rounded-lg text-gray-100">Cancel</button>
                </div>
            </div>
                <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
            </form>
        </div>

        @include('comment.comment' , ['comments' => $post->comment_to_post])

        @include('comment.new-comment' , ['post_id' => $post->id])

        {{-- @include('comment.edit-comment' , ['post_id' => $post->id]) --}}

    </div>

@endforeach



