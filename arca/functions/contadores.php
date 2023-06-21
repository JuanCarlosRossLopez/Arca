<?php
include('connection/connection_arca.php');



function obtenerContadorAnimales() {
    global $conn;
    $sql = "SELECT COUNT(*) as contador FROM animal";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["contador"];
    } else {
        return 0;
    }
}

// Función para obtener el contador de clasificaciones
function obtenerContadorClasificaciones() {
    global $conn;
    $sql = "SELECT COUNT(*) as contador FROM clasificacion";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["contador"];
    } else {
        return 0;
    }
}

// Función para obtener el contador de alimentaciones
function obtenerContadorAlimentaciones() {
    global $conn;
    $sql = "SELECT COUNT(*) as contador FROM alimentacion";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["contador"];
    } else {
        return 0;
    }
}

// Función para obtener el contador de hábitats
function obtenerContadorHabitats() {
    global $conn;
    $sql = "SELECT COUNT(*) as contador FROM habitat";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["contador"];
    } else {
        return 0;
    }
}

// Obtener los contadores
$contadorAnimales = obtenerContadorAnimales();
$contadorClasificaciones = obtenerContadorClasificaciones();
$contadorAlimentaciones = obtenerContadorAlimentaciones();
$contadorHabitats = obtenerContadorHabitats();

// Cerrar conexión
$conn->close();
?>