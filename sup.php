<?php
    $conn = new PDO('mysql:host=localhost;dbname=hotel' ,'root','');
    $id = $_GET['id_client'];
    $query = $conn->prepare('DELETE FROM CLIENT WHERE id_client=?');
    $exe = $query->execute([$id]);
    header('location: ex.php');
?>
