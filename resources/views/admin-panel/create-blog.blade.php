
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Make a blog</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Post</div>
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Text</label>
                                <textarea name="text" class="form-control" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="pinned" class="form-check-input" id="pinned">
                                <label class="form-check-label" for="pinned">Pin this post</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


