@foreach($posts as $post)
    @if(!$post->pinned)
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

                <img class="blog-link-img" src="{{asset('storage/' . $post->image) ?? asset('images/blog/blog-1.png')}}" />
            </a>
        </li>
    @endif
@endforeach
