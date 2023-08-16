@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
    <h1>Edit FAQ</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>
                    <div class="card-body">
                        <form action="{{ route('admin-panel.update-faq', ['id' => $faq->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $faq->title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input name="content" class="form-control" value="{{ old('content', $faq->content) }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update FAQ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
