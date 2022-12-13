<?php
class UsuarioControlador {
    public function index() {
        require_once 'vista/usuario/index.php';
    }

    public function orden()
    {
        require_once 'vista/usuario/orden.php';
    }
}
?>