<?php
$url = "json2-2.json";
$json = file_get_contents('php://input');
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json, true);
echo json_encode($arr);
