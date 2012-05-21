<link rel="stylesheet" type="text/css"
 media="screen" href="CSSstyle.php">
<html>
<body>
    <?php include ("header.php");?>

Welcome <?php echo $_POST["fname"]; ?>!<br />
You are <?php echo $_POST["age"]; ?> years old.
<br>
Welcome <?php echo $_POST["fname2"]; ?>!<br />
You are <?php echo $_POST["age2"]; ?> years old.
<br>
<?php echo $_POST["fname"]?> and <?php echo $_POST["fname2"];?>
 are together a total of <?php echo ($_POST["age"] + $_POST["age2"]);
?> years old!
<br/>
<br/>
<?php
if (strtolower($_POST["fname2"])=="kailey" && strtolower($_POST['fname']) == 'alok') {
echo "True love no matter the distance!";
}
else
    echo "not a match... Try Kailey and Alok!";


?>

</body>
</html>
