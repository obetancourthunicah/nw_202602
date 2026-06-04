<?php
require_once "libreria.php";

$ordenes = obtenerOrdenes();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenes de la Trucha</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>

<body>
    <h1>Ordenes Pendientes</h1>
    <hr>
    <section class="container">
        <div class="columns is-multiline">
            <?php
            foreach ($ordenes as $orden) {
            ?>
                <div class="column is-one-third">
                    <div><strong>Nombre</strong><span><?php echo $orden["cliente"]; ?></span></div>
                    <div><strong>Productos </strong><br />
                        <div>
                            <div class="columns">
                                <span class="column">#</span><span class="column">Producto</span><span class="column">Precio</span>
                            </div>
                            <hr>
                            <div class="columns">
                                <span class="column"><?php echo $orden["producto"]["codigo"]; ?></span>
                                <span class="column"><?php echo $orden["producto"]["nombre"]; ?></span>
                                <span class="column"><?php echo ($orden["producto"]["precio"] * (($orden["producto"]["iva"] / 100) + 1)); ?></span>
                            </div>
                            <div class="columns">
                                <span class="column"><?php echo $orden["refresco"]["codigo"]; ?></span>
                                <span class="column"><?php echo $orden["refresco"]["nombre"]; ?></span>
                                <span class="column"><?php echo ($orden["refresco"]["precio"] * (($orden["refresco"]["iva"] / 100) + 1)); ?></span>
                            </div>
                            <div class="columns">
                                <span class="column"><?php echo $orden["postre"]["codigo"]; ?></span>
                                <span class="column"><?php echo $orden["postre"]["nombre"]; ?></span>
                                <span class="column"><?php echo ($orden["postre"]["precio"] * (($orden["postre"]["iva"] / 100) + 1)); ?></span>
                            </div>
                        </div>
                        <div>
                            <strong>Total:</strong>
                            <span><?php echo $orden["total"]; ?></span>
                        </div>
                    </div>
                </div>
            <?php
            } // fin foreach ordenes
            ?>
        </div>
    </section>

</body>

</html>