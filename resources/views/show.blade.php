<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>{{ $post->subject }}</h1> 
                    <h4>Posted by {{ $post->user->name . ' ' . $post->created_at->diffForHumans() }}</h4>
                    <br><br>

                    @foreach($post->comments as $comment)
                        <span class="font-bold">{{ $comment->user->name }}</span> : <b>{{ $comment->content }}</b>{{ $comment->created_at->diffForHumans() }}<br>
                    @endforeach

                    {!! Form::open(['action' => 'CommentController@store']) !!}
                        {{ Form::hidden('post_id', $post->id) }} <br>
                        {!! Form::hidden('user_id', Auth::user()->id) !!}
                        {!! Form::textarea('content') !!}
                        {!! Form::submit('Comment') !!}
                    {!! Form::close() !!}

                    </div>
            </div>
        </div>
    </div>
</x-app-layout>



