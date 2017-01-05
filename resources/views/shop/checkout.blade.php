@extends(('layouts.master'))

@section('title')
    Projet E-commerce
@endsection

@section('content')

    <div class="row table-bordered">
    <h1>Checkout</h1>
    <h2> TOTAL : {{$total}} €</h2>

    </div>
@endsection