<?php include ("header.php"); ?>
<script src="http://code.jquery.com/jquery-latest.js"></script>


<link rel="stylesheet" type="text/css"
      media="screen" href="CSSstyle.php">
      <?php
      $cars = array("Saab", "Volvo", "BWM", "Toyota");
      $cars[0] = "Saab";
      $cars[1] = "Volvo";
      $cars[2] = "BMW";
      $cars[3] = "Toyota";
      echo $cars[0] . " and " . $cars[2] . " are Swedish cars."
      ?>
<br>
<?php
$ages = array("Peter" => 32, "Quagmire" => 30, "Joe" => 34);
$actual = $ages['Quagmire'];

echo "Peter is not " . $ages['Quagmire'] . " years old. " . "Quamire is $actual";
?>
<br>
<br>
<br>
<?php
$families = array
    (
    "Griffin" => array
        (
        "Peter",
        "Lois",
        "Megan",
        "Stewie"
    ),
    "Quagmire" => array
        (
        "Glenn"
    ),
    "Brown" => array
        (
        "Cleveland",
        "Loretta",
        "Junior"
    )
);
echo "Is " . $families['Griffin'][3] . " a part of the Griffin family?"
?>
<br>
<br>
Click Here 
<div class="one"> 
<?php
$i = 1;
do {
    $i++;
    echo "The number is " . $i . "<br/>";
} while ($i <= 8)
?>
</div>
<script>
$(document).click(function () {
if ($("div:first").is(":hidden")) {
$("div").slideDown("slow");
} else {
$("div").hide();
}
});

</script>
<p> hey </p>
   
<br>
     <?php
//Kind of like a menu

     $x = array("one", "two", "three");
     foreach ($x as $value) {
         echo $value . "<br />";
     }
     ?>
<?php

function add($x, $y) {
    $total = $x + $y;
    return $total;
}

echo "3 + 20 = " . add(3, 20);
?>
<br>
<br>
<html>
    <body>

        <form action="welcome.php" method="post">
            Female Name: <input type="text" name="fname" />
            Age: <input type="text" name="age" />
            <br>
            Male Name: <input type="text" name="fname2" />
            Age: <input type="text" name="age2" />
            <input type="submit" name="Enter True Love Machine"/>
        </form>
        <hr/>
        <form action="welcome.php" method="get">
            Name: <input type="text" name="f2name" />
            Age: <input type="text" name="f2age" />
            <input type="submit" />
        </form>

    </body>
</html>
