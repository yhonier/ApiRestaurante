
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Restaurante</title>
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Restaurante</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="./Plato.php">Ingresar plato</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
    
    </header>
    




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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="container">
    <h2 class="Textaling-center">Buscar y/o eliminar plato</h2>
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
            <button type="submit" class="btn btn-primary">Buscar</button>
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

        <div class="mb-3">
            <label for="img" class="form-label">img</label>
            <input type="text" class="form-control" id="img" name="img"
            value="<?php echo $img; ?>">
        </div>

        </form>
        <form action="actualizarPlato.php" method="post" name="frmupdate" id="frmupdate">
            <input type="hidden"  class="form-control" id="idu" name="idu">
            <input type="hidden"  class="form-control" id="nombreu" name="nombreu">
            <input type="hidden"  class="form-control" id="preciou" name="preciou">
            <input type="hidden"  class="form-control" id="descripcionu" name="descripcionu">
            <input type="hidden"  class="form-control" id="imgu" name="imgu">

            <button type="submit" class="btn btn-primary" style="float:left;"
             onclick="updateemployee()"
            >Acutalizar</button>
        </form>
        <form action="eliminarPlato.php" method="post">
            <input type="hidden"  class="form-control" id="idd" name="idd">           
            <button type="submit" class="btn btn-primary" style="float:left;margin-left:20px;"
            onclick="updateemployee(); return confirm ('Esta seguro que quiere eliminar el plato?');"
            >Delete</button>
        </form>
    
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>