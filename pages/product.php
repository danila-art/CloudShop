<?
session_start();
$id = $_GET['id'];
var_dump($id);
require '../php/db.php';
$product = select('SELECT * FROM goods WHERE id = :id', ['id' => $id]);
var_dump($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main_stylesheet.css">
    <link rel="stylesheet" href="../assets/css/header_style.css">
    <title></title>
</head>
<body>
    <?require '../modules/header.php'?>
</body>
</html>
