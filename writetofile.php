<?php
$data = $_POST["result"];
$fp = fopen('final.csv', 'w'); //output file set here
$data = json_decode($data,true);
foreach ($data as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
echo json_encode($data);
?>