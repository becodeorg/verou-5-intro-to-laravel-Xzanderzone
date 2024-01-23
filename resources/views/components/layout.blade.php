<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title><?= env("APP_NAME") ?></title>
</head>

<body>
  <header>
    <a href="/">go to homepage</a>
  </header>
  <main>
    <h1> {{$title}}</h1>
    <p>{{$content}}</p>
  </main>

  <footer>
    <p>footer wip</p>
  </footer>
</body>

</html>