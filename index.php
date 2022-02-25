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
    <h1 class="text-center m-3">Contactos</h1>

    <div class="container  mt-5">
        <div class="row align-items-start">
            <div class="col">
                <h3>Formulario de contactos</h3>
            </div>
            <div class="col">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="router.php" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">nombre </label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" id="telefono" name="contacto">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">aceptar condiciones</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="container mt-5 mt-5">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">nombre deL Contacto</th>
                        <th scope="col">Numero</th>
                        <th scope="col">fecha</th>
                        <th>Ajustes</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("./db/database.php");

                    $sql = $mysql->query('SELECT *FROM contacto');
                    if ($sqlR = mysqli_num_rows($sql) > 0) {

                        while ($rows = mysqli_fetch_array($sql)) { ?>

                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['contacto'] ?></td>
                                <td><?php echo $rows['fecha'] ?></td>
                                <td>
                                    <a href="delete.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger">Eliminar</a>
                                    <a href="edit.php?id=<?php echo $rows['id'] ?>" class="btn btn-primary">Actualizar</a>
                                </td>
                            </tr>

                        <?php } ?>

                    <?php } else { ?>

                        <h2 class="text-center">No hay ningun contacto</h2>

                    <?php  } ?>

                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>