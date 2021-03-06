@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body container">
                        <a href="/posts/create" class="btn btn-primary float-right">Create Post</a>
                        <h3>Your Blog Posts</h3>
{{--                        <?= $posts ?>--}}
{{--                        <?php echo gettype($posts) ?>--}}
                        @if (count($posts)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title<th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form:: submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts yet. :(</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
