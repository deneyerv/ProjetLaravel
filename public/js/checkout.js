Stripe.setPublishableKey('pk_test_cuZxpvDZ5cXltVjRTJl9PqJZ');

var $form = $('#checkout-form');

$form.submit(function(event)){Stripe.card.createToken({
  number: $('#numbercard').val(),
  cvc: $('#verifcard').val(),
  exp_month: $('#monthcard').val(),
  exp_year: $('#yearcard').val(),
  name: $('#name').val() 
}, stripeResponseHandler);

function stripeResponseHandler(status, response) {
  // Grab the form:
  

  

    // Get the token ID:
    var token = response.id;

    // Insert the token ID into the form so it gets submitted to the server:
    $form.append($('< input type="hidden" name="stripeToken" \>').val(token));

    // Submit the form:
    $form.get(0).submit();
  
};
});

