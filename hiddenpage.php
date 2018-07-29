<?php
  include 'converter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="hiddenpage.php" method="POST">
    <input type="text" name="secretMessage" placeholder="My Secret Message for You">
    <input type="submit" name="covertBtn" value="Convert">
  </form>

  <?php
    $converter = new Converter();
    if(isset($_POST['covertBtn'])){
      $secretmessage = $_POST['secretMessage'];
      $converter->writeMessage($secretmessage);
    }
  ?>

</body>
</html>