<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destino['titulo'] }} - Detalle</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 800px; margin: 0 auto; background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); overflow: hidden; padding-bottom: 20px; }
        .hero-img { width: 100%; height: 400px; object-fit: cover; }
        .content { padding: 30px; }
        .btn-back { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #0d6efd; font-weight: bold; }
        .btn-back:hover { text-decoration: underline; }
        h1 { margin-top: 0; color: #2c3e50; font-size: 2.2em; }
        .info-box { background: #f1f3f5; padding: 15px; border-radius: 8px; margin-bottom: 20px; line-height: 1.6; }
        hr { border: 0; border-top: 1px solid #dee2e6; margin: 30px 0; }
        
        /* Estilos del formulario */
        .contact-form { display: flex; flex-direction: column; gap: 15px; }
        .form-group { display: flex; flex-direction: column; }
        .form-group label { margin-bottom: 5px; font-weight: bold; }
        .form-group input, .form-group textarea { padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-family: inherit; }
        .btn-submit { background-color: #198754; color: white; border: none; padding: 12px; border-radius: 5px; cursor: pointer; font-size: 1em; font-weight: bold; transition: 0.3s; }
        .btn-submit:hover { background-color: #157347; }
    </style>
</head>
<body>

    <div class="container">
        <img src="{{ $destino['imagen'] }}" alt="{{ $destino['titulo'] }}" class="hero-img">
        
        <div class="content">
            <a href="{{ route('destinos.index') }}" class="btn-back">← Volver al catálogo</a>
            
            <h1>{{ $destino['titulo'] }}</h1>
            
            <div class="info-box">
                <p><strong>📍 Departamento:</strong> {{ $destino['departamento'] }}</p>
                <p><strong>🏷️ Categoría:</strong> {{ $destino['categoria'] }}</p>
                <p><strong>💰 Precios:</strong> {{ $destino['precios'] }}</p>
            </div>
            
            <h3>Acerca de este lugar</h3>
            <p>{{ $destino['descripcion'] }}</p>

            <hr>

            <h3>Solicitar más información</h3>
            <form action="#" method="POST" class="contact-form">
                @csrf
                <input type="hidden" name="destino_id" value="{{ $destino['id'] }}">
                
                <div class="form-group">
                    <label for="email">Tu correo electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>
                
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Me gustaría saber más sobre tours disponibles en {{ $destino['titulo'] }}..." required></textarea>
                </div>
                
                <button type="submit" class="btn-submit">Enviar consulta</button>
            </form>
        </div>
    </div>

</body>
</html>