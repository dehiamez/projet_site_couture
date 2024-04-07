<?php
session_start();

if(isset($_POST['temoigne']) && isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
    $ajout_temoignage = "<div id='temoignages'> <cite id='temoin'> \"".$_POST['commentaire']."\"</cite> </div>" ;
    echo $ajout_temoignage;
};
?>