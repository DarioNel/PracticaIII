<?php
// Iniciar la sesión si aún no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Productos</title>
</head>
<body>
    <?php require('header.php')?>
    <main>
        <?php
        // Verificar si el usuario está autenticado
        if (isset($_SESSION['nombre']) && isset($_SESSION['tipo'])) {
            $user = $_SESSION['nombre'];
            $type = $_SESSION['tipo'];
            echo "Usuario: $type<br>";
            echo "Bienvenido: $user";
        } else {
            // Si no hay una sesión iniciada, entonces...
            echo "ERROR de SESSION";
        }
        ?>         
        <div class="content-prod">
            <form class="form-prod" action="products_insert.php" method="POST">
                <div class="caja1">
                    <label class="label" for="code">Codigo de Barras</label>
                    <input class="input" type="text" name="code" id="code" placeholder="Escriba el Código" maxlength="30" required/>      
                    <label class="label" for="products">Nombre del Producto</label>
                    <input class="input" type="text" name="products" id="products" placeholder="Ingrese Articulo" maxlength="50" required/>
                    <label class="label" for="stock">Stock</label>
                    <input class="input" type="text" name="stock" id="stock" placeholder="Ingrese la Cantidad" maxlength="15" required/>
                </div>
                <div class="caja2">
                    <label class="label" for="price">Precio de Venta</label>
                    <input class="input" type="text" name="price" id="price" placeholder="Ingrese un Precio" maxlength="15" required/>
                    
                    <label class="label" for="select">Categoría</label><br><br>    
                    <select class="" name="category" id="select">
                        <option value="select" disabled selected >Elija una Categoría</option>
                        <option value="Limpieza">Articulo de Limpieza</option>
                        <option value="Comestibles">Comestibles</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Golosinas">Golosinas</option>
                        <option value="Otros">Otros</option>	
                    </select>             
                </div>
                
                <div class="btns">
                    <button class="btn-blue" type="submit" name="loadpro">Cargar </button>
                    <a href="products_table.php" class="btn-red">Mostrar</a>
                </div>

            </form> 
        </div>
        
    </main>
    
</body>
</html>