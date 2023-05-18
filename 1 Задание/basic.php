<?php
$name = $_POST["name"];
$email = $_POST["email"];
$massage = $_POST["massage"];


if(isset($_FILES) && $_FILES['inputfile']['error'] == 0)
{
    $destiation_dir = dirname(__FILE__) .'/'.$_FILES['inputfile']['name'];
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir );
    echo 'Файл загружен';
}
else
{
    echo 'Файл не загружен';
}

$fp = fopen("counter.txt", "a");
$mytext = "\n".$name ."\n". $email ."\n". $massage."\n". $destiation_dir."\n";
$test = fwrite($fp, $mytext);
echo "\n Операция прошла успешно";
?>