<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/inscription.css">
    <title>Inscription</title>
    <link rel="icon" href="../images/boussole.png">
    
</head>
<body>

<header>
    <nav>
        <ul class="navbar" id="navbar">
            <li><a href="../index.html">Accueil</a></li>
          <li><a href="traces.html">Nos Parcours</a></li>
          <li><a href="images.html">Galerie</a></li>
          <li><a href="tutos.html">Tutoriels</a></li>
          <li><a href="https://www.visugpx.com/editgpx/">Tracer !</a></li>
          <li><a id="actual" href="#">S'inscrire</a></li>
          <a class="close" href="#"><img src="../images/open.png" id="close"></a>
        </ul>
        <a class="open" href="#navbar"><img src="../images/open.png" id="open"></a>
        <a href="../index.html"><img src="../images/boussole.png" id="boussole"></a>
              
      
      </nav>

    <nav class="navbar2">

        <a href="../index.html"><img src="../images/boussole.png" alt="Img Not Found :("></a>
        <a href="traces.html">Nos Parcours</a>
        <a href="images.html">Galerie</a>
        <a href="tutos.html">Tutoriels</a>
        <a href="https://www.visugpx.com/editgpx/" target="blank_">Tracer!</a>
        <a id=actual href="inscription.html">S'inscrire !</a>
        
    </nav>

    </header>

    <div class="response">
    <?php
        $titre = '<h3>Bienvenue Parmi Nous, ';
        echo($titre);
        echo($_POST['prenom']);
        echo(' !</h3>');
        $mail = $_POST['mail'];
        echo("<p>Un Mail De Confirmation D'inscription à été envoyé à l'adresse : <i>$mail</i></p>");
        echo("</div>");




    ?>
    
    <div class="bf_footer">
        <h3>#Go Ride Now<br>
            #Va Rouler</h3>
    </div>
    <footer>
        <div class="content_4">

            <section class="bottom_left">
                <a href="../index.html"><img src="../images/boussole.png"></a>
            
            <p>
                Run & Bike In Mountain @2022 All Rights Reserved.<br>
                See Here Our <a href="#">Terms And Conditions.</a><br>
                Dudonné Baptiste BUT 1 2022-2023.
            </p>


            </section>

            <section class="bottom_right">

                <p>Follow Us On :</p>

                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">intragram</a>
                
            </section>

           
        </div>
    </footer>

</body>
</html>




