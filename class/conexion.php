<?php
Class Conexion {

   //*****************************************************************
   // FUNCION CONECTAR CON LOS DATOS DE CONEXION
   //*****************************************************************

   public function conectar(){
      //$mysqli = new mysqli('localhost','root','','db_clinica',3306);
$mysqli = new mysqli('localhost','root','','inventario');
      if ($mysqli->connect_errno)
         header('Location: /');

      $mysqli->set_charset('utf8');

      return $mysqli;
   }

   //*****************************************************************
   // FUNCION RUTA PARA TRAER IMAGENES, CSS, JS
   //*****************************************************************

   public static function ruta() {
     // return "http://localhost/descargar-historial-medico-con-fpdf-php/";
   }

   public function comillas_inteligentes($valor) {
      // Retirar las barras
      if (get_magic_quotes_gpc()) {
         $valor = stripslashes($valor);
      }
      // Colocar comillas si no es entero
      if (!is_numeric($valor)) {
         $valor = "'" . $this->mysqli->real_escape_string($valor) . "'";
      }
      return $valor;
   }

}