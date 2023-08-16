@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit blog</h1>
@stop

@section('content')
    <ul class="blog-list">
        @foreach($faqs as $faq)

                <li class="blog-item">
{{--                    <a class="blog-link" href="{{ route('blog.show', ['id' => $post->id]) }}">--}}
                        <div class="blog-link-block">
                            <div class="blog-link-info">
                                <p class="blog-link-date">{{$faq->created_at}}</p>
                                <p class="blog-link-title">
                                    {{$faq->title}}
                                </p>
                            </div>

                            <div class="blog-link-hidden">
                                <div class="blog-link-hidden-line"></div>
                                <p class="blog-link-hidden-text">
                                    {{$faq->content}}
                                </p>
                            </div>
                        </div>

{{--                    </a>--}}

                    <div class="blog-buttons">
                        <a href="{{ route('admin-panel.edit-faq', ['id' => $faq->id]) }}" class="btn btn-primary">Редактировать</a>
                        <form action="{{ route('faqs.destroy', ['id' => $faq->id]) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </li>

        @endforeach
    </ul>

@endsection
