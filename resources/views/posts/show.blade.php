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
        <h1>Detalle</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{ $post->title }}</h4>
            </div>
            <div class="panel-body">
                {{ $post->body }}
                <br>
                <a href="/">Regresar</a>
            </div>
        </div>
    </div>
</body>
</html>
