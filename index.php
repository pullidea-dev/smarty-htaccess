<?php
$folder1 = $_GET['folder1'];
$folder2 = $_GET['folder2'];
$folder3 = $_GET['folder3'];
$file = $_GET['file'];
$cat = $_GET['cat'];
$item = $_GET['item'];

echo "$folder1/$folder2/$folder3/$file-$cat-$item";