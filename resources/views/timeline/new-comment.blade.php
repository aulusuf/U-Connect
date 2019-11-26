<form action="" method="post">
    @csrf
    <div class="flex my-2 mb-4">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <img name="user_profile" src="https://i.imgur.com/8Km9tLL.jpg" class="rounded-full w-5 h-5 mr-2">
        <input name="content" type="text" class="w-full text-sm" placeholder="Beri komentar..">
    </div>
    <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
</form>