@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit blog</h1>
@stop

@section('content')
    <ul class="blog-list">
        @foreach($posts as $post)

                <li class="blog-item">
                    <a class="blog-link" href="{{ route('blog.show', ['id' => $post->id]) }}">
                        <div class="blog-link-block">
                            <div class="blog-link-info">
                                <p class="blog-link-date">{{$post->created_at}}</p>
                                <p class="blog-link-title">
                                    {{$post->title}}
                                </p>
                            </div>

                            <div class="blog-link-hidden">
                                <div class="blog-link-hidden-line"></div>
                                <p class="blog-link-hidden-text">
                                    {{$post->content}}
                                </p>
                            </div>
                        </div>
                        @if(isset($post->image))
                            <img class="blog-link-img" src="{{ asset('storage/' . $post->image) }}" />
                        @else
                            <img class="blog-link-img" src="{{ asset('images/blog/blog-1.png') }}" />
                        @endif

                    </a>

                    <div class="blog-buttons">
                        <a href="{{ route('admin-panel.edit-blog', ['id' => $post->id]) }}" class="btn btn-primary">Редактировать</a>
                        <form action="{{ route('blogs.destroy', ['id' => $post->id]) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </li>

        @endforeach
    </ul>

@endsection
