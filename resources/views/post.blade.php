<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
    <style>
    body{
        max-width: 600px;
        margin:0 auto;
        line-height: 1.7;
        font-family: sans-serif;
    }
</style>
</head>
<body>
<article>
        <!-- <a href="/post">
            <h1>Our first post</h1>
        </a>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea praesentium labore explicabo impedit, quas aspernatur sequi totam? Libero delectus error deleniti quam labore minus quae repellat! Ipsum temporibus dicta, dolor est, voluptas autem dolorem iure impedit iusto ratione perferendis, vitae ut adipisci! Veritatis est minus vitae cupiditate labore fuga consequuntur.
        </p> -->
        <?= $post; ?>
    </article>
    <a href="/">Go back</a>
</body>
</html>