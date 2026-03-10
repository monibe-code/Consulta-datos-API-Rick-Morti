<?php
/**
 * Script para la visualización de personajes de la API de Rick & Morty.
 * Este archivo forma parte de la Tarea 9 de DWES. Realiza el consumo de un
 * servicio REST externo utilizando file_get_contents y presenta los datos
 * mediante una interfaz construida con Bootstrap 5.
 * @author Mónica Rabelo Becker
 * @package DWES_T09
 * @version 1.0
 */

/**
 * @var string $url URL del servicio web de Rick and Morty
 */
$url = "https://rickandmortyapi.com/api/character";


/**
 * Obtiene los datos de los personajes desde la API.
 * @param string $url Dirección de la API.
 * @return array Lista de personajes procesada.
 */
function obtenerPersonajes($url) {
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return $data['results'];
}

$personajes = obtenerPersonajes($url);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9 - Rick & Morty API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #202329; color: white; }
        .card { background-color: #3c3e44; color: white; border: none; transition: transform 0.2s; }
        .card:hover { transform: scale(1.05); }
        .status-alive { color: #55cc44; }
        .status-dead { color: #d63d2e; }
        .status-unknown { color: #9e9e9e; }
        h1 { font-weight: bold; color: #00b5cc; }
        footer { background-color: #1a1c20; color: #9e9e9e; padding: 20px 0; border-top: 1px solid #3c3e44; }
    </style>
</head>
<body>

    <header class="py-5">
        <div class="container text-center">
            <h1>Personajes destacados de la fantástica serie <i>Rick&Morty</i></h1>
        </div>
    </header>

    <main class="container mb-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            
            <?php foreach ($personajes as $p): ?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <img src="<?php echo $p['image']; ?>" class="card-img-top" alt="<?php echo $p['name']; ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $p['name']; ?></h5>
                            
                            <p class="card-text">
                                <span class="<?php 
                                    echo ($p['status'] == 'Alive') ? 'status-alive' : (($p['status'] == 'Dead') ? 'status-dead' : 'status-unknown'); 
                                ?>">●</span> 
                                <?php echo $p['status']; ?> - <?php echo $p['species']; ?>
                            </p>
                            
                            <p class="text-secondary small">Última ubicación conocida:</p>
                            <p><?php echo $p['location']['name']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-1">Desarrollo de Aplicaciones Web Híbridas - Tarea 9 | Datos de la API de Rick & Morty</p>
            <p class="small">Mónica Rabelo Becker | 75149442R</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>