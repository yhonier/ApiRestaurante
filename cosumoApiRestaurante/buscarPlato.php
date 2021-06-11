
<?php 

session_start();
session_destroy();
if (isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}else{
    $id = '';
}
if (isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
}else{
    $nombre = '';
}
if (isset($_SESSION['precio'])){
    $precio = $_SESSION['precio'];
}else{
    $precio = '';
}
if (isset($_SESSION['descripcion'])){
    $descripcion = $_SESSION['descripcion'];
}else{
    $descripcion = '';
}

if (isset($_SESSION['img'])){
    $img = $_SESSION['img'];
}else{
    $img = '';
}


?>


<!DOCTYPE html>
<html lang="es">

<head>


<script>
    function updateemployee()
    {
        document.getElementById('idu').value = document.getElementById('id').value;
        document.getElementById('idd').value = document.getElementById('id').value;
        document.getElementById('nombreu').value = document.getElementById('nombre').value;
        document.getElementById('preciou').value = document.getElementById('precio').value;
        document.getElementById('descripcionu').value = document.getElementById('descripcion').value;
        document.getElementById('imgu').value = document.getElementById('img').value;
        
        //document.frmupdate.submit();
    
    }
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web AlexCG</title>
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <nav>

            

            <a href="Plato.php">Inicio</a>
         


            <section class="textos-header">
            <h1 style="margin-left:40px">Restaurante El Tragon</h1>
           
        </section>

        </nav>
        
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Buscar y/o eliminar plato</h2>
            <div class="container">
            <div class="container">
    

    <h2 class="Textaling-center"></h2>
    <form method="post" action="encontrarPlato.php">
        <div class="col-3">
            <label for="name" class="form-label">Id</label>
            <input type="text" class="form-control" id="id" name="id" 
                value="<?php echo $id; ?>">
                <span style="color:red">
                    <?php 
                        if ($id == '')
                        {
                            echo "Plato NO Existe";
                        }
                        else{
                            echo '';
                        }
                    ?>
                </span>
                <br>
            <button type="submit" class="btn btn-secondary">Buscar</button>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de plato</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
            value="<?php echo $nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio"
            value="<?php echo $precio; ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion"
            value="<?php echo $descripcion; ?>">
        </div>

        
                </form>
        <form action="actualizarPlato.php" method="post" name="frmupdate" id="frmupdate">
            <input type="hidden"  class="form-control" id="idu" name="idu">
            <input type="hidden"  class="form-control" id="nombreu" name="nombreu">
            <input type="hidden"  class="form-control" id="preciou" name="preciou">
            <input type="hidden"  class="form-control" id="descripcionu" name="descripcionu">
            <input type="hidden"  class="form-control" id="imgu" name="imgu">

            <button type="submit" class="btn btn-secondary" style="float:left;"
             onclick="updateemployee()"
            >Acutalizar</button>
        </form>
        <form action="eliminarPlato.php" method="post">
            <input type="hidden"  class="form-control" id="idd" name="idd">           
            <button type="submit" class="btn btn-secondary" style="float:left;margin-left:20px;"
            onclick="updateemployee(); return confirm ('Esta seguro que quiere eliminar el plato?');"
            >Delete</button>
        </form>
    </div>

  
    </main>
    <footer>
   
        <h2 class="titulo-final">&copy; YMM Design | Yhonier Molina</h2>
    </footer>
</body>

</html>