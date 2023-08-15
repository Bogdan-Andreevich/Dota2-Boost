
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Make contents for 2 forms on Main Page</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Articles For The First and Second Form</div>
                    <div class="card-body">
                        <form action="{{ route('admin-panel.create-2-forms-for-MainPage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title for 1 article</label>
                                <input type="text" name="title1" class="form-control" value="{{ $content->title1 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle1 for 1 article</label>
                                <input type="text" name="subtitle1" class="form-control" value="{{ $content->subtitle1 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 1 article</label>
                                <textarea name="content1" class="form-control" rows="5" required>{{ $content->content1 ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Title for 2 article</label>
                                <input type="text" name="title2" class="form-control" value="{{ $content->title2 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle1 for 2 article</label>
                                <input type="text" name="subtitle2" class="form-control" value="{{ $content->subtitle2 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 2 article</label>
                                <textarea name="content2" class="form-control" rows="5" required>{{ $content->content2 ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Title for 3 article</label>
                                <input type="text" name="title3" class="form-control" value="{{ $content->title3 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle1 for 3 article</label>
                                <input type="text" name="subtitle3" class="form-control" value="{{ $content->subtitle3 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 3 article</label>
                                <textarea name="content3" class="form-control" rows="5" required>{{ $content->content3 ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Title for 4 article</label>
                                <input type="text" name="title4" class="form-control" value="{{ $content->title4 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 4 article</label>
                                <textarea name="content4" class="form-control" rows="5" required>{{ $content->content4 ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Title for 5 article</label>
                                <input type="text" name="title5" class="form-control" value="{{ $content->title5 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 5 article</label>
                                <textarea name="content5" class="form-control" rows="5" required>{{ $content->content5 ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Title for 6 article</label>
                                <input type="text" name="title6" class="form-control" value="{{ $content->title6 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 6 article</label>
                                <textarea name="content6" class="form-control" rows="5" required>{{ $content->content6 ?? '' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Articles</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






