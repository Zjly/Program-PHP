<?php
$a = 5;
$b = 8;
$c = exec("python E:\Coding\Python\Code_Python3\practical_training\connect_php\connect_test.py {$a} {$b}",$out,$res);
print($out[0]);
