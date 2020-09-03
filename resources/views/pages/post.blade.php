@extends('main')

@section('title', $post->title)

@section('content')
    <div class="d-flex flex-wrap justify-content-center width80">
        <div class="container-post">
            <div>
                <img class="theimg" src="../images/posts/{{ $post->image }}">
            </div>
            <div class="date-title d-flex">
                <div class="date">
                    <p>{{ date('Y-m-d', strtotime($post->created_at)) }}</p>
                </div>
                <div class="title">
                    <p>{{ $post->title }}</p>
                </div>
            </div>
            <div class="content">
                    <p>{{ $post->content }}</p>
                </div>
        </div>
    </div>
@endsection