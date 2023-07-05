<?php
// Ruta al directorio donde se guardarán los videos
$videosDirectory = __DIR__ . '/videos/';

// Verificar si el directorio de videos no existe
if (!is_dir($videosDirectory)) {
  // Intentar crear el directorio de videos
  if (!mkdir($videosDirectory)) {
    die('Error: No se pudo crear el directorio de videos.');
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Video Storage</title>
</head>
<body>
  <h1>Directorio de Videos</h1>

  <p>El directorio de videos se ha creado correctamente.</p>
</body>
</html>