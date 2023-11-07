<?php
//header('Content-Type: application/json');
include("conexion_db.php");

function get_info($con)
{
    $sql = "SELECT * FROM `info_site`;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}
function get_banner($con)
{
    $sql = "SELECT * FROM `slider_copy`";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $bannerData = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $bannerData[] = $row;
        }

        return $bannerData;
    } else {
        return false; // Opcional: puedes manejar errores de consulta de alguna manera
    }
}

function get_questions($con){
    $sql = "SELECT * FROM `questions`;";
    $result = mysqli_query($con, $sql);    
    if ($result) {
        $bannerData = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $bannerData[] = $row;
        }
        return $bannerData;
    } else {
        return false; // Opcional: puedes manejar errores de consulta de alguna manera
    }    
}

function get_image_site($con, $val){
    $sql = "SELECT * FROM `images_site` WHERE `sector` = '$val';";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

?>