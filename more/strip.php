<?php

$subject = array(
    1 => '(916) 220-4715',
    2 => '(916) 123.4567',
    3 => '916123.4567',
    4 => '916-123-4567');

function phone_strip($subject) {
  $pattern = "/[^A-Za-z0-9]/";
  $replace = '';

  return preg_replace($pattern, $replace, $subject);
}

foreach ($subject as &$value) {
 
  echo phone_strip($value);
}

?>
