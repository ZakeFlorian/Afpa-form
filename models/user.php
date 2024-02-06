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

            $sql = "INSERT INTO `Utilisateur` (`lastname_utilisateur`,`firstname_utilisateur`,`nickname_utilisateur`,`birthdate_utilisateur`,`email_utilisateur`,`password_utilisateur`, `ID_Entreprise`, `Image_utilisateur`) VALUES(:lastname_utilisateur, :firstname_utilisateur, :nickname_utilisateur, :birthdate_utilisateur, :email_utilisateur, :password_utilisateur, :ID_Entreprise, :Image_utilisateur)";

            $query = $db->prepare($sql);


            $query->bindValue(':lastname_utilisateur', htmlspecialchars($name), PDO::PARAM_STR);
            $query->bindValue(':firstname_utilisateur', htmlspecialchars($prenom), PDO::PARAM_STR);
            $query->bindValue(':nickname_utilisateur', htmlspecialchars($pseudo), PDO::PARAM_STR);
            $query->bindValue(':birthdate_utilisateur', $birthdate, PDO::PARAM_STR);
            $query->bindValue(':email_utilisateur', $mail, PDO::PARAM_STR);
            $query->bindValue(':password_utilisateur', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $query->bindValue(':ID_Entreprise', $enterprise, PDO::PARAM_INT);
            $query->bindValue(':Image_utilisateur', 'default.png', PDO::PARAM_STR);
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
            $sql = "SELECT * FROM `utilisateur` NATURAL JOIN `entreprise` WHERE `email_utilisateur` = :mail";

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

    public static function ModifyUser(string $name, string $prenom, string $pseudo, string $birthdate, string $mail, string $description_utilisateur, string $Image_utilisateur)
    {

        try {
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

            $sql = "UPDATE `utilisateur` SET `firstname_utilisateur` = :firstname_utilisateur, `lastname_utilisateur` = :lastname_utilisateur, `nickname_utilisateur` = :nickname_utilisateur, `birthdate_utilisateur` = :birthdate_utilisateur, `email_utilisateur` = :email_utilisateur, `description_utilisateur` = :description_utilisateur, `Image_utilisateur` = :Image_utilisateur WHERE `email_utilisateur` = :email_utilisateur";

            $query = $db->prepare($sql);
            
            $query->bindValue(':firstname_utilisateur', htmlspecialchars($prenom), PDO::PARAM_STR);
            $query->bindValue(':lastname_utilisateur', htmlspecialchars($name), PDO::PARAM_STR);
            $query->bindValue(':nickname_utilisateur', htmlspecialchars($pseudo), PDO::PARAM_STR);
            $query->bindValue(':birthdate_utilisateur', $birthdate, PDO::PARAM_STR);
            $query->bindValue(':email_utilisateur', $mail, PDO::PARAM_STR);
            $query->bindValue(':description_utilisateur', htmlspecialchars($description_utilisateur), PDO::PARAM_STR);
            $query->bindValue(':Image_utilisateur', $Image_utilisateur, PDO::PARAM_STR);


            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

    }

    public static function DeleteUser(int $idUser)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname='. DBNAME, DBUSER, DBPASS);

            $sql = "DELETE FROM `utilisateur` WHERE `id_utilisateur` = :id_utilisateur";

            $query = $db->prepare($sql);
            $query->bindValue(":id_utilisateur", $idUser, PDO::PARAM_STR);

            $query->execute();

    }catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}
}