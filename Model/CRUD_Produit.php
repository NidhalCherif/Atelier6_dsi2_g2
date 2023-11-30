<?php
require_once "produit.php";
require_once "../config/connexion.php";
class CRUD_Produit
{
    private $pdo;
    function __construct()
    {
        $obj = new connexion();
        $this->pdo = $obj->getConnexion();
    }
    function find($id)
    {
        $sql = "select * from produit where id=$id";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function delete($id)
    {
        $sql = "delete from produit where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function add(produit $p)
    {   //$libelle=$p->getLibelle();
        //$sql="insert into produit values(null,"
    }
    function update(produit $p)
    {
    }
}
