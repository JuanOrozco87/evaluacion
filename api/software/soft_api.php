<?php
include "../../app/software/software_service_craete.php";
include '../../config/config.php';
$objAPI = new softwareAPI();

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        $objAPI->save();
        break;

    default:
        echo json_encode(array("data" => null, "error" => "3", "msg" => $errorResponse[3]));
        break;
}
