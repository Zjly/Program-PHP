<?php
$data = "这门课考试作弊很简单；法轮功是邪教";
$data = urlencode($data);
exec("python E:\Coding\Python\Program\practical_training\connect_php\sensitive_words_analysis.py {$data}", $out, $res);
print($out[0]);