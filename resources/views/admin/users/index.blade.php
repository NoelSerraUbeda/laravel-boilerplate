<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Codificación de carácteres -->
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1245/1245778.png">

    <!-- Etiquetas con proposito de SEO, el título y la descripción aparecerán en los resultados de Google,
    la etiqueta keywords se ha quedado obsoleta -->
    <title>Panel de Administración</title>
    <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
    <meta name="keywords" content="palabras clave, separadas, por comas">

    <!-- Compartir redes sociales -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Título" />
    <meta property="og:description" content="descripción de la web, se recomienda 90 caracteres" />
    <meta property="og:image" content="https://cdn-icons-png.flaticon.com/512/1245/1245778.png" />

    <!-- Fuentes de la web -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <!-- Documentos enlazados -->
    <link rel="stylesheet" href="style/app.css">

</head>

<body>
    <header>
        <div class="topnav">
            <div class="users">
                <svg width="80px" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>Laravel</title>
                    <path
                        d="M21.7 6.53C21.71 6.55 21.71 6.58 21.71 6.61V10.9C21.71 11 21.65 11.12 21.56 11.17L17.95 13.25V17.36C17.95 17.47 17.9 17.57 17.8 17.63L10.28 21.96C10.26 21.97 10.24 22 10.22 22L10.2 22C10.15 22 10.09 22 10.04 22C10.03 22 10 22 10 22C10 22 10 21.97 9.96 21.96L2.44 17.63C2.35 17.58 2.29 17.47 2.29 17.36V4.5C2.29 4.45 2.29 4.42 2.3 4.4C2.3 4.39 2.31 4.38 2.31 4.37C2.31 4.35 2.32 4.34 2.33 4.32C2.33 4.31 2.34 4.3 2.35 4.29C2.36 4.28 2.37 4.27 2.38 4.26C2.39 4.25 2.4 4.24 2.41 4.23C2.42 4.22 2.43 4.21 2.44 4.21L6.2 2.04C6.3 2 6.42 2 6.5 2.04L10.28 4.21H10.28C10.29 4.22 10.3 4.22 10.31 4.23C10.32 4.24 10.33 4.25 10.34 4.26C10.35 4.27 10.36 4.28 10.37 4.29C10.38 4.3 10.39 4.31 10.39 4.32C10.4 4.34 10.41 4.35 10.41 4.37C10.41 4.38 10.42 4.39 10.42 4.4C10.43 4.43 10.43 4.45 10.43 4.5V12.5L13.57 10.72V6.61C13.57 6.58 13.57 6.55 13.58 6.53L13.59 6.5C13.59 6.5 13.6 6.47 13.61 6.45C13.61 6.44 13.62 6.43 13.63 6.42C13.64 6.41 13.65 6.4 13.66 6.39C13.67 6.38 13.68 6.37 13.69 6.36C13.7 6.35 13.71 6.34 13.72 6.34L17.5 4.17C17.58 4.11 17.7 4.11 17.8 4.17L21.56 6.34C21.57 6.34 21.58 6.35 21.59 6.36L21.62 6.39C21.63 6.4 21.64 6.41 21.65 6.42C21.66 6.43 21.66 6.44 21.67 6.45C21.68 6.47 21.68 6.5 21.69 6.5C21.7 6.5 21.7 6.5 21.7 6.53M21.09 10.72V7.15L17.95 8.95V12.5L21.09 10.72M17.33 17.18V13.6L10.43 17.54V21.15L17.33 17.18M2.91 5V17.18L9.81 21.15V17.54L6.21 15.5L6.2 15.5L6.2 15.5C6.19 15.5 6.18 15.5 6.17 15.47C6.16 15.47 6.15 15.46 6.14 15.45V15.45C6.13 15.44 6.12 15.43 6.11 15.42C6.1 15.41 6.1 15.4 6.09 15.39V15.39C6.08 15.37 6.08 15.36 6.07 15.35C6.07 15.33 6.06 15.32 6.06 15.31C6.05 15.3 6.05 15.28 6.05 15.27C6.05 15.25 6.05 15.24 6.05 15.23V6.82L2.91 5M6.36 2.68L3.23 4.5L6.36 6.28L9.5 4.5L6.36 2.68M9.81 12.88V5L6.67 6.82V14.69L9.81 12.88M17.64 4.8L14.5 6.61L17.64 8.41L20.77 6.61L17.64 4.8M17.33 8.95L14.19 7.15V10.72L17.33 12.5V8.95M10.12 17L17 13.06L13.88 11.26L7 15.23L10.12 17Z" />
                </svg>
                <h2>Usuarios</h2>
                <svg width="50px" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>Account-details</title>
                    <path
                        d="M2,3H22C23.05,3 24,3.95 24,5V19C24,20.05 23.05,21 22,21H2C0.95,21 0,20.05 0,19V5C0,3.95 0.95,3 2,3M14,6V7H22V6H14M14,8V9H21.5L22,9V8H14M14,10V11H21V10H14M8,13.91C6,13.91 2,15 2,17V18H14V17C14,15 10,13.91 8,13.91M8,6A3,3 0 0,0 5,9A3,3 0 0,0 8,12A3,3 0 0,0 11,9A3,3 0 0,0 8,6Z" />
                </svg>
            </div>
            <h1>Panel de Administración</h1>
            <nav>
                <svg  width="80px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>Menu</title>
                    <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                </svg>
            </nav>
        </div>
    </header>
    <main>
        <div class="topnav-filter" id="filtrador">
            <button onclick="toggleAltura()"><svg width="10%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>Filter-Data</title>
                    <path fill="white"
                        d="M22.77 19.32L21.7 18.5C21.72 18.33 21.74 18.17 21.74 18S21.73 17.67 21.7 17.5L22.76 16.68C22.85 16.6 22.88 16.47 22.82 16.36L21.82 14.63C21.76 14.5 21.63 14.5 21.5 14.5L20.27 15C20 14.82 19.73 14.65 19.42 14.53L19.23 13.21C19.22 13.09 19.11 13 19 13H17C16.87 13 16.76 13.09 16.74 13.21L16.55 14.53C16.25 14.66 15.96 14.82 15.7 15L14.46 14.5C14.35 14.5 14.22 14.5 14.15 14.63L13.15 16.36C13.09 16.47 13.11 16.6 13.21 16.68L14.27 17.5C14.25 17.67 14.24 17.83 14.24 18S14.25 18.33 14.27 18.5L13.21 19.32C13.12 19.4 13.09 19.53 13.15 19.64L14.15 21.37C14.21 21.5 14.34 21.5 14.46 21.5L15.7 21C15.96 21.18 16.24 21.35 16.55 21.47L16.74 22.79C16.76 22.91 16.86 23 17 23H19C19.11 23 19.22 22.91 19.24 22.79L19.43 21.47C19.73 21.34 20 21.18 20.27 21L21.5 21.5C21.63 21.5 21.76 21.5 21.83 21.37L22.83 19.64C22.89 19.53 22.86 19.4 22.77 19.32M18 19.5C17.16 19.5 16.5 18.83 16.5 18S17.17 16.5 18 16.5 19.5 17.17 19.5 18 18.83 19.5 18 19.5M3 3C2.78 3 2.57 3.08 2.38 3.22C1.95 3.56 1.87 4.19 2.21 4.62L7.97 12H8V17.87C7.96 18.16 8.06 18.47 8.29 18.7L10.3 20.71C10.65 21.06 11.19 21.08 11.58 20.8C11.2 19.91 11 18.96 11 18C11 16.73 11.35 15.5 12 14.4V12H12.03L17.79 4.62C18.13 4.19 18.05 3.56 17.62 3.22C17.43 3.08 17.22 3 17 3H3Z" />
                </svg>
            </button>
        </div>
        <div class="dataMenu">
            <div class="dataMenu-info" id="cardContainer">
                <div class="dataMenu-card">
                    <div class="dataMenu-card-buttons">
                        <button class="delete"><svg width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Delete</title>
                                <path
                                    d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z"
                                    fill="white" />
                            </svg></button>
                        <button class="edit"><svg width="80px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Edit</title>
                                <path
                                    d="M10 20H6V4H13V9H18V12.1L20 10.1V8L14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H10V20M20.2 13C20.3 13 20.5 13.1 20.6 13.2L21.9 14.5C22.1 14.7 22.1 15.1 21.9 15.3L20.9 16.3L18.8 14.2L19.8 13.2C19.9 13.1 20 13 20.2 13M20.2 16.9L14.1 23H12V20.9L18.1 14.8L20.2 16.9Z"
                                    fill="white" />
                            </svg></button>
                    </div>
                    <div class="dataMenu-card-data">
                        <h3>NOMBRE: <span>Pedro</span></h3>
                        <h3>EMAIL: <span>PedroCorreo@gmail.com</span></h3>
                    </div>
                </div>

                <div class="dataMenu-card">
                    <div class="dataMenu-card-buttons">
                        <button class="delete"><svg width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Delete</title>
                                <path
                                    d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z"
                                    fill="white" />
                            </svg></button>
                        <button class="edit"><svg width="80px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Edit</title>
                                <path
                                    d="M10 20H6V4H13V9H18V12.1L20 10.1V8L14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H10V20M20.2 13C20.3 13 20.5 13.1 20.6 13.2L21.9 14.5C22.1 14.7 22.1 15.1 21.9 15.3L20.9 16.3L18.8 14.2L19.8 13.2C19.9 13.1 20 13 20.2 13M20.2 16.9L14.1 23H12V20.9L18.1 14.8L20.2 16.9Z"
                                    fill="white" />
                            </svg></button>
                    </div>
                    <div class="dataMenu-card-data">
                        <h3>NOMBRE: <span>Carlos</span></h3>
                        <h3>EMAIL: <span>Charles_MorenoCorreo@gmail.com</span></h3>
                    </div>
                </div>

                <div class="dataMenu-card">
                    <div class="dataMenu-card-buttons">
                        <button class="delete"><svg width="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Delete</title>
                                <path
                                    d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z"
                                    fill="white" />
                            </svg></button>
                        <button class="edit"><svg width="80px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Edit</title>
                                <path
                                    d="M10 20H6V4H13V9H18V12.1L20 10.1V8L14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H10V20M20.2 13C20.3 13 20.5 13.1 20.6 13.2L21.9 14.5C22.1 14.7 22.1 15.1 21.9 15.3L20.9 16.3L18.8 14.2L19.8 13.2C19.9 13.1 20 13 20.2 13M20.2 16.9L14.1 23H12V20.9L18.1 14.8L20.2 16.9Z"
                                    fill="white" />
                            </svg></button>
                    </div>
                    <div class="dataMenu-card-data">
                        <h3>NOMBRE: <span>Maria</span></h3>
                        <h3>EMAIL: <span>MariaTieneCorreo@gmail.com</span></h3>
                    </div>
                </div>

            </div>
            <div class="dataMenu-form">
                <div class="dataMenu-form-buttons">
                    <button id="deleteData"><svg width="100%"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>Delete-Data</title>
                            <path fill="white"
                                d="M16.24,3.56L21.19,8.5C21.97,9.29 21.97,10.55 21.19,11.34L12,20.53C10.44,22.09 7.91,22.09 6.34,20.53L2.81,17C2.03,16.21 2.03,14.95 2.81,14.16L13.41,3.56C14.2,2.78 15.46,2.78 16.24,3.56M4.22,15.58L7.76,19.11C8.54,19.9 9.8,19.9 10.59,19.11L14.12,15.58L9.17,10.63L4.22,15.58Z" />
                        </svg>
                    </button>

                    <div class="save">
                        <button id="saveButton"><svg width="100%"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <title>Save-Data</title>
                                <path fill="white"
                                    d="M11.1 19C11.2 19.7 11.4 20.4 11.7 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H17L21 7V11.7C20.4 11.4 19.7 11.2 19 11.1V7.8L16.2 5H5V19H11.1M12 12C10.3 12 9 13.3 9 15C9 16.3 9.8 17.4 11 17.8C11.1 15.6 12.1 13.7 13.7 12.5C13.2 12.2 12.6 12 12 12M15 10V6H6V10H15M22.8 19.6L21.8 21.3C21.7 21.4 21.6 21.4 21.5 21.4L20.3 21C20 21.2 19.8 21.3 19.5 21.5L19.3 22.8C19.3 22.9 19.2 23 19.1 23H17.1C17 23 16.9 22.9 16.8 22.8L16.6 21.5C16.3 21.4 16 21.2 15.8 21L14.6 21.5C14.5 21.5 14.4 21.5 14.3 21.4L13.3 19.7C13.2 19.6 13.3 19.5 13.4 19.4L14.5 18.6V17.6L13.4 16.8C13.3 16.7 13.3 16.6 13.3 16.5L14.3 14.8C14.4 14.7 14.5 14.7 14.6 14.7L15.8 15.2C16.1 15 16.3 14.9 16.6 14.7L16.8 13.4C16.8 13.3 16.9 13.2 17.1 13.2H19.1C19.2 13.2 19.3 13.3 19.3 13.4L19.5 14.7C19.8 14.8 20.1 15 20.4 15.2L21.6 14.7C21.7 14.7 21.9 14.7 21.9 14.8L22.9 16.5C23 16.6 22.9 16.7 22.8 16.8L21.7 17.6V18.6L22.8 19.4C22.9 19.4 22.9 19.5 22.8 19.6M19.5 18C19.5 17.2 18.8 16.5 18 16.5S16.5 17.2 16.5 18 17.2 19.5 18 19.5C18.8 19.5 19.5 18.8 19.5 18Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="dataMenu-form-writter">
                    <form id="dataForm">
                        <div class="writter-section">
                            <label>Nombre</label>
                            <input type="text" id="nombreInput">
                        </div>
                        <div class="writter-section">
                            <label>Email</label>
                            <input type="email" id="emailInput">
                        </div>
                        <div class="writter-section">
                            <label>Contraseña</label>
                            <input type="password" id="contrasenaInput">
                        </div>
                        <div class="writter-section">
                            <label>Repetir Contraseña</label>
                            <input type="password" id="repetirContrasenaInput">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>

</html>