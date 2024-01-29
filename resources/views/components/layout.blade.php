<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title>{{$title}}</title>
</head>

<body>
  <header>
  <h2>Layout page -- header WIP</h2>
</header>
  <nav>
    <a href="{{ route("hello") }}">go to hello page</a>
    <a href="{{ route("showRegister") }}">go to form page</a>
    <a href="{{ route("showUsers") }}">go to users</a>
  </nav>
  <main>
    <h1> {{$title}}</h1>
    <p>{{$content}}</p>
  </main>

  <footer>
    <p>footer wip</p>
  </footer>
</body>

</html>