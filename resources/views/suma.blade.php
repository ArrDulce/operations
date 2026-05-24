<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Suma en Web</title>
    <style>
        body { font-family: sans-serif; margin: 50px; background-color: #f7fafc; color: #2d3748; }
        .card { max-width: 400px; margin: auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        input, button { width: 100%; padding: 10px; margin-top: 10px; margin-bottom: 20px; box-sizing: border-box; border-radius: 4px; border: 1px solid #cbd5e0; }
        button { background-color: #3182ce; color: white; font-weight: bold; border: none; cursor: pointer; }
        button:hover { background-color: #2b6cb0; }
        .resultado { padding: 15px; background-color: #c6f6d5; color: #22543d; border-radius: 4px; font-weight: bold; text-align: center; }
    </style>
</head>
<body>

    <div class="card">
        <h2>Calculadora de Suma</h2>

        <form action="/suma" method="POST">
            @csrf 

            <label>Número A:</label>
            <input type="number" name="numero_a" required>

            <label>Número B:</label>
            <input type="number" name="numero_b" required>

            <button type="submit">Calcular Suma</button>
        </form>

        @if(isset($resultado))
            <div class="resultado">
                El resultado es: {{ $resultado }}
            </div>
        @endif
    </div>
    <a href="/" class="btn-volver">🔙 Volver al Menú</a>
</body>
</html>