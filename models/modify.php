<?php
// public static function updateTrajet(string $date, string $distance, string $travel, int $id_modetransport, int $id_utilisateur)
//     {

//         try {

//             $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);

//             $sql = "UPDATE `trajet` SET colonne_1 = 'valeur 1', colonne_2 = 'valeur 2', colonne_3 = 'valeur 3' WHERE condition";
    
//             $query = $db->prepare($sql);
    

//             $query->bindValue(':date_trajet', $date, PDO::PARAM_STR);
//             $query->bindValue(':distance_trajet', $distance, PDO::PARAM_STR);
//             $query->bindValue(':traveltime_trajet', $travel, PDO::PARAM_STR);
//             $query->bindValue(':id_modedetransport', $id_modetransport, PDO::PARAM_INT);
//             $query->bindValue(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
    
//             $query->execute();
//         } catch (PDOException $e) {
//             echo $e->getMessage();
//             die();
//         }
    
//     }