<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }} | Zion Exeon Ch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
  <link rel="stylesheet" href="/js/typing.js">
</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="arrow up"></i>
  </button>
  @include("partials.navbar")
  @yield("content")
  <footer>
    <div class="bg-footer text-white">
      <div class="text-center p-5 fs-5">© 2022 Copyright: Zion Exeon Ch. &#127470</div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  <script src="/js/typing.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
    //Get the button
        var mybutton = document.getElementById("myBtn");
  
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction();
        };
  
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
  
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
  
        function Redirect() {
          window.location = "#home";
        }
  </script>
</body>

</html>