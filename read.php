<?php
$handle = fopen ("wette.txt", "r");
$sum = array(0, 0, 0, 0);
$namen= array("Keiner", "Basti", "Leo", "Beide");
while (!feof($handle)) {
    $line = fgets($handle);
    $line_array = explode(';', $line);
    if (!isset($line_array[2]))
    {
        break;
    }
    for ($x = 0; $x <= 3; $x++) {
        if ($line_array[2] == $namen[$x])
        {
            $sum[$x] = $sum[$x] + (int)$line_array[3];
        }
    }
}
echo  $sum[0].";".$sum[1].";".$sum[2].";".$sum[3];
fclose($handle);
?>