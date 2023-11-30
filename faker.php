<?php
require_once "config/connexion.php";
for ($i = 1; $i <= 100; $i++) {
    $libelle = "Produit n°$i";
    $prix = random_int(100, 3000);
    $qte = random_int(1, 100);
    $desc = "Lorem ipsum 
        dolor sit, amet consectetur adipisicing elit. 
        Consequatur fugiat id, officiis illo quaerat magnam sit 
        unde obcaecati explicabo. Aliquam exercitationem molestias
        asperiores ipsum illum assumenda soluta molestiae deleniti fugiat.";
    $image = "https://picsum.photos/300/?random=$i";
    $promo = random_int(0, 1);
    $sql = "insert into produit values(null,'$libelle',$prix,$qte,'$desc',
            '$image',$promo)";
    $res = $connexion->exec($sql);
}
header("location:produits.php");
