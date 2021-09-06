<?php
$villes = VilleManager::getList();
?>
<div class="ligne">
    <div class="bloc titre">Nom</div>
    <div class="bloc titre">Numéro département</div>
    <div class="bloc titre">Code postal</div>
    <div class="bloc titre">Date</div>
    <div class="bloc titre"></div>
    
    
</div>
<?php
foreach ($villes as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenu"><?php echo $elt->getNomVille() ?></div>
        <div class="bloc contenu"><?php echo $elt->getNumeroDepartementVille() ?></div>
        <div class="bloc contenu"><?php echo $elt->getCPVille() ?></div>
        <div class="bloc contenu"><?php echo $elt->getDateMAJ() ?></div>
        <a href="index.php?action=VilleForm&m=modif&id=<?php echo $elt->getIdVille() ?>">
            <div class="bouton">Modifier</div>
        </a>
        <?php 
            
         echo    '<a href="index.php?action=VilleForm&m=suppr&id='.$elt->getIdVille() .'">
                            <div class="bouton">Supprimer</div>
                        </a>';
        ?>
    </div>
<?php } ?>
</div>
<a href="index.php?action=VilleForm&m=ajout">
    <div class="boutonAdd"> Ajouter une ville</div>
</a>