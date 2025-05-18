@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | Eco Creations</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        h1, h2 {
            font-weight: bold;
            margin: 20px 0;
        }

        .hero { 
            height: auto;
            background-color: #3b5d3b;
            background-image: url('../../public/img/Nosotros.png');
            background-size: cover;
            background-position: center;
            padding: 60px 20px;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 36px;
            margin: 0;
        }

        .eco-creations {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap;
        }

        .logo-box {
            border-radius: 12px;
            padding: 10px;
            text-align: center;
            width: 200px;
            flex-shrink: 0;
        }

        .logo-box img {
            width: 100%;
            max-width: 180px;
            margin-bottom: 10px;
        }

        .logo-box h2 {
            font-size: 18px;
            margin: 0;
        }

        .eco-text {
            max-width: 600px;
            font-size: 15px;
            line-height: 1.6;
            color: #333;
        }

        .valores {
            background-color: #508B46;
            padding: 40px 20px;
            text-align: center;
            color: white;
        }

        .valores h2 {
            font-size: 24px;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background-color: black;
            border-radius: 12px;
            width: 200px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 140px;
            object-fit: cover;
        }

        .card-title {
            background-color: #1e1e1e;
            color: white;
            padding: 12px 10px;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .equipo {
            background-color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .equipo h2 {
            margin-bottom: 30px;
        }

        .equipo .card {
            background: #508B46;
            color: white;
        }

        .equipo .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-top: 15px;
            object-fit: cover;
        }

        .equipo .card small {
            display: block;
            margin-bottom: 15px;
            color: white;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 26px;
            }

            .eco-creations {
                flex-direction: column;
                align-items: center;
                padding: 20px;
                gap: 20px;
                text-align: center;
            }

            .eco-text {
                font-size: 14px;
                padding: 0 10px;
            }

            .cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 90%;
                max-width: 300px;
            }

            .card img {
                height: auto;
            }

            .card-title {
                font-size: 14px;
                padding: 10px;
            }

            .equipo .card img {
                width: 90px;
                height: 90px;
            }

            .valores img {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1>Nosotros</h1>
    </div>

    <section class="eco-creations">
        <div class="logo-box">
            <img src="../../public/img/ecocreations.png" alt="Eco Creations">
        </div>
        <div class="eco-text">
            <p>
                En ECO CREATIONS, creemos que un mundo más saludable comienza con pequeñas decisiones conscientes.
            </p>
            <p>
                Nacimos con la misión de ofrecer productos ecológicos, sostenibles y respetuosos con el medio ambiente, accesibles para todos.
            </p>
            <p>
                Seleccionamos cuidadosamente cada artículo, priorizando lo natural, libre de químicos agresivos, sin plásticos y de origen responsable.
            </p>
            <p>
                Nuestro compromiso va más allá de vender: queremos inspirar un estilo de vida más verde, más justo y más conectado con la naturaleza.
            </p>
        </div>
    </section>

    <section class="valores">
        <h2>Nuestros Valores</h2>
        <div class="cards">
            <div class="card">
                <img src="../../public/img/sostenible.png" alt="Sostenibilidad">
                <div class="card-title">🌱 Sostenibilidad</div>
            </div>
            <div class="card">
                <img src="../../public/img/comercio.png" alt="Comercio justo">
                <div class="card-title">🤝 Comercio justo</div>
            </div>
            <div class="card">
                <img src="../../public/img/amor.png" alt="Amor por el planeta">
                <div class="card-title">🌍 Amor por el planeta</div>
            </div>
            <div class="card">
                <img src="../../public/img/producto.png" alt="Sin tóxicos">
                <div class="card-title">🧴 Productos sin tóxicos</div>
            </div>
            <div class="card">
                <img src="../../public/img/cero.png" alt="Cero plástico">
                <div class="card-title">🚫 Cero plástico</div>
            </div>
        </div>
    </section>

    <section class="equipo">
        <h2>Nuestro Equipo</h2>
        <div class="cards">
            <div class="card">
                <img src="../../public/img/gianfranco.png" alt="Gianfranco">
                <div class="card-title">Gianfranco Hullica</div>
                <small>Diseño y marketing</small>
            </div>
            <div class="card">
                <img src="../../public/img/josue.png" alt="Jose">
                <div class="card-title">Jose Huayapa</div>
                <small>Programador</small>
            </div>
            <div class="card">
                <img src="../../public/img/nada.png" alt="No hace nada">
                <div class="card-title">"No hace nada"</div>
                <small>...pero se ve bonito</small>
            </div>
        </div>
    </section>

</body>
</html>


@endsection