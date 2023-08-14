@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
    <h1>Edit Blog</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>
                    <div class="card-body">
                        <form action="{{ route('admin-panel.update-blog', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control" required>{{ old('content', $post->content) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea name="text" class="form-control" required>{{ old('text', $post->text) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="pinned" class="form-check-input" id="pinned" {{ $post->pinned ? 'checked' : '' }}>
                                <label class="form-check-label" for="pinned">Pin this post</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
