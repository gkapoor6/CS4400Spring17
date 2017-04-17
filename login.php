<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the page to the width of the device and set the zoon level -->
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Login</h1>
    </div>
    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="username">Username</label>
                    <div class="col-md-5">
                        <input id="username" name="username" type="text" placeholder="example" class="form-control input-md" required="">
                        <span class="help-block">This is where your username goes</span>
                    </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">Password</label>
                    <div class="col-md-5">
                        <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
                        <span class="help-block">Type your account password here</span>
                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="login"></label>
                    <div class="col-md-8">
                        <button id="login" name="login" class="btn btn-success">Login</button>
                        <button id="register" name="register" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
