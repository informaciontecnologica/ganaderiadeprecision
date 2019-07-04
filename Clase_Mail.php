<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clase_Mail
 *
 * @author daniel
 */
class Clase_Mail {

    /**
     * Mail
     * @global string quien es el ente que envia
     * @author Jorge Daniel Castro <info@informaciontecn.com.ar>
     * @param string $mail correo a quien va ser enviado 
     * @param string $rtte correo del remitente 
     * @param string $sujeto tema o asunto del mensaje a enviar
     * @param string $mensaje contenido del  mensaje 
     * @return bool
     */
    //put your code here
    function EnviarMail($nombre, $mail, $comentario) {

        if ((!empty($nombre)) && (!empty($mail)) && (!empty($comentario))) {

            $sujeto = "Consulta de " . $nombre;

            $de = @trim(stripslashes($mail));
            $to = "info@ganaderiadeprecision.informaciontecn.com.ar";

            $subject = $sujeto;
            $mensaje = $comentario;
            $headers = array();
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-type: text/html; charset='utf-8'";
            $headers[] = "From: {$nombre} <{$de}>";
            $headers[] = "Bcc: Administrador <info@ganaderiadeprecision.informaciontecn.com.ar>;$to";
            $headers[] = "Reply-To: {$nombre} <{$de}>";
            $headers[] = "Subject: {$subject}";
            $headers[] = "X-Mailer: PHP/" . phpversion();

            $message = '<html><body>';
            $message .= '<div style="text-align:center ;  color:#007fff;"> Ganaderia de Precisión</div> '
                    . '<p style="text-align:center">Desarrollando La ganadería de precisión potencia la producción a partir de tareas de recopilación de datos y permite planificar procesos productivos ganaderos.</p>';
            $message .= '<hr style="color:#007fff;">'
                    . '<table rules="all" style="margin-left:auto; margin-right:auto; border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($nombre) . "</td></tr>";
            $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($mail) . "</td></tr>";
       
           
          
            $curText = htmlentities($comentario);
            if (($curText) != '') {
                $message .= "<tr><td><strong>Comentario :</strong> </td><td>" . $curText . "</td></tr>";
            }
             
            $message .= "</table>";
           
        
            $message .= "<span style='text-transform:uppercase;'>".$nombre.".</span> Gracias por Comunicarte con nosotros a la brevedad estaremos en contacto con Ud."
                    . "<div>";
             $message .= "<hr style='color:#007fff;'><br>
                        
                    <h3 >Contacto</h3>
                    <h4>Investigación y Desarrollo</h4>
                    <p ><img width='24px' height='24px' src='http://ganaderiadeprecision.informaciontecn.com.ar/imagenes/icons/baseline-gps_fixed-24px.svg'/>Dirección: Bresalovich 232 B° Bernardino Rivadavia. Formosa - Argentina</p>
                    <p ><img width='24px' height='24px' src='http://ganaderiadeprecision.informaciontecn.com.ar/imagenes/icons/baseline-phone-24px.svg'/>+54-3703-4855293</p>
                    <p><img width='24px' height='24px' src='http://ganaderiadeprecision.informaciontecn.com.ar/imagenes/icons/baseline-email-24px.svg'/> info@ganaderiadeprecision.informaciontecn.com.ar</p>

                </div>";
            $message .= "</body></html></br>";
            $result = mail($to, $subject, $message, implode("\r\n", $headers));

            return $result;
        }
    }

}
