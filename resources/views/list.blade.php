<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('/dashboard') }}">Create New Post</a>

    <br><br>
    @foreach($posts as $post)
        {{ $post->subject }}

        {!! link_to('/post/'. $post->id, 'View') !!}

        <a href="{{ url('/post/' . $post->id. '/edit') }}">Edit</a>
        
    
        <form action="{{ url('/post/delete/' . $post->id) }}" method="POST">
             @csrf   
            <button type="submit">Delete</button>
        </form>

        <br>
    @endforeach

                 </div>
            </div>
        </div>
    </div>
</x-app-layout>    