@extends(('layouts.master'))

@section('title')
    Projet E-commerce
    @endsection


@section('content')
<<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="C:\wamp64\www\laravel5\public\css\Pictures\test.jpg" alt="iconee">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Lorem ipsum</p>
                <p><a href="#" class="btn btn-primary" role="button">Ajouter</a> <a href="#" class="btn btn-default" role="button">Supprimer</a></p>
            </div>
        </div>
    </div>
</div>
@endsection