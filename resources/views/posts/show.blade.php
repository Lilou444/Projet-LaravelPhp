@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header">Postuler pour cette offre!</div></center>

                    <div class="card-body">

                <div style="margin-top: 15px; position: relative;
            justify-content: center";>
                    <form method="POST" action="{{ route('comments_store', $post->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="titre">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom" >
                        </div>
                        <div class="form-group">
                            <label for="titre">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" >
                        </div>
                        <div class="form-group">
                            <label for="titre">Message</label>
                            <textarea type="text" class="form-control" id="contenu" name="contenu" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="titre">Cv </label>
                            <input type="file" class="form-control" id="cv" name="cv" placeholder="cv">
                        </div>
                        <button type="submit" id="envoie" name="envoie" class="btn btn-primary float-right">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection