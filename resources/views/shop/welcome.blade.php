@extends(('layouts.master'))

@section('title')
    Projet E-commerce
    @endsection


@section('content')

    @foreach($products ->chunk(3) as $productsChunk)

        <div class="row">
            @foreach($productsChunk as $product)



            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath}}" alt=""...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <div class="description">Lorem ipmeeeiejedejikd  ehuidhedh hedhe de</div>
                        <div class="pull-left price">
                            150€
                        </div>
                        <div class="clearfix">
                            <p><a href="#" class="btn btn-success pull-right" role="button">Ajouter au panier</a> </p>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        @endforeach

@endsection