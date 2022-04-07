<?php
namespace App\Model;

use App\Database\Db;

class Actsec extends Db {

    public function getAllAct_s(){

        $sql = "
        SELECT  *  FROM act_section
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addAct_s($act_s) {
		$sql = "
			INSERT INTO act_section (
				As_no, 
				As_text_title,
				As_text_end
			) VALUES (
				:As_no, 
				:As_text_title,
				:As_text_end
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($act_s);
		return $this->pdo->lastInsertId();
	}
	
    public function updateAct_s($act_s) {
		$sql = "
			UPDATE  act_section SET
                As_no = :As_no, 
				As_text_title = :As_text_title,
				As_text_end = :As_text_end
			WHERE As_id = :As_id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($act_s);
		return true;
	}
    
    public function getActsById($As_id) {
		$sql = "
			SELECT
                As_id,
                As_no,
				As_text_title, 
				As_text_end
			FROM 
				act_section
			WHERE 
                As_id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$As_id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

    public function getAllActsec() {
		$sql = "
			SELECT
				As_id,
				As_no
			FROM 
				act_section
			ORDER BY
				As_id
		";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

}
?>