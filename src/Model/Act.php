<?php
namespace App\Model;

use App\Database\Db;

class Act extends Db {

    public function getAllAct(){

        $sql = "
        SELECT *  FROM Act
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addAct($act) {
		$sql = "
			INSERT INTO act (
				A_title, 
				A_foreword,
				A_receive,
				A_position,
				A_comment
			) VALUES (
				:A_title, 
				:A_foreword,
				:A_receive,
				:A_position,
				:A_comment
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($act);
		return $this->pdo->lastInsertId();
	}
	
    public function updateAct($act) {
		$sql = "
			UPDATE act SET
                A_title = :A_title, 
				A_foreword = :A_foreword,
				A_receive = :A_receive,
				A_position = :A_position,
				A_comment = :A_comment
			WHERE A_id = :A_id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($act);
		return true;
	}
    
    public function getActById($A_id) {
		$sql = "
			SELECT
                A_id,
				A_title, 
				A_foreword, 
				A_receive, 
				A_position, 
				A_comment
			FROM 
				act
			WHERE 
                A_id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$A_id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}

?>