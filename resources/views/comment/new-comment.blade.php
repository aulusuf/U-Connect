<form action="{{ route('store.comment', $post_id) }}" method="post">
    @csrf
    <div class="flex my-2 mb-4">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="post_id" value="{{$post_id}}">
        <img name="user_profile" src="{{ asset('zondicons') }}/{{ Auth::user()->pic }}" class="rounded-full w-5 h-5 mr-2">
        <input name="comment" type="text" class="w-full text-sm" placeholder="Beri komentar..">
    </div>
    <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
</form>