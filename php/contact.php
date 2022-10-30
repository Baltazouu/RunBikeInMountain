<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/contact.css">
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
          <li><a id="actual" href="../html/contact.html">Contact</a></li>
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
        <a id="actual" href="../html/contact.html">Contact</a>
    </nav>
    </header>


    <div class="title_contact">



      <h1>Nous Contacter :</h1>
    


<?php

    $nom=$_POST['name'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];

    $msg=$_POST['msg'];
    $raison=$POST['reason'];


    

     if ($prenom ==NULL || $prenom ==""){
        echo"<h1>Erreur ! Veuillez Remplir Le Champ <b>Prénom<b> Obligatoires</h1></div>";
        
        echo'
        <div class="form_contact">
        <form action="../php/contact.php" method="post">

      <label for="name">Nom* :</label>
      <input type="text" name="name" id="name" required><br>

      <label for="prenom">Prénom* : </label>
      <input type="text" name="prenom" id="prenom" required><br>

      <label for="tel">Téléphone :</label>
      <input type="tel" name="tel" id="tel"><br>

      <label for="mail">Adresse Mail* :</label>
      <input type="email" name="mail" id="mail"><br>

      <label for="reason">Raison Du Contact : </label>
      <select name="reason" size="1">
      <option>Besoin D\'aide
      <option>Devenir Certifié
      <option>Autre
      </select><br>

      <label for="horaire">Jour et Horaire :</label>
      <input name="horaire" id="horaire" type="datetime-local"><br>
     
      <div>
        
          <legend>S\'agit t\'il de votre premier contact avec nous ?</legend>
      
          <div>
            <input type="radio" id="OuiFirst" name="OuiFirst" value="OuiFirst">
            <label for="OuiFirst">Oui</label>
          </div>
      
      </div>
      <br>

      <label for="msg">Message* :</label><br>
      <textarea id="msg" name="msg" placeholder="Ecrivez La Raison de Votre Contact." rows="5" cols="33" required>
      </textarea><br>

      <input type="reset" value="Effacer"/>
      <input type="submit" value="Envoyer"/>

      
      <p>Les Champs Contenant des étoiles* sont obligatoires !</p>
    </form>
    </div>
        
        
        ';//fin de l'echo
        }

        else if ($mail ==NULL|| $mail ==""){
            echo"<h1>Erreur ! Veuillez Remplir Le Champ <b>mail<b> Obligatoires</h1></div>";
            
            echo'
            <div class="form_contact">
            <form action="../php/contact.php" method="post">

            <label for="name">Nom* :</label>
            <input type="text" name="name" id="name" required><br>
      
            <label for="prenom">Prénom* : </label>
            <input type="text" name="prenom" id="prenom" required><br>
      
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="tel"><br>
      
            <label for="mail">Adresse Mail* :</label>
            <input type="email" name="mail" id="mail"><br>
      
            <label for="reason">Raison Du Contact : </label>
            <select name="reason" size="1">
            <option>Besoin D\'aide
            <option>Devenir Certifié
            <option>Autre
            </select><br>
      
            <label for="horaire">Jour et Horaire :</label>
            <input name="horaire" id="horaire" type="datetime-local"><br>
           
            <div>
              
                <legend>S\'agit t\'il de votre premier contact avec nous ?</legend>
            
                <div>
                  <input type="radio" id="OuiFirst" name="OuiFirst" value="OuiFirst">
                  <label for="OuiFirst">Oui</label>
                </div>
            
            </div>
            <br>
      
            <label for="msg">Message* :</label><br>
            <textarea id="msg" name="msg" placeholder="Ecrivez La Raison de Votre Contact." rows="5" cols="33" required>
            </textarea><br>
      
            <input type="reset" value="Effacer"/>
            <input type="submit" value="Envoyer"/>
      
            
            <p>Les Champs Contenant des étoiles* sont obligatoires !</p>
          </form>
          </div>';//fin de l'echo
            }


            else if ($nom ==NULL || $nom==""){
                echo"<h1>Erreur ! Veuillez Remplir Le Champ <b>nom<b> Obligatoires</h1></div>";
                
                echo'

                <div class="form_contact">
                <div class="form_contact">
            
                
                <form action="../php/contact.php" method="post">
            
                  <label for="name">Nom* :</label>
                  <input type="text" name="name" id="name" required><br>
            
                  <label for="prenom">Prénom* : </label>
                  <input type="text" name="prenom" id="prenom" required><br>
            
                  <label for="tel">Téléphone :</label>
                  <input type="tel" name="tel" id="tel"><br>
            
                  <label for="mail">Adresse Mail* :</label>
                  <input type="email" name="mail" id="mail"><br>
            
                  <label for="reason">Raison Du Contact : </label>
                  <select name="reason" size="1">
                  <option>Besoin D\'aide
                  <option>Devenir Certifié
                  <option>Autre
                  </select><br>
            
                  <label for="horaire">Jour et Horaire :</label>
                  <input name="horaire" id="horaire" type="datetime-local"><br>
            
                  <legend>S\'agit t-il de votre premier contact ?</legend>
                 
                  <div>
                    
                      <legend>S\'agit t\'il de votre premier contact avec nous ?</legend>
                  
                      <div>
                        <input type="radio" id="OuiFirst" name="OuiFirst" value="OuiFirst">
                        <label for="OuiFirst">Oui</label>
                      </div>
                  
                  
                  
                </div>
                  <br>
            
                  <label for="message">Message* :</label><br>
                  <textarea id="message" name="message " rows="5" cols="33" required>
                  </textarea><br>
            
                  <input type="reset" value="Effacer"/>
                  <input type="submit" value="Envoyer"/>
            
                  
                  <p>Les Champs Contenant des étoiles* sont obligatoires !</p>
                </form>
                
              </div>
                
                
                ';//fin de l'echo
                } 
        
        else if ($msg==NULL || $msg==""){
            echo"<h1>Erreur ! Veuillez Remplir Le Champ <b>Message<b> Obligatoires</h1></div>";
               

        echo'
        <div class="form_contact">
            <form action="../php/contact.php" method="post">

            <label for="name">Nom* :</label>
            <input type="text" name="name" id="name" required><br>
      
            <label for="prenom">Prénom* : </label>
            <input type="text" name="prenom" id="prenom" required><br>
      
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="tel"><br>
      
            <label for="mail">Adresse Mail* :</label>
            <input type="email" name="mail" id="mail"><br>
      
            <label for="reason">Raison Du Contact : </label>
            <select name="reason" size="1">
            <option>Besoin D\'aide
            <option>Devenir Certifié
            <option>Autre
            </select><br>
      
            <label for="horaire">Jour et Horaire :</label>
            <input name="horaire" id="horaire" type="datetime-local"><br>
           
            <div>
              
                <legend>S\'agit t\'il de votre premier contact avec nous ?</legend>
            
                <div>
                  <input type="radio" id="OuiFirst" name="OuiFirst" value="OuiFirst">
                  <label for="OuiFirst">Oui</label>
                </div>
            
            </div>
            <br>
      
            <label for="msg">Message* :</label><br>
            <textarea id="msg" name="msg" placeholder="Ecrivez La Raison de Votre Contact." rows="5" cols="33" required>
            </textarea><br>
      
            <input type="reset" value="Effacer"/>
            <input type="submit" value="Envoyer"/>
      
            
            <p>Les Champs Contenant des étoiles* sont obligatoires !</p>
          </form> 
          </div>';//fin de l'echo
        }
    else{

        echo('</div><h2 id="rep">Réponse Bien Transmise !<br>Nous Vous Recontacterons par mail !</h2>');

        echo("<div class=\"reponse\"><h3>Récapitulatif :</h3>");

        echo'<p> Nom : ',$nom,'<br>Prénom : ',$prenom,'</p>';
        if ($raison!=NULL)
        {
            echo 'Raison : ',$raison;
        }
        
        echo'<p>Adresse : ',$mail,'<br>Votre Message : ',$msg,"</p></div>";
        
   }//fin else
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
            Dudonné Baptiste BUT 1 2022-2023.<br>
            Vous Souhaitez nous Contacter ? C'est <a href="../html/contact.html">ici.</a>
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
    


