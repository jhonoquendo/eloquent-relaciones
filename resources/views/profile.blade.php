<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$user->name}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow rounded">
                    <img src="{{$user->image->url}}" alt="" class="float-left rounded-circle mr-3">
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
                    <p>
                        <strong>País: </strong>{{$user->location->country}}
                    </p>
                    <p>
                        <strong>Nivel: </strong>
                        @if($user->level)
                        <a href="#">{{$user->level->name}}</a>
                        @else
                            ---
                        @endif
                    </p>
                    <hr>
                    <p>
                        <strong>Grupos:</strong>
                        @forelse($user->groups as $group)
                            <span class="badge badge-primary">{{$group->name}}</span>
                        @empty
                            <em>No pertenece a ningún grupo</em>
                        @endforelse
                    </p>
                    <hr>

                </div>
            </div>
        </div>
    </body>
</html>
