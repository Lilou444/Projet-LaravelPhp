@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <a href="{{ route('posts.create') }}">
                    <button type="button" class="btn btn-primary" style="margin-bottom: 15px;">Ajouter un poste</button>
                </a>


                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">


                                {{ $post->titre }}
                            <a href="{{ route('posts.edit', $post->id) }}">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>

                        <div class="card-body">
                            {{ $post->contenu }}
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
            @foreach($coucou as $c)
                <div>{{ $c }}</div>
            @endforeach
        </div>
    </div>
@endsection