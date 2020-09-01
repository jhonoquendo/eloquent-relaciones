<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$user->name}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{$user->name}}</h1>
                    <h3>{{$user->email}}</h3>
                    <p>
                        <strong>Instagram: </strong>{{$user->profile->instagram}}
                    </p>
                    <p>
                        <strong>Github: </strong>{{$user->profile->github}}
                    </p>
                    <p>
                        <strong>Web: </strong>{{$user->profile->web}}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
