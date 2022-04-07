<?php
namespace App\Model;

use App\Database\DbPerson;

class Yot extends DbPerson {

    public function getAllYot(){

        $sql = "
        SELECT *  FROM yot
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addYot($yot) {
		$sql = "
			INSERT INTO yot (
				yot_full, 
				yot_sort
			) VALUES (
				:yot_full, 
				:yot_sort
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($yot);
		return $this->pdo->lastInsertId();
	}
	
    public function updateYot($yot) {
		$sql = "
			UPDATE yot SET
				yot_full = :yot_full, 
				yot_sort = :yot_sort
			WHERE yid = :yid
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($yot);
		return true;
	}
    
    public function getYotById($yid) {
		$sql = "
			SELECT
                yid,
				yot_full, 
				yot_sort
			FROM 
				yot
			WHERE 
                yid = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$yid]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}

?>