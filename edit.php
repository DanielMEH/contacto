<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <title>
        Crud PHP | Mysql
    </title>

    <div class="text-center m-3 border-bottom pb-4">
        <h2>Crud, con PHP, MYSQL Bootstrap</h2>
    </div>
    <h1 class="text-center m-3">Actualizar</h1>

    <div class="container  mt-5">
        <div class="row align-items-start">
            <div class="col">
                <h3>Formulario de contactos</h3>
            </div>
            <div class="col">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">

                <?php
                require_once("./db/database.php");

                $idGet = $_GET['id'];
                $consulta = $mysql->query("SELECT * FROM contacto Where id='$idGet'");
                while ($row = mysqli_fetch_array($consulta)) { ?>
    <form action="update.php" method="get">
        <div class="mb-3">
            <input type="hidden" name="idhidden" value="<?php echo $row['id']?>" >
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nameid" value="<?php echo $row['name']; ?>" >
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="telefono"name="contactoid" value="<?php echo $row['contacto']; ?>">
            <label for="telefono" class="form-label">Telefono</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">aceptar condiciones</label>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>




                            <?php } ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>