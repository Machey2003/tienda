<?php
require_once "../controladores/ctrlClientes.php";
require_once "../modelos/mdlClientes.php";

class ajaxClientes{
    public $idClientes;

    public function cargarDatos(){
        $tabla = "cliente";
        $parametros = "cliente";
        $id = $this->idClientes;
        $datos = ControladorClientes ::ctrlCargarClientes($tabla, $parametros, $id);  
        echo json_encode($datos);
    }

}

if(isset($_POST['id_Clientes'])){
    $objAjaxCliente = new ajaxClientes();
    $objAjaxCliente->idClientes = $_POST['idClientes'];
    if($_POST['edit'] == 'edit'){
        $objAjaxCliente->cargarDatos();
    }else{
        #$objAjaxCliente->eliminarDatos();
    }
}