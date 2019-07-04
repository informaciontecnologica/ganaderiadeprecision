/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $('.main-carousel').flickity({
        // options
        cellAlign: 'right',
        contain: true,
        autoPlay: true,
        wrapAround: true
    });
});
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('googleMap'), {
        center: {lat: -26.178038, lng: -58.421481},
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        zoom: 14
    });
    var marker = new google.maps.Marker({
        position: {lat: -26.178038, lng: -58.421481},
        map: map,
        title: 'Ganado Cruza'
    });
    var marker1 = new google.maps.Marker({
        position: {lat: -26.177014, lng: -58.419335},
        map: map,
        title: 'Ganado Cruza'
    });
}
;

var app = angular.module('App', []);
app.controller('mails', function ($scope, $http, $filter) {

    $scope.form = {};

    $scope.formulariocontacto = function () {
        $http({
            url: 'Get_contacto.php',
            method: "POST",
            data: {tipo: 'EnviarMail', form: $scope.form}
        }).then(function (response) {
            if (response.data == "true") {

                  window_open();

            } else
            {
                $scope.grilla = false;
            }
            console.log(response);
        });
    };
});


    //Variable que almacena el método window.open()
    var miVentana;

    //La función window_open crea el pop-up o ventana emergente
    function window_open(){
     alert("Gracias por su Consulta!.\n Estaremos Comunicandonos.")
    }
    
    //La función window_close cerrara el pop-up o ventana emergente
    function window_close(){
      miVentana.close();
    }
    
    // Llamo a la función window_open en el evento click del botón con id = "botonWindowOpen"
   

    // Llamo a la función window_close en el evento click del botón con id = "botonWindowClose"
//    document.getElementById("botonWindowClose").onclick = function() {window_close()};









