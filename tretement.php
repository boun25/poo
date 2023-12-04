<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*c('est pour faite la connecte  entre ma machine et une autre machine */
$cnx = mysqli_connect("192.168.107.19", "toto","tata","casse");


if(!$cnx){
   die("echec de connection ".mysqli_connect_error());
}
echo " mec t un bon  connection bon";
?>
</body>
</html>