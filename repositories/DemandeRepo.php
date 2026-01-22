<?php
namespace repositories;
use models\Avocat;
use models\Hussier;
use helper\Database;
use PDO;

class DemandeRepo{
    private PDO $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function createAvocat(Avocat $avocat){
        $sql = 'INSERT INTO "demande" (name, email, phone, years_of_experiences, hourly_rate, specialization, consultation_online, city_id, document, status, user_id)
            VALUES(:name, :email, :phone, years_of_experiences, hourly_rate, specialization, consultation_online, :city_id, document, status, :user_id) RETURNING id';
        $stmt = $this->conn->prepare($sql);
        $result = $stmt->execute([
            ':user_id' => $avocat->getUserId(),
            ':name' => $avocat->getName(),
            ':phone' => $avocat->getPhone(),
            ':city_id' => $avocat->getCityId()
        ]);
    }
}

?>