
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Make a FAQ</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New FAQ</div>
                    <div class="card-body">
                        <form action="{{ route('admin-panel.create-faq') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input name="content" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create FAQ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






