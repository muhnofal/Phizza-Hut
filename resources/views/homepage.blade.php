<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">

</head>
<body>

    <nav class="navbar navbar-expand bg-danger">

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <img src="assets/logo.png" alt="" width="50" height="50">
                   
                </li>
        
                <li class="nav-item">
                    <a class="navbar-brand nav-link text-white disabled" href="#">PHizza Hut</a>
                </li>

            </ul>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item mr-4">
                <a class="nav-link active text-white" href="#">View Transaction History</a>
                </li>
                
                <li class="nav-item mr-4">
                <a class="nav-link text-white" href="#">View Cart</a>
                </li>

                <li class="nav-item">
                <a class="nav-link text-white" href="#">User</a>
                </li>

            </ul>
        </div>

    </nav>

</body>
</html>