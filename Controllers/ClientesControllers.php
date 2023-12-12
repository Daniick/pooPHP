<?php

require_once  "../models/clientes.php";

class ClientesController
{

    public function index()
    {
        $q = new clientes();
        $h = $q->all();
        return $h;
    }
}
