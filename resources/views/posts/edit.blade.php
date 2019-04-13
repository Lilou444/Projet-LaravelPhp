@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('posts.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{ old('titre', $post->titre) }}">
                            </div>
                            <div class="form-group">
                                <label for="contenu">Contenu</label>
                                <textarea class="form-control" id="contenu" rows="3" name="contenu">{{ old('contenu', $post->contenu) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Modifer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection