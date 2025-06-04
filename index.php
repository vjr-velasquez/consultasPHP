<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos al index del Desarrollo Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        
        .main-container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .page-title {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .accordion-button {
            font-weight: 600;
            font-size: 1.1rem;
            padding: 20px;
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white !important;
            border: none;
            transition: all 0.3s ease;
        }
        
        .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white !important;
            box-shadow: none;
        }
        
        .accordion-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .accordion-body {
            padding: 25px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }
        
        .accordion-body a {
            display: inline-block;
            padding: 12px 25px;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }
        
        .accordion-body a:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.4);
            color: white;
        }
        
        .accordion-button::after {
            filter: brightness(0) invert(1);
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1 class="page-title">Sistema de Gestión CRUD</h1>
        
        <div class="accordion" id="accordionExample">
            <!-- Ciudadanos -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Procesos CRUD para los ciudadanos
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="baseDatos/vista_ciudadanos.php">👥 Gestionar Ciudadanos</a>
                    </div>
                </div>
            </div>
            
            <!-- Departamentos -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Procesos CRUD para los departamentos
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="baseDatos/vistas_departamentos.php">🏛️ Gestionar Departamentos</a>
                    </div>
                </div>
            </div>
            
            <!-- Municipios -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Procesos CRUD para los municipios
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="baseDatos/vista_municipios.php">🏙️ Gestionar Municipios</a>
                    </div>
                </div>
            </div>
            
            <!-- Niveles Académicos - CORREGIDO: Ahora está dentro del acordeón -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Procesos CRUD para los niveles académicos
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="baseDatos/vista_academicos.php">🎓 Gestionar Niveles Académicos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>