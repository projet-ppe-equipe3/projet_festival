<?php
use modele\dao\EtablissementDAO;
use modele\metier\Etablissement;
use modele\dao\Bdd;
require_once __DIR__ . '/../../includes/autoload.php';
Bdd::connecter();

include("includes/_debut.inc.php");

// SUPPRIMER L'ÉTABLISSEMENT SÉLECTIONNÉ

$id = $_REQUEST['id'];  // Non obligatoire mais plus propre
$unEtab = EtablissementDAO::getOneById($id);
/* @var $unEtab Etablissement  */
$nom = $unEtab->getNom();
echo "
<br><center><span style=\"color:white;\">Voulez-vous vraiment supprimer l'établissement $nom ?</span>
<h3><br>
<a href='cGestionEtablissements.php?action=validerSupprimerEtab&id=$id' class=\"btn btn-primary\">Oui</a>
&nbsp; &nbsp; &nbsp; &nbsp;
<a href='cGestionEtablissements.php?' class=\"btn btn-danger\">Non</a></h3>
</center>";

include("includes/_fin.inc.php");

