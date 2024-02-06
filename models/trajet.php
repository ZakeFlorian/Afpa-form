<?php
class Trajet
{
    /**
     * @param int $id_trajet ID du trajet
     * @param string $date Date du trajet
     * @param string $distance Distance du trajet
     * @param string $traveltime Durée du trajet
     * @param string $transport ID du mode de transport
     *
     * @return void 
     
    */
    public static function create(string $date, string $distance, string $traveltime, string $transport, string $id_user,)
    {

        try {
            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

            $sql = "INSERT INTO `trajet` (`date_trajet`,`distance_trajet`,`traveltime_trajet`,`id_modedetransport`,`id_utilisateur`) VALUES(:date_trajet, :distance_trajet, :traveltime_trajet, :id_modedetransport, :id_utilisateur)";

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
    public static function getAllTrajets(int $id_utilisateur)
    {

        try {

            $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);


            $sql = "SELECT *, DATE_FORMAT(`date_trajet`, '%d/%m/%Y') AS date_FR FROM `trajet` NATURAL JOIN `modedetransport` WHERE `id_utilisateur` = :id_utilisateur";


            $query = $db->prepare($sql);

            $query->bindValue(':id_utilisateur', $id_utilisateur, PDO::PARAM_STR);


            $query->execute();


            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
   /**
 * Methode permettant de supprimer un trajet
 * @param int $id_trajet est l'id du trajet
 */
public static function deleteTrajet(int $id_trajet) {
    try {
        $db = new PDO(DBNAME, DBUSER, DBPASS);

        $sql = "DELETE FROM `trajet` WHERE `id_trajet` = :id_trajet";
        $query = $db->prepare($sql);
        $query->bindValue(':id_trajet', $id_trajet, PDO::PARAM_INT);
        $query->execute();
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
        die();
    }
}
}