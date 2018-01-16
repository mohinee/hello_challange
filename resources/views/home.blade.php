<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>currency converter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo asset('css/app.css');?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/main.css');?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/util.css');?>" type="text/css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>

    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                    <span class="login100-form-title p-b-51">
                        Currency Convertor
                    </span>
                    <div class="dropdown">
                      <button class="dropbtn">FROM</button>
                        <select class="from">
                            <div class="dropdown-content">
                                @foreach ($currencies as $currency)
                                   <option value="{{$currency}}">{{$currency}}</option>
                                @endforeach
                            </div>
                        </select>
                    </div>

                    <div class="dropdown">
                      <button class="dropbtn">TO</button>
                      <select class ="to">
                          <div class="dropdown-content">
                            @foreach ($currencies as $currency)
                               <option value="{{$currency}}">{{$currency}}</option>
                            @endforeach
                          </div>
                      </select>
                    </div>

                    
                    <div class="wrap-input100 validate-input m-b-16">
                        input value
                        <input class="input100" type="text" id="inputvalue" placeholder="100">
                        <span class="focus-input100"></span>
                    </div>
                    
                     <div class="wrap-input100 validate-input m-b-16">
                        converted value
                         <input class="input100" type="text" id="convertedvalue">
                        <span class="focus-input100"></span>
                    </div>

                     <div class="wrap-input100 validate-input m-b-16">
                        rate of conversion
                         <input class="input100" type="text" id="rateofconversion">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            <a href="/api/manage">currency list management</a>
                        </button>
                    </div>

            </div>
        </div>
    </div>
<script type="text/javascript">

   $("#inputvalue").on('keyup', function() {
    var amount = document.getElementById("inputvalue").value 
    var to = $(".to").val();
    var from = $(".from").val();
    $.ajax({
        url : "/api/currencyConvertor/"+amount+"/"+to+"/"+from,  
        success : function(data){
                console.log(data);
                document.getElementById("convertedvalue").value = data.amount;
                document.getElementById("rateofconversion").value = data.rate;
            }
        });
    });
</script>
</body>

</html>