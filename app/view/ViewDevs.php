<?php

class ViewDevs {

    public function showDev($dev) {
        include 'templates/header.php';
        if ($dev) {
            echo "<h1>" . htmlspecialchars($dev['nombre']) . "</h1>";
            echo "<p>Fundado en: " . htmlspecialchars($dev['fundacion']) . "</p>";
            echo "<p>Ubicación: " . htmlspecialchars($dev['ubicacion']) . "</p>";
            echo "<p>Presupuesto: $" . htmlspecialchars($dev['presupuesto']) . "</p>";
        } else {
            echo "<p>Desarrolladora no encontrada.</p>";
        }
        include 'templates/footer.php';
    }
}