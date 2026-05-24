<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Operaciones</title>
    <style>
        body { 
            font-family: sans-serif; 
            margin: 0; 
            padding: 50px; 
            background-color: #f7fafc; 
            color: #2d3748; 
            display: flex;
            justify-content: center;
        }
        .dashboard { 
            width: 100%;
            max-width: 600px; 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
            text-align: center;
        }
        h1 { margin-top: 0; color: #2b6cb0; }
        p { margin-bottom: 30px; color: #718096; }
        
        /* Cuadrícula para los botones */
        .grid-menu {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        /* Estilo de los botones (Enlaces) */
        .btn { 
            display: inline-block;
            padding: 15px; 
            background-color: #3182ce; 
            color: white; 
            text-decoration: none;
            font-weight: bold; 
            border-radius: 6px; 
            transition: background-color 0.3s;
        }
        .btn:hover { background-color: #2b6cb0; }
        
        /* Botones desactivados (Para las operaciones que aún no hacemos) */
        .btn-disabled {
            background-color: #cbd5e0;
            color: #a0aec0;
            pointer-events: none; /* Evita que se les pueda dar clic */
        }
    </style>
</head>
<body>

    <div class="dashboard">
        <h1>Panel de Operaciones</h1>
        <p>Selecciona la herramienta matemática que deseas utilizar.</p>

        <div class="grid-menu">
            <a href="/suma" class="btn">➕ Suma Básica</a>
            <a href="/exponente" class="btn">📈 Cálculo de Exponente</a>
            <a href="/pitagoras" class="btn">📐 Teorema de Pitágoras</a>
            <a href="/conversion" class="btn">🌡️ Conversión °C a °F</a>
            <a href="/hash" class="btn">🔐 Generar Hash SHA256</a>
            <a href="/mcd-mcm" class="btn">📊 Calcular MCD y MCM</a>
            <a href="/promedio" class="btn">📝 Promedio de 6 números</a>
        
    </div>

</body>
</html>