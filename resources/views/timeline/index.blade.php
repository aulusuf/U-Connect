@extends('timeline.app')

@section('content')

<div class="w-6/12 mt-12">
    <div class="px-6 py-4 ">

        @include('post.new-post')
    
        <div class="text-center my-4">
            <p class="timeline-label">Timeline</p>
        </div>
        {{-- @foreach ($post as $p) --}}
            @include('post.post')    
        {{-- @endforeach --}}
        
        
    
    </div>
</div>

<div class="w-3/12 mt-12">
    {{-- @include('user.include.rightbar') --}}
</div>

@endsection
