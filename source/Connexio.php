<?php

/**
 * Clase Connexio
 * <p>
 * Clase encargada de gestionar la conexión a la base de datos "la_meva_botiga".
 * </p>
 */
class Connexio {
    /**
     * @var string $host Dirección del servidor de la base de datos.
     */
    private $host = "localhost";

    /**
     * @var string $usuario Nombre de usuario para la conexión a la base de datos.
     */
    private $usuario = "root";

    /**
     * @var string $contraseña Contraseña para la conexión a la base de datos.
     */
    private $contraseña = "";

    /**
     * @var string $baseDatos Nombre de la base de datos a la que se conecta.
     */
    private $baseDatos = "la_meva_botiga";

    /**
     * Obtiene una conexión a la base de datos.
     * <p>
     * Este método crea una conexión utilizando la extensión MySQLi de PHP.
     * Si ocurre un error durante la conexión, el script termina con un mensaje de error.
     * </p>
     *
     * @return mysqli Objeto de conexión a la base de datos.
     * @throws Exception Si ocurre un error al conectar con la base de datos.
     */
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        // Verifica si ocurrió un error al conectar
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
