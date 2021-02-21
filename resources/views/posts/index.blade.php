@extends('layout.app')

@section('main')
<h1>All posts for the admin</h1>
<a href="{{route('posts.create')}}" class="btn bg-dark text-white">Create a new post</a>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>body</th>
            <th>create at</th>
            <th>updated at</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td> {{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>

            <td>
                <a href="{{route('posts.show', ['post'=> $post->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i> View
                </a>
                <a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-warning">
                    <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                </a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#destroy-{{$post->id}}">
                    <i class="fas fa-trash fa-lg fa-fw"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="destroy-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="post-destroy-{{$post->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="post-destroy-{{$post->id}}">Delete Post {{$post->title}} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">

                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </td>


        </tr>
        @endforeach

    </tbody>
</table>
@endsection