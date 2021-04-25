<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </head>
    <body>
        
    <div id="app">
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            <h1 class="display-5 fw-bold text-center"> ACTO CARDS </h1>
            <div class="row">
                <create-game><create-game>
            </div>
            <div class="row">
                <last-game></last-game>
            </div>
            <div class="row">
                <leaderboard></leaderboard>
            </div>  
        </div>
        </div>
    </div>

    <script async src="{{mix('js/app.js')}}"></script>
    </body>
</html>
