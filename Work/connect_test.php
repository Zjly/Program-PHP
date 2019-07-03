<?php
$a = 5;
$b = 8;
$c = exec("python E:\Coding\Python\Program\practical_training\connect_php\connect_test.py {$a} {$b}",$out,$res);
print($out[0]);
