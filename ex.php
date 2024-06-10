<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        td{
            padding:10px;
        }
    </style>
</head>
<body>
    <?php
        $conn = new PDO('mysql:host=localhost;dbname=hotel' ,'root','Youssef02');
        $dbtab = "client";
        $req = "SELECT * FROM $dbtab";
        $res = $conn->query($req);
        $data = $res->fetchAll(PDO::FETCH_NUM);
    ?>
    <table>
        <tr style="border-bottom: 2px solid">
            <td>ID</td>
            <td>CIN</td>
            <td>NOM</td>
            <td>PRENOM</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            <td>AGE</td>
            <td>OPERATION</td>
        </tr>
        <?php
            foreach ($data as $row){
        ?>
            <tr style="border-bottom: 1px solid">
                <?php
                    foreach ($row as $ele){
                        if($ele == $row[6]){
                            if($ele <= 18){
                ?>
                                <td><p align="center" style="background-color:green;border-radius:30px;width:60px;color:white;"><?php echo $ele ?> ans</p></td>
                <?php
                            }
                            if($ele >18 && $ele < 30){
                ?>
                                <td><p align="center" style="background-color:yellow;border-radius:30px;width:60px;color:white;"><?php echo $ele ?> ans</p></td>
                <?php
                            }
                            if($ele >= 30 ){

                                ?>
                                <td><p align="center" style="background-color:red;border-radius:30px;width:60px;color:white;"><?php echo $ele ?> ans</p></td>
                <?php
                            }
                        }else{ 
                ?>
                            <td><?php echo $ele ?></td>
                <?php
                        }
                    }
                ?>
                <td>
                    <a href="mod.php?id_client=<?php echo $row[0]?>" style="background-color:blue;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Modifier</a>
                    <a href="sup.php?id_client=<?php echo $row[0]?>" style="background-color:red;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Supprimer</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="ajouter.php" style="background-color:blue;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Ajouter</a>
    </body>
</html>