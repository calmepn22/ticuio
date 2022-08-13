<?php
require_once 'conexion.php';
class Consulta extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }

    //*****************************************************************
    // LISTAMOS DE CONSULTAS
    //*****************************************************************

   // public function consultasPaciente($id){
      //  $consulta = sprintf("SELECT
        //    consultas_medicas.fecha_consulta,
          //  consultas_medicas.consultorio,
         //   consultas_medicas.diagnostico,
         //   medicos.nombre_medico
         //   FROM
         //   consultas_medicas
         //   INNER JOIN medicos ON consultas_medicas.id_medico = medicos.medico_id
        //    WHERE
        //    consultas_medicas.id_paciente = %s", 
         //   parent::comillas_inteligentes($id)
      //  );

       // $resultado = $this->mysqli->query($consulta);

       // while( $fila = $resultado->fetch_assoc() ){
      //      $data[] = $fila;
       // }
//
      //  if (isset($data)) {
      ///      return $data; 
      //  } 
   // }
}	