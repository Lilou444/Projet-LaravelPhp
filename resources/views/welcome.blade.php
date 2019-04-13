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

                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('posts.show', $post->id) }}">
                                {{ $post->titre }}
                            </a>
                            <cite title="Source Title" class="float-right">{{ $post->updated_at->format('d-m-Y H:m:i') }}</cite>
                        </div>

                        <div class="card-body">
                            {{ $post->contenu }}
                            <div style="margin-top: 15px;">
                                <div class="">
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        <button type="button" class="btn btn-warning">Postuler</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach

                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection