<?php 
//pulls data from data.json to be used by drawChart() in index.php
$string = file_get_contents("data.json");
echo $string;


?>