<?php
register_shutdown_function('finish');
function finish(){
    echo('<p><a href="?-s">Show Source</a></p>');
}
if(isset($_GET['-s'])){
    highlight_file(__FILE__);
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online ping</title>
</head>
<body>
  <h1>Online ping</h1>
  <p>Welcome to my first php program! Introducing the online ping service!</p>

<?php
  $hostname = $_POST['hostname'];
  if (isset($hostname)) {
    echo "<pre>";
    passthru("ping -c 1 -W 1 $hostname");
    echo "</pre>";
  }
?>

<form method="post">
  <input type="text" name="hostname" placeholder="(e.g. google.com)" />
  <input type="submit" value="Ping" />
</form>

</body>
</html>