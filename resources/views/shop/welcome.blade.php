@extends(('layouts.master'))

@section('title')
    Projet E-commerce
    @endsection


@section('content')




    @foreach($products ->chunk(3) as $productsChunk)

        @if($productsChunk->isEmpty());
        <div class="col-sm-6 col-md-4"> Pas de résultats à la recherche</div>
        @else
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
                @endif
        </div>
        @endforeach

@endsection