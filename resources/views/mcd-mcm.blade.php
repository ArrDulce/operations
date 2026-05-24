<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular MCD y MCM</title>
    <style>
        body { font-family: sans-serif; margin: 50px; background-color: #f7fafc; color: #2d3748; }
        .card { max-width: 400px; margin: auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        input, button, .btn-volver { width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; box-sizing: border-box; border-radius: 4px; border: 1px solid #cbd5e0; text-align: center; display: block; text-decoration: none;}
        button { background-color: #3182ce; color: white; font-weight: bold; border: none; cursor: pointer; }
        button:hover { background-color: #2b6cb0; }
        .btn-volver { background-color: #e2e8f0; color: #4a5568; font-weight: bold; border: none; }
        .btn-volver:hover { background-color: #cbd5e0; }
        .resultado { padding: 15px; background-color: #c6f6d5; color: #22543d; border-radius: 4px; font-weight: bold; text-align: center; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Calculadora MCD / MCM</h2>
        <form action="/mcd-mcm" method="POST">
            @csrf 
            <label>Primer Número:</label>
            <input type="number" name="numero1" required>

            <label>Segundo Número:</label>
            <input type="number" name="numero2" required>

            <button type="submit">Calcular</button>
        </form>

        @if(isset($mcd))
            <div class="resultado">
                El MCD es: <strong>{{ $mcd }}</strong><br>
                El MCM es: <strong>{{ $mcm }}</strong>
            </div>
        @endif
        <a href="/" class="btn-volver">🔙 Volver al Menú</a>
    </div>
</body>
</html>