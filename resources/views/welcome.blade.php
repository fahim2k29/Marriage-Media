<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$info->name}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
  
     {{-- Product::select('id')->get() --}}
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <div id="paypal-button"></div>
                                @if(is_null(Session::get('item_id') && Session::get('item_price')))
                                @else
                                <?php
                                    $item_id =   Session::get('item_id');
                                    $item_price = Session::get('item_price');
                                ?>
                                @endif
                </div>
            </div>
        </div>

<script src="/frontend/assets/js/paypal.min.js"></script>


<script>
  paypal.Button.render({
    // Configure environment
    env: 'production',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'large',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: {{$offer->price}},
            currency: 'GBP'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
            window.alert('Thank you for your purchase!');
            // window.location='/'
            
            var item_id = '<?php echo $item_id; ?>';
           
            window.location = '/paypal/payment/' + item_id;

          

      });
    }
  }, '#paypal-button');

</script>
    </body>