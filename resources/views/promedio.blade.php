<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio de 6 Números</title>
    <style>
        body { font-family: sans-serif; margin: 50px; background-color: #f7fafc; color: #2d3748; }
        .card { max-width: 400px; margin: auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .grid-inputs { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 15px; }
        input, button, .btn-volver { width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border-radius: 4px; border: 1px solid #cbd5e0; text-align: center; display: block; text-decoration: none;}
        button { background-color: #3182ce; color: white; font-weight: bold; border: none; cursor: pointer; margin-bottom: 15px;}
        button:hover { background-color: #2b6cb0; }
        .btn-volver { background-color: #e2e8f0; color: #4a5568; font-weight: bold; border: none; }
        .btn-volver:hover { background-color: #cbd5e0; }
        .resultado { padding: 15px; background-color: #c6f6d5; color: #22543d; border-radius: 4px; font-weight: bold; text-align: center; margin-bottom: 15px; }
        label { font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Calcular Promedio</h2>
        <form action="/promedio" method="POST">
            @csrf 
            <div class="grid-inputs">
                <div>
                    <label>Núm 1:</label>
                    <input type="number" step="any" name="n1" required>
                </div>
                <div>
                    <label>Núm 2:</label>
                    <input type="number" step="any" name="n2" required>
                </div>
                <div>
                    <label>Núm 3:</label>
                    <input type="number" step="any" name="n3" required>
                </div>
                <div>
                    <label>Núm 4:</label>
                    <input type="number" step="any" name="n4" required>
                </div>
                <div>
                    <label>Núm 5:</label>
                    <input type="number" step="any" name="n5" required>
                </div>
                <div>
                    <label>Núm 6:</label>
                    <input type="number" step="any" name="n6" required>
                </div>
            </div>

            <button type="submit">Calcular Promedio</button>
        </form>

        @if(isset($resultado))
            <div class="resultado">
                El promedio final es:<br> 
                <span style="font-size: 1.5em;">{{ $resultado }}</span>
            </div>
        @endif
        <a href="/" class="btn-volver">🔙 Volver al Menú</a>
    </div>
</body>
</html>