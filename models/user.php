<?php

class Utilisateur
{
    /**
     * @param string $nom Nom de l'utilisateur
     * @param string $prenom Prénom de l'utilisateur
     * @param string $pseudo Pseudo de l'utilisateur
     * @param string $birthdate Date de naissance de l'utilisateur
     * @param string $mail Adresse mail de l'utilsateur
     * @param string $password Mot de passe de l'utilisateur
     * @param string $enterprise ID de l'entreprise de l'utilisateur
     *
     * @return void 
     
    */
    public static function create(string $name, string $prenom, string $pseudo, string $birthdate, string $mail, string $password, string $enterprise)
    {

        try {
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

            $sql = "INSERT INTO `Utilisateur` (`lastname_utilisateur`,`firstname_utilisateur`,`nickname_utilisateur`,`birthdate_utilisateur`,`email_utilisateur`,`password_utilisateur`, `ID_Entreprise`) VALUES(:lastname_utilisateur, :firstname_utilisateur, :nickname_utilisateur, :birthdate_utilisateur, :email_utilisateur, :password_utilisateur, :ID_Entreprise)";

            $query = $db->prepare($sql);


            $query->bindValue(':lastname_utilisateur', htmlspecialchars($name), PDO::PARAM_STR);
            $query->bindValue(':firstname_utilisateur', htmlspecialchars($prenom), PDO::PARAM_STR);
            $query->bindValue(':nickname_utilisateur', htmlspecialchars($pseudo), PDO::PARAM_STR);
            $query->bindValue(':birthdate_utilisateur', $birthdate, PDO::PARAM_STR);
            $query->bindValue(':email_utilisateur', $mail, PDO::PARAM_STR);
            $query->bindValue(':password_utilisateur', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $query->bindValue(':ID_Entreprise', $enterprise, PDO::PARAM_INT);

            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

    }
    /**
     *
     * 
     * @param string $mail Adresse mail de l'utilisateur
     * 
     * @return bool
     */
    public static function checkMailExists(string $mail): bool
    {
        
        try {
          
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

       
            $sql = "SELECT * FROM `utilisateur` WHERE `email_utilisateur` = :email_utilisateur";

        
            $query = $db->prepare($sql);

           
            $query->bindValue(':email_utilisateur', $mail, PDO::PARAM_STR);

          
            $query->execute();

       
            $result = $query->fetch(PDO::FETCH_ASSOC);

           
            if (empty($result)) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }

    /**
     * 
     * 
     * @param string $email 
     * 
     * @return array 
     */
    public static function getInfos(string $email): array
    {
        try {
            // Création d'un objet $db selon la classe PDO
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `utilisateur` WHERE `email_utilisateur` = :mail";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':mail', $email, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // on retourne le résultat
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
                }
    }

}