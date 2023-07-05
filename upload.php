<?php
// Ruta al directorio de videos
$videosDirectory = __DIR__ . '/videos/';

// Verificar si se envió un archivo
if (isset($_FILES['videoFile'])) {
  $file = $_FILES['videoFile'];

  // Obtener el nombre del archivo y la ruta temporal
  $fileName = $file['name'];
  $tmpFilePath = $file['tmp_name'];

  // Generar una ruta única para el archivo en el directorio de videos
  $filePath = $videosDirectory . uniqid() . '_' . $fileName;

  // Mover el archivo temporal al directorio de videos
  if (move_uploaded_file($tmpFilePath, $filePath)) {
    // La carga fue exitosa, puedes realizar acciones adicionales si es necesario
    // Por ejemplo, puedes almacenar el nombre del archivo y la URL en una base de datos

    // Enviar una respuesta de éxito al cliente
    http_response_code(200);
    echo "Video uploaded successfully.";
  } else {
    // Ocurrió un error al mover el archivo
    http_response_code(500);
    echo "Error uploading video.";
  }
} else {
  // No se envió ningún archivo
  http_response_code(400);
  echo "No video file sent.";
}
?>