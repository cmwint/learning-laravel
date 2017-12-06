<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div class="content">
            <ul>
                @foreach($tasks as $task)
                    <li>
                        <a href="/tasks/{{ $task->id }}">
                            {{ $task->body }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>