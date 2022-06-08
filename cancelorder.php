<?php
session_start();

unset($_SESSION["drinks_cart"]);
unset($_SESSION["total_price_drinks"]);

unset($_SESSION["dinner_cart"]);
unset($_SESSION["total_price_dinner"]);

unset($_SESSION["breakfast_cart"]);
unset($_SESSION["total_price_breakfast"]);

unset($_SESSION["lunch_cart"]);
unset($_SESSION["total_price_lunch"]);

unset($_SESSION["sandwitch"]);
unset($_SESSION["total_price_compose"]);

unset($_SESSION["total_price_receipt"]);

header('Location: hpu.php');

?>