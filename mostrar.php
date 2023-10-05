<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>IDENTIFICACION DE PERSONAS</title>
</head>

<body>
    <center>
        <tr>INDICE DE PERSONAS</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Pronombre</th>
                    <th>Pais</th>
                    <th>Ano</th>
                    <th>Matricula</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <!--
             id
             nomb
             sex
             pro
             pais
             ano
             matri
             foto   
            -->
            <!---------------------------------titulo------------------------------->
            <tbody>
                <?php
                include ("open.php");//base de datos
                $consulta = "SELECT * FROM alumnos";//tabla
                $resultado = $conexion->query($consulta);
                while($row = $resultado ->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nomb']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                    <td><?php echo $row['pro']; ?></td>
                    <td><?php echo $row['pais']; ?></td>
                    <td><?php echo $row['ano']; ?></td>
                    <td><?php echo $row['matri']; ?></td>
                 <td> <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto']);  ?>"> </td>
                </tr>   

                <?php
                }
                ?>

            </tbody>


        </table>
    </center>
    
</body>
</html>
<!--catalogo-->
