<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Funciones de HTML, CSS y JavaScript en un sitio web.">
  <title>Tecnologías | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <p class="eyebrow">Proyecto académico</p>
      <h1>Tecnologías de la Web</h1>
      <p class="subtitle">Tres herramientas fundamentales para construir páginas interactivas.</p>
    </div>
  </header>

  <nav class="main-nav" aria-label="Navegación principal">
    <div class="container nav-links">
      <a href="index.php">Inicio</a>
      <a href="historia.php">Historia</a>
      <a href="tecnologias.php" aria-current="page">Tecnologías</a>
      <a href="linea-tiempo.php">Línea del tiempo</a>
      <a href="contacto.php">Formulario</a>
    </div>
  </nav>

  <main class="container content">
    <section class="panel">
      <h2>¿Qué hace cada tecnología?</h2>
      <p>Un sitio web puede combinar varios lenguajes. En este proyecto, cada uno cumple una función distinta.</p>
      <div class="table-wrap">
        <table>
          <caption>Funciones principales de las tecnologías web</caption>
          <thead>
            <tr>
              <th scope="col">Tecnología</th>
              <th scope="col">Función</th>
              <th scope="col">Ejemplo en este sitio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">HTML</th>
              <td>Organiza el contenido y define su estructura.</td>
              <td>Títulos, párrafos, enlaces, listas y tablas.</td>
            </tr>
            <tr>
              <th scope="row">CSS</th>
              <td>Controla el diseño, los colores y la distribución.</td>
              <td>Menú, tarjetas, tabla y línea del tiempo.</td>
            </tr>
            <tr>
              <th scope="row">JavaScript</th>
              <td>Añade comportamiento y validaciones.</td>
              <td>Comprobación de los campos del formulario.</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3">Las tres tecnologías trabajan juntas, pero tienen responsabilidades diferentes.</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>

    <section class="two-columns">
      <article class="panel">
        <h2>HTML: estructura</h2>
        <p>HTML utiliza etiquetas para indicar qué representa cada parte del contenido.</p>
        <p><code>&lt;h1&gt;Mi título&lt;/h1&gt;</code></p>
        <p>El ejemplo crea un título principal.</p>
      </article>
      <article class="panel">
        <h2>CSS: presentación</h2>
        <p>CSS define cómo se ve el contenido y permite crear efectos visuales sin usar imágenes para el menú.</p>
        <p><code>a:hover { color: #075985; }</code></p>
        <p>La regla cambia el color del enlace al pasar el cursor.</p>
      </article>
      <article class="panel">
        <h2>JavaScript: comportamiento</h2>
        <p>JavaScript puede revisar los datos escritos por una persona antes de aceptar el formulario.</p>
        <p>En este sitio se utiliza para mostrar mensajes de validación.</p>
      </article>
      <article class="panel">
        <h2>Enlaces</h2>
        <p>Un enlace relativo, como <code>historia.php</code>, lleva a otra página del mismo sitio. Un enlace absoluto incluye una dirección completa, como <a href="https://www.w3.org/" target="_blank" rel="noopener noreferrer">https://www.w3.org/</a>.</p>
      </article>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>Proyecto académico: Evolución de la Web.</p>
      <p><a href="index.php">Volver al inicio</a></p>
    </div>
  </footer>
</body>
</html>
