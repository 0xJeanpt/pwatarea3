<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01 - Menú Desplegable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Menú de navegación desplegable</h1>

    <nav class="menu">
        <ul>
            <li onclick="toggleMenu('opciones1')">Inicio
                <ul id="opciones1" class="submenu">
                    <li><a href="#">Subopción 1</a></li>
                    <li><a href="#">Subopción 2</a></li>
                </ul>
            </li>
            <li onclick="toggleMenu('opciones2')">Servicios
                <ul id="opciones2" class="submenu">
                    <li><a href="#">Diseño</a></li>
                    <li><a href="#">Programación</a></li>
                </ul>
            </li>
            <li onclick="toggleMenu('opciones3')">Contacto
                <ul id="opciones3" class="submenu">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">WhatsApp</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <script src="script.js"></script>
</body>
</html>
