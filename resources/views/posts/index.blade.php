<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>DDB-Colombia</title>
</head>
<body>
    <div class="container">
        <h1>DDB Colombia</h1>
        @foreach ($posts as $post)
            <div class="panel panel-default">
                <div class="panel-body">
                <a href="/posts/{{$post->id}}">
                    {{ $post->title }}
                </a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
