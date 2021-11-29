<?php
    function launch_BDD(){
        if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
            $racine="..";
        }
        
        session_start();
        if (isset($_POST['utilisateur']) && isset($_POST['password'])){

            // connexion a la base de donnée
            $reponse = 0;
            $bd_host = "localhost";
            $bd_nom = "ap2eme";
            $bd_username = "root";
            $bd_password = "";

            try{
                $conn = new PDO("mysql:host=$bd_host;dbname=$bd_nom", $bd_username, $bd_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            return $conn;
            } catch (PDOException $e) {
            print_r("Erreur de connexion PDO ");
            die();
            }

            // instruction pour eviter toute injection SQL et XSS
            /*$username = mysqli_real_escape_string($bd_host,htmlspecialchars($_POST['utilisateur']));
            $password = mysqli_real_escape_string($bd,htmlspecialchars($_POST['password']));
            

            //récuperation des POST
            /*$username = "";
            if (isset($_POST['utilisateur'])){
                $username = $_POST['utilisateur'];
            }
            $password = "";
            if (isset($_POST['password'])){
                $password = $_POST['password'];
            }

            /*$requete ="SELECT count(*) FROM utilisateur
            WHERE nomUtilisateur =.$username and mdpUtilisateur='".$password."'";
            // vérification du login et mdp avec requete SQL

            if($username !== "" && $password !== ""){
                $exec_requete = mysqli_query($bd,$requete);
            }
                else if($username == $_POST['utilisateur'] && $password == $_POST['password']){
                    echo "vous etes connecter";
            }
            else{
                echo "mot de passe ou utilisateur erronée";
            }
                /*$count = $reponse ['count(*)'];
                
                if($count!=0){ // nom d'utilisateur ou mot de passe correctes
                    $_SESSION['utilisateur'] = $username;
                    echo "$username";
                    header("Location: google.com");
                }
                else{
                    echo"<p>Mot de passe ou utilisateur incorrect</p>";
                }
                */
            }
        }
    
?>