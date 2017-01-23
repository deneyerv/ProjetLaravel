@extends(('layouts.master'))

@section('title')
    Projet E-commerce
@endsection

@section('content')

@if(Session::has('cart'))
    <h1 >Panier</h1>
    
    @foreach($products as $product)
            <div class="table-bordered">
                <div class="row table-bordered">
                    <li class="list-group-item">
                        <strong>{{$product['qty']}}</strong>
                        <strong>{{$product['item']['title']}}</strong>
                        <strong>{{$product['price'] }}€</strong>
                     </li>
                </div>
            </div>

    @endforeach
             <div class="clearfix">
                <p><a href="{{route('remToCart')}}"class="btn btn-danger pull-right" role="button">Supprimer le panier</a> </p>
             </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-offset-6">--------------------------</div>

    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <li class="list-group-item">
            <strong>Total : {{$totalPrice}} €</strong>
    </div>
    <div class="col-md-6 col-md-offset-3 col-sm-offset-6">--------------------------</div>

    <div class="col-sm-6 col-md-6 col-md-offset-8 col-sm-offset-8">
        <a href="{{route('checkout')}}" type=button" class="btn btn-success"> Payer </a> </div>

    </div>

@else

    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <li class="list-group-item">
            <strong>Votre panier est vide </strong>
    </div>
@endif

@endsection