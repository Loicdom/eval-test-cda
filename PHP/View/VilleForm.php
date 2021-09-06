<?php
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $client = VilleManager::findById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=VilleAction&m=' . $mode . '" method = "POST">
            <div> 
                <label for="nomVille">Nom : </label>
                <input type="text" id="nomVille" name="nomVille" placeholder="Nom de la ville"  required autofocus  ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getNomVille() . '"';
                    }
echo '          >
            </div>';
if ($mode != "ajout")
{
    echo '  <input type="text" id="idVille" name="idVille" hidden value = "' . $client->getIdVille() . '">';
}
echo '      <div>  
                <label for="numeroDepartementVille">N° Département : </label>
                <input type="number" id="numeroDepartementVille" name="numeroDepartementVille" placeholder="Numéro du département" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getNumeroDepartementVille() . '"';
                    }
echo '          >
            </div>
            <div> 
                <label for="CPVille">Code postal : </label>
                <input type="number" id="CPVille" name="CPVille" placeholder="Code postal" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getCPVille() . '"';
                    }
echo '          >
            </div>
            <div> 
                <label for="DateMAJ">Date : </label>
                <input type="date" id="DateMAJ" name="DateMAJ" placeholder="Ville du Client" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getDateMAJ() . '"';
                    }
echo '          >
            </div> ';
echo '      <div class="centrer">
                <button class="bouton" id="submit" type="submit ">';
                    switch ($mode)
                    {
                        case "ajout":echo 'Ajouter';
                            break;
                        case "modif":echo 'Modifier';
                            break;
                        case "suppr":echo 'Supprimer';
                            break;
                    }
echo '          </button>
            </div>
        </form>
    </div>';
