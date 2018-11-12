<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="betaalbare en professioneel web designn">
  <meta name="keywords" content="web design,voordelig webdesign, professioneel web design ">
  <meta name="author" content="Dara Al-Ali">
  <title>Dara Web Design | Welcome</title>
  <link href="{!! asset('css/mijnstyle.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>



<body>
        <header>
                <div class="container">
                  <div id="branding">
                    <h1><span class="highlight">Dara</span> Web Design</h1>
                  </div>
                  <nav>
                    <ul>
                      <li class="current"><a href="/">Home</a></li>
                      <li><a href="/about">About</a></li>
                      <li><a href="/services">Diensten</a></li>
                    </ul>
                  </nav>
                </div>
              </header>


  @yield('content')
</body>

</html>