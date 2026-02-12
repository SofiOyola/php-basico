<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        /* Fondo rosado y centrado del formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d0d0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Contenedor principal del formulario */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Título en negrita */
        h2 {
            text-align: center;
            color: #d35c5c;
            font-weight: bold;
        }

        /* Estilo para los campos de entrada */
        input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #d35c5c;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        /* Subrayado rosado claro al hacer foco (cuando el usuario está escribiendo) */
        input[type="email"]:focus, textarea:focus {
            border-color: #f8a1a1; /* Subrayado rosado claro */
        }

        /* Estilo para el área de mensaje */
        textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Color del botón y estilo */
        button {
            background-color: #d35c5c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #a84949;
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h2>Formulario</h2>

        <form action="#" method="POST">
            <!-- Campo para el email -->
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required placeholder="Ingresa tu correo">

            <!-- Campo para el mensaje -->
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required placeholder="Escribe tu mensaje"></textarea>

            <!-- Botón de enviar -->
            <button type="submit">Enviar mensaje</button>
        </form>
    </div>

</body>
</html>
