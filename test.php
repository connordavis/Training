<?php include ("header.php"); ?>
<link rel="stylesheet" type="text/css"
      media="screen" href="CSSstyle.php">
      <?php
//This is a comment

      /* This is
        a comment
        block
       */

      $txt = "Hello World!";
      $x = 100;
      echo $txt;
      ?>
<br>
<?php
$txt1 = "Signing In!";
$txt2 = "Signing Out again";
echo $txt1 . " " . $txt2;
?>
<br>
<?php
echo strlen($txt1) . " " . "characters in text 2";
?>
<br>
<?php
echo strpos("Hello world", "world") . " " . "characters is the second word of $txt";
?>
<br>
<?php
$d = date("l");
$m = date("F");
$y = date("Y");

if ($d == "Monday")
    echo "Have a good Week!<br><br>";
else
    echo "  " . "Its not Monday! <br/>";
print "<h2>SECTION 2</h2> </br><br>";
if ($m == "January") {
    echo "$txt <br/>";
    echo "Its $m <br/>";
    echo "...and its $y";
}
?>
<br>
<hr>
<?php
if ($d == "Monday")
    echo "Have a nice Coffee Day!";
elseif ($d == "Tuesday")
    echo "Have a nice Go out to eat day!";
else
    echo "have a nice regular day";
?>
<br>
<?php
switch ($x) {
    case 1:
        echo "Number 1";
        break;
    case 2:
        echo "Number 2";
        break;
    case 3:
        echo "Number 3";
        break;
    default:
        echo "No number between 1 and 3";
}
?>

<br />
<hr />
<br />

Current timestamp: <?php print time(); ?>
<br />
Formatted date: <?php
print date('l, F j, Y - g:i a', time() - 1000);
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<div id="clickme">
    Click here
</div>

<div id="ajax-replace">
    Replace me!
</div>

<div id="paragraph" text-align="center" >
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</br> 
    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</br> 
    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</br>  
    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</br>  
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</br>  
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui</br>  
    officia deserunt mollit anim id est laborum."

</div>


<script>
    $(document).ready(function() {
        $('#clickme').click(function() {
            $('#paragraph').slideToggle('medium', function() {
 
            });
            
            $.get('/ajax.php', function(data) {
                $('#ajax-replace').html(data);
            });
        
            
        });
    });
</script>



