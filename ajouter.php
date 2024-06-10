<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form method="POST" action="ajouter.php" style="width:500px ; margin:50px" >
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="CIN">CIN</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" name="cin" type="text" id="cin" placeholder="cin">
        </div>
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="ln">Nom</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" type="text" name="nom" id="ln" placeholder="Last name">
        </div>
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="prenom">Prenom</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" type="text" name="prenom" id="prenom" placeholder="prenom">
        </div>
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="Email">Email</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="pwd">Password</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" type="password" name="password" id="pwd" placeholder="password">
        </div>
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="age">Age</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" type="number" name="age" id="number" placeholder="age">
        </div>
        <div class="row w-100 mt-4 d-flex justify-content-center">
            <button tabindex="" class="col-4 col-sm-12 btn btn-primary" style="border-radius: 20px;" name="ajouter" type="submit">SUBMIT</button>
        </div>
    </form>

    <?php
    if(isset($_POST['ajouter'])){
        $cin = $_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];

        $conn = new PDO('mysql:host=localhost;dbname=hotel' ,'root','Youssef02');
        $sqlState = $conn ->prepare('INSERT INTO client VALUES(null,?,?,?,?,?,?)');
        $sqlState ->execute([$cin,$nom,$prenom,$email,$password,$age]);
        header('Location:ex.php');
    }
    ?>
</body>
</html>