<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo asset('css/app.css');?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/main.css');?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/util.css');?>" type="text/css"> 

</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="/api/login">
                    <span class="login100-form-title p-b-51">
                        Login
                    </span>
                    @if(isset($message))
                      <span class="login100-form-title  m-b-16">  {{  $message }} </span>
                    @endif
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="flex-sb-m w-full p-t-3 p-b-24">
                        
                        <div>
                            Don't have an account?
                            <a href="https://php.net" class="txt1">
                                SignUp
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>