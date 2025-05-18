<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contacto - Eco Productos</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background-color: #f9f9f9;
    }

    header {
      background-image: url('https://images.unsplash.com/photo-1542831371-d531d36971e6');
      background-size: cover;
      background-position: center;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      position: relative;
    }

    header::after {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.4);
    }

    header h1 {
      position: relative;
      z-index: 1;
      font-size: 2.5em;
    }

    .info-section {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .info-section p {
      text-align: center;
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    .contact-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
    }

    .map-container iframe {
      border: none;
      width: 100%;
      max-width: 500px;
      height: 300px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .contact-details {
      max-width: 400px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      font-size: 1em;
    }

    .contact-item span {
      margin-right: 10px;
      font-size: 1.3em;
      color: green;
    }

    .social-icons a {
      font-size: 1.8em;
      margin-right: 15px;
      text-decoration: none;
      color: black;
    }

.subscription {
  border-radius: 20px;
  align-items: center;
  width: 80%;
  background-color: #185B22;
  color: white;
  text-align: center;
  padding: 20px 20px 20px 20px;
  margin: 0 auto;
}


    .subscription h2 {
      text-align: left;
      font-size: 1.6em;
      margin-bottom: 10px;
    }

    .subscription p {
      text-align: left;
      font-weight: 300;
      margin-bottom: 0px;
    }

    .subscription form {
      display: flex;
      justify-content: left;
      flex-wrap: wrap;
      gap: 10px;
    }

    .subscription input[type="email"] {
      padding: 10px;
      border-radius: 5px;
      border: none;
      width: 85%;
    }

    .subscription button {
      background-color: white;
      color: #1c6d3c;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .contact-grid {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Contacto</h1>
  </header>

  <section class="info-section">
    <p>
      ¿Tienes dudas sobre nuestros productos ecológicos, formas de entrega o quieres saber más sobre nuestro compromiso con el medio ambiente? Estamos aquí para ayudarte.
    </p>

    <div class="contact-grid">
      <div class="map-container">
        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-77.063%2C-12.083%2C-77.023%2C-12.043&layer=mapnik" loading="lazy"></iframe>
      </div>

      <div class="contact-details">
        <div class="contact-item">
          <img src="../../public/img/mensaje.png" alt=""> cualquiercorreo@gmail.com
        </div>
        <div class="contact-item">
          <img src="../../public/img/llamada.png" alt="">+51 777 777 777
        </div>
        <div class="contact-item">
          <img src="../../public/img/relojs.png" alt=""> Lunes a Viernes: 9am a 6pm
        </div>

        <p><strong>Síguenos en nuestras redes:</strong></p>
        <div class="social-icons">
          <a href="#"><img src="../../public/img/fb.png" alt=""></a>
          <a href="#"><img src="../../public/img/tiktok.png" alt=""></a>
          <a href="#"><img src="../../public/img/ig.png" alt=""></a>
        </div>
      </div>
    </div>
  </section>

  <section class="subscription">
    <p>¿TE GUSTO LO QUE VISTE?</p>
    <h2>PUEDES CONSULTAR AQUÍ</h2>
    <br>
    <form>
      <input type="email" placeholder="Escribe tu correo" required />
      <button type="submit">ENVIAR</button>
    </form>
  </section>

</body>
</html>