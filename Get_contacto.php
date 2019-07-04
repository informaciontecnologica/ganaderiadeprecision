<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//header("Content-Type: application/json");
require_once 'Clase_Mail.php';
//get the data
$json = file_get_contents("php://input");
//////
////////convert the string of data to an array
$data = json_decode($json);
$tipo = $data->tipo;

$mails = new Clase_Mail();

switch ($tipo) {
    case'EnviarMail':
        $nombre = $data->form->nombre;
        $mail=$data->form->email;
        $comentario=$data->form->comentario;
        $result = $mails->EnviarMail($nombre,$mail,$comentario);
        echo json_encode($result);
        exit();
        break;
}
