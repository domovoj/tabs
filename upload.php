<?php
$in = $_POST['id'];
$out = '';
sleep(1);
for ($i = 0; $i < 1000; $i++)
    $out .= $in.' ';
echo $out;
?>
