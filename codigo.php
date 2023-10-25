<?php
session_start();

// Contador de visitas
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas']++;
}

// Tiempo de carga
$inicio = microtime(true);

// Función para calcular el tiempo de carga
function calcularTiempoCarga($inicio) {
    $fin = microtime(true);
    $tiempo = $fin - $inicio;
    return round($tiempo, 4);
}

// Muestra el contador de visitas y tiempo de carga
echo "<div class='container'>";
echo "<p>Visitas: " . $_SESSION['visitas'] . "</p>";
echo "<p>Tiempo de carga: " . calcularTiempoCarga($inicio) . " segundos</p>";
echo "</div>";
?>
