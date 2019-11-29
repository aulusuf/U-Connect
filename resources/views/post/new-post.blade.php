<form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input name="user_id" type="hidden" value="{{ Auth::id() }}">
    <div class="new-status-modal" id=modal>
        <div class="new-status-card bg-white rounded-lg pb-2 border-b-2 border-gray-500 text-center px-4">
            <p class="timeline-label text-gray-600 opacity-50 font-semibold text-sm px-3 py-2 pointer-events-none">Apa yang kamu pikirkan?</p>
            {{-- <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 text-sm rounded-full text-gray-800">
                <i class="fas fa-camera"></i>
                Upload Foto
            </button> --}}
            <textarea class="h-24 status resize-none py-1 px-2 text-md flex-auto w-full my-2" type="text" placeholder="Tulis sesuatu.." name="post"></textarea>
        <button class="bg-gray-500 w-full rounded text-white hover:bg-gray-700 mb-3 py-2 font-semibold" type="submit">Kirim</button>
    </div>
</div>
    <input type="hidden" value="{{ Session::token() }}" name="_token" id="">
</form>