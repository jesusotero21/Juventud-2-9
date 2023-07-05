<?php
if ($_FILES["video"]["error"] == UPLOAD_ERR_OK) {
    $temp_name = $_FILES["video"]["tmp_name"];
    $video_name = $_FILES["video"]["name"];
    $upload_dir = "videos/"; // Directorio de destino para almacenar los videos
    
    // Mueve el archivo temporal al directorio de destino
    move_uploaded_file($temp_name, $upload_dir . $video_name);
    echo "¡El video se ha subido exitosamente!";
} else {
    echo "Ha ocurrido un error al subir el video.";
}
?>