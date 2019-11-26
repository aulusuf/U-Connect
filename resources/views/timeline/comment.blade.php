
{{-- @foreach ($post->comment()->get() as $comment) --}}
<div class="status-comment-section flex my-2">
    <img  name="user_profile" src="https://i.imgur.com/8Km9tLL.jpg" class="rounded-full w-5 h-5 mr-2">
    <div class="flex-1">
        <a name="user_comment" href="" class="font-bold text-xs">aa</a>
        <p name="comment" class="status-comment text-sm bg-gray-100 px-2 pb-1 rounded-lg mt-1">is comment</p>
        <div class="status-comment-time flex text-xs ml-2">
            <p name="created_at" class="text-xs">{{ $simpanbeda[$loop->index] }}</p>
        </div>
    </div>
</div>
{{-- @endforeach --}}