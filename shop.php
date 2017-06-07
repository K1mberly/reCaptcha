<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script type="text/javascript" src="js/JQuery/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/template.js"></script>
    <link rel="icon" type="image/png" href="img/favicon-sign-in.ico">
  </head>
  <body>
    <?php require_once("navigation.php") ?>
    <?php require_once("prueba.php") ?>

    <div class="sidebar-closed">
      <?php require_once("sidebar.php") ?>
      <div class="home-content">
        <h1>CELL PHONES</h1>
        <hr>
        <br><br>
        <div id="columns">
          <img src="img/zte2.png" alt="">
          <div class="description">
            <h2>ZTE BLADE</h2>
            <h4>Description</h4>
            <ul>
              <li>16GB ROM</li>
              <li>2GB RAM</li>
              <li>ANDROID 5.0</li>
              <li>QUAD CORE 1.3 GHZ</li>
            </ul>
          </div>

        </div>
          <br><br>
        <div class="txt">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
           reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
           deserunt mollit anim id est laborum.
         <br>
         <p>3 Available</p>
         <button type="button" name="buy">BUY</button>
        </div>
        <footer class="footer">
          <hr>
          Developed by <strong>Juan Pablo Donayre</strong>
        </footer>
      </div>
    </div>
  </body>
</html>
