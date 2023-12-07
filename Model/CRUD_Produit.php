<?php
require_once "produit.php";
require_once "CRUD.php";

class CRUD_Produit extends CRUD
{
    protected $table = 'produit';

    function findAll_with_name_categorie()
    {
        $sql = "select p.id,p.libelle,p.prix,p.qte,p.promo,c.libelle
                from produit as p, categorie as c
                 where p.id_categorie=c.id ";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    function add(produit $p)
    {   //$libelle=$p->getLibelle();
        //$sql="insert into produit values(null,"
    }
    function update(produit $p)
    {
    }
}
