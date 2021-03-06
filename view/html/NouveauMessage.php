<?php
 
    session_start();
    
    include("../../model/fonctionsBdd.php");
    $action = "../../controller/sendMessage.php"; 

    
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../pictures/logoSH.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contactForm.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="../../view/js/messagerie.js"></script>
    
    <title>Messages</title>
</head>


<body class="messagerie">
<header>

    <a href="espaceFamille.php"><img id="logoheader" src="../pictures/logoSH.png" alt="Logo Senior Healthcare"></a>
    <h1> Envoyer un message </h1>
    <div class="block_center"> </div>

</header>
<main>


    <nav class="menu">
        <ul>
            <li class="menu_bilan"> <a class="bouton_classique" href="../../index.php"> Bilans </a></li>
            <li class="faq"> <a class="bouton_classique" href="faq.php"> F.A.Q </a></li>
            <li class="message"><a href="../view/html/messagerie.php"> Consulter mes messages</a> </li>
            <li class="compte"><a class="bouton_classique" href="../../controller/Parametre.php?id=0"> Mon Compte </a>
                <ul class="subcompte">
                    <li> <a href="../../controller/Parametre.php?id=1">Mot de passe </a> </li>
                    <li> <a href="../../controller/Parametre.php?id=2">Adresse mail</a> </li>
                    <li> <a href="../../controller/Parametre.php?id=3">Contact </a> </li>
                    <li> <a href="../../controller/Parametre.php?id=4">Déconnexion</a> </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="Form">

        <form action ="<?=$action?>" method="post">
            <label class="formItem">Nom :<input  type="text" name="Nom" /></label>
            <label class="formItem">Prénom :<input  type="text"  name="Prenom" /></label>
            <label class="formItem">Destinataire :
                <select id="subject" name="Destinataire">
                    <?php
                    $table = getAllStaffUser();
                
                    while ($row = $table->fetch()) {
                        echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
                    }

                    ?>
                </select></label>
            <label class="formItem">Message :
                <textarea name="message" placeholder="Écrivez votre message ..." colspan= all style="height:70px" style="width:100px"></textarea></label>
         <div class="center"> <label class="formItem"><input type="submit" value="Envoyer" class="bouton_submit"></button></label></div>
        </form>

    </div>
</main>

<footer>
    <?php
    include("footer.php");
    ?>
</footer>


</body>
</html>