<?php
  $ip = $_SERVER['REMOTE_ADDR'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://ipinfo.io/{$ip}/json");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $data = json_decode(curl_exec($ch), true);
  curl_close($ch);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Naomi's Backend Server</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="Content-Language" content="en-au" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Stolas" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="android-chrome-192x192.png" sizes="192x192" />
    <link rel="icon" type="image/png" href="android-chrome-512x512.png" sizes="512x512" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="manifest" href="/site.webmanifest">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      #header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
      }
      #nav {
        background-color: #e9e9e9;
        padding: 10px;
      }
      #nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
      }
      #nav li {
        margin-right: 10px;
      }
      #content {
        padding: 20px;
      }
      #footer {
        clear: both;
        text-align: center;
        padding: 10px;
      }
      audio {
        width: 100%;
      }
      .full {
        width: 100%;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <h1>Welcome to Naomi's Backend Server</h1>
    </div>
    <div id="nav">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#radio">Radio</a></li>
      </ul>
    </div>
    <div id="content">
      <h2 id="home">Home</h2>
      <p>Welcome to THE BACKEND!! yeah... there's not much. But at least it's cozy here.</p>
      <hr>
      <h2 id="projects">Projects</h2>
      <p>It's basically the pain I put myself through to strive for greatness.
      <h3>Neocities View Counters</h3>
      <p>This is a PHP script that uses the cURL library and the Imagick extension to create an image displaying the number of views for a website on the Neocities platform. The script starts by initializing some variables, then it iterates over the $_GET array to check for the values of the "site", "bg" and "fg" parameters. The script then encodes the site name and uses cURL to send a GET request to the Neocities API, passing the encoded site name as a query parameter. The API returns a JSON object containing information about the website, including the number of views. The script uses the json_decode() function to convert the JSON string into a PHP array. Then, it uses the Imagick extension to create a new image, sets the background color and text color, draws the number of views on the image, and outputs the image as a JPEG via echo function. --- Evaluation done by ChatGPT.</p>
      <p>Try it yourself: <input type="text" placeholder="neocities username" value="naomis-world" id="site"> <input type="text" placeholder="text color" value="white" id="text"> <input type="text" placeholder="background color" value="pink" id="background"> <img src="viewcounter/?site=naomis-world&fg=white&bg=pink" id="img">
      <p>Run your own view counter: <a href="https://github.com/KitKatNaomi/Naomis-Backend-Server/">Here</a></p>
      <script>
        var siteInput = document.getElementById("site");
        var textInput = document.getElementById("text");
        var bgInput = document.getElementById("background");
        var img = document.getElementById("img");
        siteInput.addEventListener("input", updateImg);
        textInput.addEventListener("input", updateImg);
        bgInput.addEventListener("input", updateImg);
        function updateImg() {
          var site = siteInput.value;
          var text = textInput.value;
          var bg = bgInput.value;
          img.src = "viewcounter/?site=" + site + "&fg=" + text + "&bg=" + bg;
        }
      </script>
      <hr>
      <h2 id="radio">Radio</h2>
      <audio controls>
        <source src="//175.45.180.12:8000/stream" type="audio/mpeg">
      </audio><br><br>
      <button class="full" onclick="location.reload()">Reload Page</button>
    </div>
    <div id="footer">
      <p>Copyright ?? 2023 Naomi's Backend Server</p>
    </div>
  </body>
</html>
