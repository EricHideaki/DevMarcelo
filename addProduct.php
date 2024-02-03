<?php 
    include('connect.php');

    if(isset($_POST['submit'])){
        
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);
        $image = $_POST['image'];

        $sql = "INSERT INTO products(email,name,description,image) VALUES('$email', '$name', '$description', '$image')";
        //salvar na db 
        if(mysqli_query($connection, $sql)) {
            echo 'Sucess!';
        } else {
            echo 'Query error' . mysqli_error($connection);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aaveq Add</title>
</head>
<body>
    <?php include('header.php') ?>
    <div class="main">
        <div class="wrapper">
            <form action="addProduct.php" method="post">
                <label for="email" name='email'>Seu email: </label>
                <input type="text" name="email">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name">
                <label for="description">Descricao: </label>
                <input type="text" name="description" id="description">
                <label for="image">Imagem: </label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                <button type="submit" name="submit">Submit</button>


            </form>            
        </div>

    </div>


</body>
</html>