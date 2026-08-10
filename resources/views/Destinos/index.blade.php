<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Turístico de El Salvador</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; margin: 0; padding: 20px; color: #333; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        .grid-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 25px; max-width: 1200px; margin: 0 auto; }
        .card { background: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease; display: flex; flex-direction: column; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 6px 12px rgba(0,0,0,0.15); }
        .card img { width: 100%; height: 220px; object-fit: cover; }
        .card-body { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; }
        .card-body h2 { margin: 0 0 10px 0; font-size: 1.4em; color: #0056b3; }
        .badge { display: inline-block; background: #e9ecef; padding: 5px 10px; border-radius: 15px; font-size: 0.85em; margin-bottom: 10px; color: #495057; }
        .btn { margin-top: auto; display: block; text-align: center; background-color: #0d6efd; color: white; text-decoration: none; padding: 10px; border-radius: 5px; transition: background 0.3s; font-weight: bold; }
        .btn:hover { background-color: #0b5ed7; }
    </style>
</head>
<body>

    <h1>Descubre El Salvador</h1>

    <div class="grid-container">
        @forelse($destinos as $lugar)
            <div class="card">
                <img src="{{ $lugar['imagen'] }}" alt="{{ $lugar['titulo'] }}">
                
                <div class="card-body">
                    <h2>{{ $lugar['titulo'] }}</h2>
                    <span class="badge">{{ $lugar['categoria'] }}</span>
                    <p><strong>📍 Ubicación:</strong> {{ $lugar['departamento'] }}</p>
                    
                    <a href="{{ route('destinos.show', $lugar['id']) }}" class="btn">Ver Detalles</a>
                </div>
            </div>
        @empty
            <p style="text-align: center; grid-column: 1 / -1;">No hay destinos turísticos registrados.</p>
        @endforelse
    </div>

</body>
</html>