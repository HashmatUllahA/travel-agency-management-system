<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{$title}}</title>
</head>
<body>
    {{$slot}}
            <nav class="navbar navbar-expand-sm bg-info aligen-left navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">LOCATION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">SERVICE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">NEW DEMAND</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li><li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li><li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li><li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
              </nav>
              {{$body}}
</body>
</html>