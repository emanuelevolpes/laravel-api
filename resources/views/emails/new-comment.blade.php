<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>Comment</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <hr>
            <h2>User: <br> <strong>{{ $comment->author }}</strong></h2>
            <p>Content: <br>{{ $comment->content }}</p>
            <hr>
        </div>
    </main>
</body>

</html>
