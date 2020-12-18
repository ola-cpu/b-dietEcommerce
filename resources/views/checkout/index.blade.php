@extends('layouts.master')

@section('extra-script')


   <script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')

	<div class="col-md-12">

		<h1>Page de paiement</h1>
		<div class="row">
			<div class="col-md-6">
				
				<form action="#" class="my-4">
					<div id="card-element"><!--Stripe.js injects the Card Element--></div>

					<div  id="card-errors" role="alert"></div>


				      <button id="submit" class="btn btn-success mt-4">
				        
				      Procéder au paiement
				      </button>

				</form>

			</div>

		</div>
		
	</div>

@endsection

@section('extra-js')

<script>
	
		var stripe = Stripe("pk_test_51Hwb4QLhws6xnxzhtHHSzd8vllf8tS8eFc3n3Wfe9E8gJD6Xqbk4Vp5NUIAwrzEgOoQuoRWFB6RSq18OhFXI27yI00ybfloFpb");
		var elements = stripe.elements();


		var style = {
	      base: {
	        color: "#32325d",
	        fontFamily: 'Arial, sans-serif',
	        fontSmoothing: "antialiased",
	        fontSize: "16px",
	        "::placeholder": {
	          color: "#32325d"
	        }
	      },
	      invalid: {
	        fontFamily: 'Arial, sans-serif',
	        color: "#fa755a",
	        iconColor: "#fa755a"
	      }
	    };

	     var card = elements.create("card", { style: style });
    // Stripe injects an iframe into the DOM
    	card.mount("#card-element");

    	card.addEventListener('change',({error}) => {
    		const displayError = document.getElementById('card-errors');
    		if (error) {
    			displayError.classList.add('alert','alert-warning');
    			displayError.textContent = error.message;
    		} else {

    			displayError.classList.remove('alert','alert-warning');
    			displayError.textContent = '';
    		}


    	});

</script>

@endsection