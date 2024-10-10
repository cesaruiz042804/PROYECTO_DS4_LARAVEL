<!DOCTYPE html>
<html>

<head>
    <title>Card Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Stripe Payment from your card</h1>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <h2 class="panel-title">Checkout Forms</h2>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('error') }}</p>
                            </div>
                        @endif

                        <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                            @csrf
                            <input type="hidden" name='stripeToken' id='stripe-token-id'>
                            <br>
                            <div id="card-element" class="form-control"></div>
                            <button id='pay-btn' class="btn btn-success mt-3" type="button"
                                style="margin-top: 20px; width: 100%;padding: 7px;" onclick="createToken()">PAY $10
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    var stripe = Stripe('{{ env('STRIPE_KEY') }}') // Se coloca la clave pública de Stripe obtenida de la cuenta
    var elements = stripe.elements(); // Permite crear elementos de tipo stripe
    var cardElement = elements.create('card'); // Esto crea basicamente como la estructura de una tarjeta
    cardElement.mount('#card-element'); // Monta la tarjeta en ese div

    /*Create Token Code*/
    function createToken() { // Procesa la informacion de la tarjeta
        document.getElementById("pay-btn").disabled = true; // Se desabilita el botón
        stripe.createToken(cardElement).then(function(result) {

            if (typeof result.error != 'undefined') { // En el caso de que haya un error
                document.getElementById("pay-btn").disabled = false;
                alert(result.error.message); //  Mensaje de error obtenido de stripe (biblioteca)
            }

            /* creating token success */
            if (typeof result.token != 'undefined') { // Si se hizo el proceso correctamente
                document.getElementById("stripe-token-id").value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    }
</script>

</html>
