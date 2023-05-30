@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <h1>{{ $project->title }}</h1>
        <hr>
        <div><img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 200px"></div>
        <hr>
        @if ($project->type_id)
            <h2>Type: {{ $project->type->name }}</h2>
        @endif
        <p>{{ $project->description }}</p>

        @if ($project->comments->count())
            <hr>
            <div class="comments">
                <h3 class="mb-3">Comments</h3>
                <ul>
                    @foreach ($project->comments as $comment)
                        <li>
                            <div>
                                <h4>{{ $comment->author !== null ? $comment->author : 'Unknown User' }}</h4>
                                <p>{{ $comment->content }}</p>
                                <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <hr>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
