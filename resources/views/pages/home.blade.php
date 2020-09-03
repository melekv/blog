@extends('main')

@section('title', 'Home')

@section('content')
    <div class="width80 container-grid">
        @foreach ($posts as $post)
            <div class="container-post">
                <div>
                    <img class="theimg" src="images/posts/{{ $post->image }}">
                </div>
                <div class="date-title d-flex align-items-center">
                    <div class="date p-1" style="border-right: 1px solid #000;">
                        <p style="font-size: 2rem; font-weight: 700;">{{ date('d', strtotime($post->created_at)) }}</p>
                        <!-- <p>{{ date('F', strtotime($post->created_at)) }}</p> -->
                        <p>{{ Carbon\Carbon::parse($post->created_at)->formatLocalized('%B') }}</p>
                        <p>{{ date('Y', strtotime($post->created_at)) }}</p>
                    </div>
                    <a href="/post/{{ $post->id }}" class="title-link p-1">
                        {{ $post->title }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection