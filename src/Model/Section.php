<?php
namespace App\Model;

use App\Database\Db;

class Section extends Db {

    public function getAllSec(){

        $sql = "
        SELECT *  FROM 	section
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addSec($sec) {
		$sql = "
			INSERT INTO section (
				S_title
			) VALUES (
				:S_title
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($sec);
		return $this->pdo->lastInsertId();
	}
	
    public function updateSec($sec) {
		$sql = "
			UPDATE section SET
                S_title = :S_title
			WHERE S_id = :S_id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($sec);
		return true;
	}
    
    public function getSecById($S_id) {
		$sql = "
            SELECT
                S_id,
                S_title
			FROM 
                section
			WHERE 
                S_id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$S_id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}

?>