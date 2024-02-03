<?php

    require('connect.php');
    //query para todos os produtos
    $sql = 'SELECT name, description, image  FROM products';
    //query e resultados
    $result = mysqli_query($connection, $sql);
    //'fetch'
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    //fechar
    mysqli_close($connection);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aaveq</title>
</head>
<body>
    <?php include('header.php'); ?>    
        <div class="main">
            <div class="wrapper">
                <?php foreach($products as $product) { ?>
                    <div class="card">
                        <img src="img/<?php echo $product['image'] ?>" alt="">
                        <div class="text">
                            <h4><?php echo $product['name']; ?></h4>
                            <p><?php echo $product['description']; ?></p>
                        </div>
                        <button>Adicionar ao carrinho</button>
                    </div>



                <?php } ?>
            </div>
        </div>    
</body>
</html>


