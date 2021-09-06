<?php
function ChargerClasse($classe)
{
    if (file_exists("../Model/" . $classe . ".Class.php"))
    {
        require "../Model/" . $classe . ".Class.php";
    }
    else
    {
        require "../Controller/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

DbConnect::init();
$v1 = VilleManager::findById(2);
echo $v1->toString();
// $v1->nomVille(15879);
// VilleManager::add($v1);
// //VilleManager::update($v1);
// $tableau = VilleManager::getList();
// foreach ($tableau as $uneVille)
// {
//     echo $uneVille->toString();
// // }
// VilleManager::delete(5);

