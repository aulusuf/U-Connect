@foreach ($comments as $comment)

<div class="status-comment-section flex my-2">
    <img  name="user_profile" src="{{ asset('zondicons') }}/{{ $comment->comment_from_user->pic }}" class="rounded-full w-5 h-5 mr-2">
    <div class="flex-1">
        <div class="flex justify-between">
            <a name="user_comment" href="" class="font-bold text-xs">{{$comment->comment_from_user->name}}</a>
            <div class="text-xs flex">
                <div class="px-2">
                    <a href="{{ route('edit.comment', $comment->id) }}" class="text-blue-100 hover:text-blue-400" id="edit-comment">Edit</a>                      
                </div>
                <div class="px-2">
                    @method('DELETE')
                    <a href="{{ route('delete.comment', $comment->id) }}" class="text-red-100 hover:text-red-400">Delete</a>
                </div>
            </div>
        </div>

        <p name="comment" class="status-comment text-sm bg-gray-100 px-2 pb-1 rounded-lg mt-1">{{$comment->comment}}</p>

        {{-- Jquery --}}
        <form action="{{ route('update.comment',$comment->id) }}" method="post">
                @csrf
                <div class="flex my-2 mb-4">
                    {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="post_id" value="{{$post_id}}"> --}}
                    <img name="user_profile" src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="rounded-full w-5 h-5 mr-2">
                    <input name="comment" type="text" class="w-full text-sm" placeholder="Beri komentar.." value="{{ $comment->comment }}">
                </div>
                <div class="text-sm flex justify-end mr-8">
                    <button type="submit" class="mx-1 px-2 py-2 w-16 bg-blue-300 rounded-lg text-gray-100">Edit</button>
                    <button class="mx-1 px-2 py-2 w-16 bg-red-300 rounded-lg text-gray-100">Cancel</button>
                </div>
                <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
            </form>
        <div class="status-comment-time">
            <p name="created_at" class="text-xs">{{ $simpanbeda[$loop->index] }}</p>
        </div>
    </div>
</div>

@endforeach

{{-- @endif --}}
