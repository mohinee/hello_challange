<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>currency converter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo asset('css/app.css');?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/main.css');?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/util.css');?>" type="text/css"> 

</head>
<body>
    <div class="limiter">
        <div class="container-login100">
             
            <div class="wrap-login100 p-t-50 p-b-90">
              <form class="login100-form validate-form flex-sb flex-w" method="POST" action="/api/addCurrency">
                    <span class="login100-form-title p-b-51">
                        Currency Management
                    </span>
                    
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="currencyName" placeholder="currencyName">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="symbol" placeholder="symbol">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="conversionRate" placeholder="conversionRate">
                        <span class="focus-input100"></span>
                    </div>
                    
                    
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit">
                            Add Currency
                        </button>
                    </div>
                </form>
                      <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            <a href="/api/reset">Reset List</a>
                        </button>
                    </div>

            </div>
        </div>
         <table class="table">
            <thead>
              <tr>
                <th>Symbol</th>
                <th>Name</th>
                <th>Conversion Rate</th>
              </tr>
            </thead>
            <tbody>
             @foreach($currency_manage as $currency)
              <tr>
                <td>{{$currency->currency}}</td>
                <td>{{$currency->currency_name}}</td>
                <td>{{$currency->conversion_rate}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>