<?php
class Trajet
{
    /**
     * @param string $date Date du trajet
     * @param string $distance Distance du trajet
     * @param string $traveltime Durée du trajet
     * @param string $transport ID du mode de transport
     *
     * @return void 
     
    */
    public static function create(string $date, string $distance, string $traveltime, string $transport, string $id_user)
    {

        try {
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

            $sql = "INSERT INTO `Trajet` (`date_trajet`,`distance_trajet`,`traveltime_trajet`,`id_modedetransport`,`id_utilisateur`) VALUES(:date_trajet, :distance_trajet, :traveltime_trajet, :id_modedetransport, :id_utilisateur)";

            $query = $db->prepare($sql);

            
            $query->bindValue(':date_trajet', ($date), PDO::PARAM_STR);
            $query->bindValue(':distance_trajet', ($distance), PDO::PARAM_INT);
            $query->bindValue(':traveltime_trajet', ($traveltime), PDO::PARAM_STR);
            $query->bindValue(':id_modedetransport', ($transport), PDO::PARAM_STR);
            $query->bindValue(':id_utilisateur', ($id_user), PDO::PARAM_INT);

            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

    }
    /**
     * 
     * 
     * @param string $id_user 
     * 
     * @return array 
     */
    public static function getAllTrajets(string $id_user): array
    {
        try {
            // Création d'un objet $db selon la classe PDO
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `trajet` WHERE `id_utilisateur` = :id_utilisateur";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':id_utilisateur', $id_user, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            // on retourne le résultat
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
                }
    }
}