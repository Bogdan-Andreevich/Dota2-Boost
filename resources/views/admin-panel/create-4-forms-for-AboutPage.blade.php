
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Make contents for 4 forms on About Page</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Articles For The First and Second Form</div>
                    <div class="card-body">
                        <form action="{{ route('admin-panel.create-4-forms-for-AboutPage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Main Title</label>
                                <input type="text" name="mainTitle" class="form-control" value="{{ $content->mainTitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Title for 1 article</label>
                                <input type="text" name="animalTitle" class="form-control" value="{{ $content->animalTitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle for 1 article</label>
                                <input type="text" name="animalSubtitle" class="form-control" value="{{ $content->animalSubtitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">The first content for 1 article</label>
                                <textarea name="animalContent1" class="form-control" rows="5" required>{{ $content->animalContent1 ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">The second content for 1 article</label>
                                <textarea name="animalContent2" class="form-control" rows="5" required>{{ $content->animalContent2 ?? '' }}</textarea>
                            </div>



                            <div class="form-group">
                                <label for="title">Title for 2 article</label>
                                <input type="text" name="courierTitle" class="form-control" value="{{ $content->courierTitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle for 2 article</label>
                                <input type="text" name="courierSubtitle" class="form-control" value="{{ $content->courierSubtitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 2 article</label>
                                <textarea name="courierContent" class="form-control" rows="5" required>{{ $content->courierContent ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">Title for 3 article</label>
                                <input type="text" name="wardTitle" class="form-control" value="{{ $content->wardTitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle for 3 article</label>
                                <input type="text" name="wardSubtitle" class="form-control" value="{{ $content->wardSubtitle ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content for 3 article</label>
                                <textarea name="wardContent" class="form-control" rows="5" required>{{ $content->wardContent ?? '' }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="title">The first title for 4 article</label>
                                <input type="text" name="techiesTitle1" class="form-control" value="{{ $content->techiesTitle1 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Subtitle for 4 article</label>
                                <input type="text" name="techiesSubtitle1" class="form-control" value="{{ $content->techiesSubtitle1 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">The first content for 4 article</label>
                                <textarea name="techiesContent1" class="form-control" rows="5" required>{{ $content->techiesContent1 ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">The second title for 4 article</label>
                                <input name="techiesTitle2" class="form-control" value="{{ $content->techiesTitle2 ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">The second content for 4 article</label>
                                <textarea type="text" name="techiesContent2" class="form-control" required>{{ $content->techiesContent2 ?? '' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Articles</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






