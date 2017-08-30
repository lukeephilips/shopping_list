<!DOCTYPE html>
<?php
  $friend_name = $_GET["friend_name"];
  $your_name = $_GET["your_name"];
  $item_1 = "Cheese";
  $item_2 = "Bread";
?>

<html>
<head>
    <title>Shopping list</title>
</head>
<body>
    <p>Hi <?php echo $friend_name; ?>, </p>
    <p>Just making my weekly list. Details are below.</p>
    <p><?php echo $item_1; ?></p>
    <p><?php echo $item_2; ?></p>
    <p>Thanks,</p>
    <p><?php echo $your_name; ?></p>
</body>
</html>
