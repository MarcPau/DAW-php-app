<?php

/**
 * Clase Footer
 * <p>
 * Clase encargada de generar y mostrar el pie de página de la aplicación web.
 * </p>
 */
class Footer {

   /**
    * Muestra el pie de página de la aplicación.
    * <p>
    * Este método genera el HTML del pie de página y los scripts necesarios para la funcionalidad
    * del carrusel utilizando Bootstrap. Incluye:
    * </p>
    * <ul>
    *   <li>El pie de página con información del centro.</li>
    *   <li>Scripts de Bootstrap para funcionalidades como el carrusel.</li>
    *   <li>Un script personalizado para inicializar y configurar el carrusel.</li>
    * </ul>
    *
    * @return void
    */
    public function mostrarFooter() {
        // Imprime el HTML del pie de página
        echo '<div class="footer text-center bg-dark text-white py-2">
                <p>&copy; 2023 CIFP Pau Casesnoves · Centro de Formación Profesional</p>
              </div>';

        // Imprime los scripts de Bootstrap desde su repositorio remoto y el script personalizado para activar el carrusel
        echo '<!-- Scripts de Bootstrap desde su repositorio remoto y script personalizado para activar el carrusel -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener(\'DOMContentLoaded\', function () {
        // Inicializar el carrusel utilizando Bootstrap
        var myCarousel = new bootstrap.Carousel(document.getElementById(\'carrusel\'), {
            interval: 2000, // Cambiar la velocidad del carrusel (en milisegundos)
            wrap: true // Repetir el carrusel al llegar al final
        });
    });
</script>';
        
        // Cierra la etiqueta </body> y </html>
        echo '</body></html>';
    }
}

// Crea una instancia de la clase Footer y llama al método mostrarFooter
$footer = new Footer();
$footer->mostrarFooter();

?>
