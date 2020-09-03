@extends('main')

@section('title', 'Admin')

@section('content')
    <div class="d-flex width80">
        @include('includes.admin_menu')
        <table class="table col-10">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tytuł</th>
                    <th scope="col">Treść</th>
                    <th scope="col">Likes</th>
                    <th scope="col">Dislikes</th>
                    <th scope="col">Utworzono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ substr($post->content, 0, 99) }}
                        </td>
                        <td>
                            {{ $post->likes }}
                        </td>
                        <td>
                            {{ $post->dislikes }}
                        </td>
                        <td>
                            {{ $post->created_at }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
@endsection