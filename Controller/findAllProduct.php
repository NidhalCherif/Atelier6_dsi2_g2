<?php
require_once "../Model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$LesProduits = $crud->findAll();
include "../View/findAllProduct.php";
