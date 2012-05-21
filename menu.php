<link rel="stylesheet" type="text/css"
 media="screen" href="CSSstyle.php">
<?php
   $menu_items = array();

   $menu_items['Home'] = '/default.php';
   $menu_items['About Us'] = '/about.php';
   $menu_items['Services'] = '/services.php';
   $menu_items['Links'] = '/links.php';
   $menu_items['Contact Us'] = '/contact.php';
   $menu_items['Test PHP'] = '/test.php';
   $menu_items['Test 2 PHP'] = '/test-2.php';
?>
<ul>

    <?php
    foreach($menu_items as $key => $value) {

        $class = "";

        if ($_SERVER['SCRIPT_NAME'] == $value) {
            $class = 'active';
        }

        echo "<li class=\"$class\">";
        echo "<a href=\"$value\">$key</a>";
        echo "</li>";

    }

    ?>

</ul>
