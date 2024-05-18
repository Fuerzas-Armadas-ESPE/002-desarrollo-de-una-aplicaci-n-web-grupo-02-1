<?php
require_once '../config/bdconection.php';
if (isset($_POST['submit_promotion'])) {
    $code = $_POST['code'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    //elemnts of image
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $folder = '../../images/promotions'; 
    $route = $folder.'/'.$image;
    $route_bs = 'images/promotions/'.$image;
    move_uploaded_file($image_tmp, $folder.'/'.$image); 
    //insert data
    $stmt = $conn->prepare("INSERT INTO promotions (p_code, start_date, end_date, description, image_route) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $code, $start_date, $end_date, $description, $route_bs);
    
    //execute
    if ($stmt->execute()) {
        echo "<script>alert('Promocion agregada correctamente');</script>";
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Error al agregar la promocion');</script>";
    }

    //close
    $stmt->close();
    $conn->close();    

}
?>