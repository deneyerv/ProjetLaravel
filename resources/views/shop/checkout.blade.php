@extends(('layouts.master'))

@section('title')
    Projet E-commerce
@endsection

@section('content')
<h1>Checkout</h1>

<h2> TOTAL : {{$total}} €</h2>
   
    <form action="{{route('checkout')}}" method="post" id="checkout-form">

	<div class="row">
	<div class="col-xs-10">	
	<div class="form-group">
		<label for="nom">Nom</label>
		<input type="text" id="name" class="form-control" required>
	</div>
	</div>

	<div class="col-xs-10">	
	<div class="form-group">
		<label for="nom">Adresse</label>
		<input type="text" id="address" class="form-control" required>
	</div>
	</div>

	<div class="col-xs-10">	
	<div class="form-group">
		<label for="nom">Numéro de carte </label>
		<input type="text" id="numbercard" class="form-control" required>
	</div>
	</div>

	<div class="col-xs-10">	
	<div class="form-group">
		<label for="nom">Nom du titulaire de la carte </label>
		<input type="text" id="namecard" class="form-control" required>
	</div>
	</div>

	<div class="col-xs-4">	
	<div class="form-group">
		<label for="nom">Mois d'expiration </label>
		<input type="text" id="monthcard" class="form-control" required>
		
	</div>
	</div>

	<div class="col-xs-3">	
	<div class="form-group">
		<label for="nom">Année d'expiration </label>
		<input type="text" id="yearcard" class="form-control" required>
		
	</div>
	</div>


	<div class="col-xs-3">	
	<div class="form-group">
		<label for="nom">Code de vérification </label>
		<input type="text" id="verifcard" class="form-control" required>
	</div>
	</div>
<div class="col-xs-10">	
    <button type="submit" class="btn btn-success btn-lg btn-block" >Pay</a>
</div>


	{{ csrf_field() }}
    </form>

    </div>
    
    
    
@endsection

@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('src/js/checkout.js')}}"</script>
@endsection