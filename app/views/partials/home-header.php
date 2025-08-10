<?php
// Si no existe la variable $titulo, damos un valor por defecto
if (!isset($titulo)) {
    $titulo = "Negocio de Sublimación";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo htmlspecialchars($titulo); ?> </title>
    <link rel="stylesheet" href="../../../public/css/main.css">
    <script src="https://kit.fontawesome.com/568c91713e.js" crossorigin="anonymous"></script>

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- CSS adicional si se pasó -->
    <?php if (isset($cssExtra)) {
        echo "<link rel='stylesheet' href='{$cssExtra}'>";
    } ?>
</head>

<body>
    <div class="container-fluid px-0">