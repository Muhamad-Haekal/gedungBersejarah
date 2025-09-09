<?php
include_once __DIR__ . "/../model/gedung.model.php";

class gedungController extends GedungModel
{
    public function getProducts()
    {
        return $this->findAll();
    }
}
?>