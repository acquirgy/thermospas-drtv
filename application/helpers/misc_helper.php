<?php

function formatPhone($phone) {
  $strip = array("(", ")", " ", "-");
  $numbers = str_replace($strip, "", $phone);
  $newphone = "(".substr($numbers, 0, 3).") ".substr($numbers, 3, 3)."-".substr($numbers,6);
  return $newphone;
}