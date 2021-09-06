<?php
class VilleManager
{
    public static function add(Ville $obj)
    {
        var_dump($obj);
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Ville (idVille,nomVille,numeroDepartementVille,CPVille,DateMAJ) VALUES (:idVille,:nomVille,:numeroDepartementVille,:CPVille,:DateMAJ)");
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":nomVille", $obj->getNomVille());
        $q->bindValue(":numeroDepartementVille", $obj->getNumeroDepartementVille());
        $q->bindValue(":CPVille", $obj->getCPVille());
        $q->bindValue(":DateMAJ", $obj->getDateMAJ());
        $q->execute();
    }

    public static function update(Ville $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Ville SET  nomVille=:nomVille, numeroDepartementVille=:numeroDepartementVille, CPVille=:CPVille, DateMAJ=:DateMAJ WHERE idVille=:idVille");
        $q->bindValue(":idVille", $obj->getIdVille());
        $q->bindValue(":nomVille", $obj->getNomVille());
        $q->bindValue(":numeroDepartementVille", $obj->getNumeroDepartementVille());
        $q->bindValue(":CPVille", $obj->getCPVille());
        $q->bindValue(":DateMAJ", $obj->getDateMAJ());
        $q->execute();
    }

    public static function delete(Ville $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Ville WHERE idVille=" . $obj->getIdVille());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Ville WHERE idVille=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Ville($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $villes = [];
        $q = $db->query("SELECT * FROM Ville");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $villes[] = new Ville($donnees);
            }
        }
        return $villes;
    }

}
