<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>
    <body>

        <h1>HELLO LARAVEL</h1>

        <h2>FILM  DI {{ $name }}:</h2>

        <section>
            @if (count($films) == 0)
                <h3>NON CI SONO FILM</h3>

            @elseif (count($films) == 1)
                <h3>C'E' SOLO UN FILM</h3>    

            @else 

                <ul>
                    @foreach ($films as $film)
                        <li>
                            {{ $film }}
                        </li>
                    @endforeach  
                </ul>   
            @endif
        </section>

        <style>

            * {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                text-align: center;
                margin: 10px;
            }

            h1 {
                color: red;
            }

            ul {
                list-style: none;
                text-decoration: underline;
            }

        </style>

    </body>
</html>