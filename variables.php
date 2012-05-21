<html>

    <head>
        <link type="text/css" href="css/style.css" rel="stylesheet" media="all" />
        <title>    </title>
    </head>
    <body>
        <?php
        $countdown_day_title = $_POST["countdown_day_title"]; 
        ?>
        <div class ="countdown_header">
            <h1> Countdown Until <?php echo $_POST["countdown_day_title"]?></h1>
        </div>
        <div class ="content">
            <?php
            $var1 = 10;
            $var2 = "The World is going to end in </br>";
            $end_of_the_world = strtotime ($_POST["countdown_day"]);
            $today = time();
            $countdown = $end_of_the_world - $today;

            $one_minute = 60;
            $one_hour = $one_minute * 60;
            $one_day = $one_hour * 24;

            $days = floor($countdown / $one_day);

            $countdown = $countdown - ($days * $one_day);

            $hours = floor($countdown / 60 / 60);

            $countdown = $countdown - ($hours * $one_hour);

            $minutes = floor($countdown / 60);

            $countdown = $countdown - ($minutes * $one_minute);

            $seconds = floor($countdown);
            ?>

            </br>
            <div class ="variables">       
                <?php
                echo $var2;?>
                <li><div class="day">
                <?php echo $days?> </div>days
                </li>
                <li><div class="hour">
                <?php echo $hours?></div> hours</li>
                <li><div class="minute">
                <?php echo $minutes?></div> minutes</li>
                
               <li><div class="second">
                <?php echo $seconds?></div> seconds</li>
                
               
            </div>
        </div>

    </div>
    </br>
    
</body>
<?php
if($countdown_day_title == "Noahs Birthday") {
    echo "<embed src=\"hot.mp3\" autostart=\"true\" loop=\"true\" hidden=\"true\"></embed>\n"
    ."<noembed><bgsound src=\"SONGURL.mp3\" loop=\"infinite\"></noembed>";
}
else {
    
}
?>
</html>

