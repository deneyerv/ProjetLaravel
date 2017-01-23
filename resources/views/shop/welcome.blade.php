@extends(('layouts.master'))

@section('title')
    Projet E-commerce
    @endsection


@section('content')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

 @if(Session::has('mes'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

    @foreach($products ->chunk(3) as $productsChunk)

        <div class="row">
            @foreach($productsChunk as $product)



            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath}}" alt="...">
                    <div class="caption">
                        <h3>{{$product->title}}</h3>
                        <div class="description">{{$product->description}}</div>
                        <div class="pull-left price">
                            {{$product->price}} €
                        </div>
                        <div class="clearfix">
                            <p><a href="{{route('product.addToCart', ['id' => $product ->id])}}" class="btn btn-success pull-right" role="button">Ajouter au panier</a> </p>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        @endforeach

@endsection