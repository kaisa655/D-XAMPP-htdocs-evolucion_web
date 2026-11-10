<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Formulario de práctica con validaciones básicas en JavaScript.">
  <title>Formulario | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/validaciones.js" defer></script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <p class="eyebrow">Proyecto académico</p>
      <h1>Formulario de contacto</h1>
      <p class="subtitle">Ejemplo de controles HTML y validación básica con JavaScript.</p>
    </div>
  </header>

  <nav class="main-nav" aria-label="Navegación principal">
    <div class="container nav-links">
      <a href="index.php">Inicio</a>
      <a href="historia.php">Historia</a>
      <a href="tecnologias.php">Tecnologías</a>
      <a href="linea-tiempo.php">Línea del tiempo</a>
      <a href="contacto.php" aria-current="page">Formulario</a>
    </div>
  </nav>

  <?php if (isset($_GET["estado"]) && $_GET["estado"] === "ok"): ?>
    <p class="mensaje-exito">
        ¡Tu mensaje se guardó correctamente!
    </p>
<?php endif; ?>

  <main class="container content">
    <section class="panel form-panel">
      <h2>Comparte tu opinión</h2>
      <p>Completa el formulario. Los datos se enviarán al servidor local mediante PHP y se guardarán en la base de datos.</p>
<?php if (isset($_GET["estado"]) && $_GET["estado"] === "ok"): ?>
  <p class="form-message success" role="status">Tu mensaje se guardó correctamente en la base de datos.</p>
<?php elseif (isset($_GET["estado"]) && $_GET["estado"] === "error"): ?>
  <p class="form-message error" role="alert">No fue posible guardar el mensaje. Revisa los datos e inténtalo de nuevo.</p>
<?php endif; ?>
      <form id="contact-form" action="guardar.php" method="POST" novalidate>
        <div class="form-field">
          <label for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" autocomplete="name" required minlength="2">
          <small class="field-error" id="nombre-error"></small>
        </div>

        <div class="form-field">
          <label for="correo">Correo electrónico *</label>
          <input type="email" id="correo" name="correo" autocomplete="email" required>
          <small class="field-error" id="correo-error"></small>
        </div>


        <div class="form-field">
          <label for="fecha">Fecha de visita *</label>
          <input type="date" id="fecha" name="fecha" required>
          <small class="field-error" id="fecha-error"></small>
        </div>

        <div class="form-field">
          <label for="tema">Tema que más te interesa *</label>
          <select id="tema" name="tema" required>
            <option value="">Selecciona una opción</option>
            <option value="historia">Historia de la Web</option>
            <option value="tecnologias">HTML, CSS y JavaScript</option>
            <option value="diseno">Diseño web</option>
            <option value="futuro">El futuro de la Web</option>
          </select>
          <small class="field-error" id="tema-error"></small>
        </div>

        <fieldset class="form-field">
          <legend>¿Recomendarías este sitio? *</legend>
          <label class="choice"><input type="radio" name="recomendacion" value="si" required> Sí</label>
          <label class="choice"><input type="radio" name="recomendacion" value="no"> No</label>
          <small class="field-error" id="recomendacion-error"></small>
        </fieldset>

        <div class="form-field">
          <label for="comentarios">Comentarios (opcional)</label>
          <textarea id="comentarios" name="comentarios" rows="4" maxlength="500" placeholder="Escribe un comentario breve..."></textarea>
        </div>

        <label class="choice consent">
          <input type="checkbox" id="acepto" name="acepto" required>
          Confirmo que los datos son de ejemplo. *
        </label>
        <small class="field-error" id="acepto-error"></small>

        <div class="form-actions">
          <button type="submit">Enviar mensaje</button>
          <button type="reset" class="button-secondary">Limpiar</button>
        </div>
        <p id="form-message" class="form-message" role="status" aria-live="polite"></p>
        <p class="form-note">* Campo obligatorio. La información se almacena en la base de datos local.</p>
      </form>
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
