<?php
namespace App\Model;

use App\Database\DbPerson;

class Position extends DbPerson {

    public function getAllPos(){

        $sql = "
		SELECT *  FROM positions
		WHERE pos_status='on'
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addPos($pos) {
		$sql = "
			INSERT INTO positions (
				position, 
				pos_no,
				pos_rate,
				pos_spec,
				pos_num,
				pos_type,
				pos_status
			) VALUES (
				:position, 
				:pos_no,
				:pos_rate,
				:pos_spec,
				:pos_num,
				:pos_type,
				:pos_status
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($pos);
		return $this->pdo->lastInsertId();
	}
	
    public function updatePos($pos) {
		$sql = "
			UPDATE positions SET
				position = :position, 
				pos_no = :pos_no,
				pos_rate = :pos_rate,
				pos_spec = :pos_spec,
				pos_num = :pos_num,
				pos_type = :pos_type,
				pos_status = :pos_status
			WHERE posid  = :posid
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($pos);
		return true;
	}
    
    public function getPosById($posid) {
		$sql = "
			SELECT
				posid,
				position,
				pos_no,
				pos_rate,
				pos_spec,
				pos_num,
				pos_type,
				pos_status
			FROM 
				positions
			WHERE 
				posid = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$posid]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}