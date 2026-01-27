<?php
namespace repositories;

use models\Reservation;
use helper\Database;
use PDO;

class ReservationRepo extends BaseRepo {
    public string $table = "reservation";


    public function createReservation(Reservation $reservation) {
        $sql = "INSERT INTO reservation (lawyer_id, hussier_id, client_id, day, horaire, is_online, status) 
                VALUES (:lawyer_id, :hussier_id, :client_id, :day, :horaire, :is_online, :status)";
        
        $stmt = $this->conn->prepare($sql);
        
        return $stmt->execute([
            ':lawyer_id' => $reservation->getLawyerId(),
            ':hussier_id' => $reservation->getHussierId(),
            ':client_id' => $reservation->getClientId(),
            ':day' => $reservation->getDay(),
            ':horaire' => $reservation->getHoraire(),
            ':is_online' => $reservation->isOnline() ? 1 : 0,
            ':status' => $reservation->getStatus()
        ]);
    }

    public function findByClient($clientId) {

        $sql = "SELECT r.*, 
                       l.name as lawyer_name, 
                       h.name as hussier_name 
                FROM reservation r
                LEFT JOIN lawyer l ON r.lawyer_id = l.id
                LEFT JOIN hussier h ON r.hussier_id = h.id
                WHERE r.client_id = :client_id
                ORDER BY r.day DESC, r.horaire DESC";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':client_id' => $clientId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByProfessional($proId, $type = 'lawyer') {
        $column = $type === 'lawyer' ? 'lawyer_id' : 'hussier_id';
        
        $sql = "SELECT r.*, c.name as client_name, c.phone as client_phone
                FROM reservation r
                JOIN client c ON r.client_id = c.id
                WHERE r.$column = :pro_id
                ORDER BY r.day DESC, r.horaire ASC";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':pro_id' => $proId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateStatus($id, $status) {
        $sql = "UPDATE reservation SET status = :status WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':status' => $status, ':id' => $id]);
    }
}
