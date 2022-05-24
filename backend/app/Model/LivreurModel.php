<?php

namespace App\Model;

class LivreurModel
{
    public static function checkLivreur($data)
    {
        $email = $data;
        try {
            $db = DatabaseModel::connect()->prepare('SELECT email , password FROM livreur WHERE email = :email');
            $db->execute(array(":email" => $email));
            return $db->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
}