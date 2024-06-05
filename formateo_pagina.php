<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>formato de página</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #89E43F;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .date-time {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #666;
        }
        .link {
            text-align: center;
            margin-top: 20px;
        }
        .link a {
            color: #007BFF;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #74C533;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>bienvenido profe juan carlos</h1>
        <div class="date-time">
            <?php
                echo "Fecha y hora actual: " . date("d \d\e F, Y, g:i a");
            ?>
        </div>
        <div class="link">
            <a href="https://www.php.net/manual/es/function.date.php" target="_blank">Documentación de PHP</a>
        </div>
        <table>
            <tr>
                <td>Junio 04, 2024, 9:12 pm</td>
                <td><?php echo date("d \d\e F, Y, g:i a"); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
