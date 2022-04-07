<?php
namespace App\Model;

use App\Database\Db;

class Actsub  extends Db {

    public function getAllActsub(){

        $sql = "
        SELECT  *  FROM act_section_sub
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addActsub($actsub) {
		$sql = "
			INSERT INTO act_section_sub (
                Ass_no,
				Ass_text,
				As_id
			) VALUES (
				:Ass_no, 
				:Ass_text,
				:As_id
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($actsub);
		return $this->pdo->lastInsertId();
	}
	
    public function updateActsub($actsub) {
		$sql = "
			UPDATE  act_section_sub SET
                Ass_no = :Ass_no, 
                Ass_text = :Ass_text, 
				As_id = :As_id
			WHERE Ass_id = :Ass_id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($actsub);
		return true;
	}
    
    public function getActsubById($Ass_id) {
		$sql = "
			SELECT
                Ass_id,
                Ass_no,
                Ass_text,
				As_id
			FROM 
                act_section_sub
			WHERE 
                Ass_id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$Ass_id]);
		$data = $stmt->fetchAll();
		return $data[0];
    }


}
?>