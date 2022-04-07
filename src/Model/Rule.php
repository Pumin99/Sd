<?php
namespace App\Model;

use App\Database\Db;

class Rule extends Db {

    public function getAllRule(){

        $sql = "
        SELECT *  FROM rule
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addRule($rule) {
		$sql = "
			INSERT INTO rule (
				R_issue, 
				R_issue_note,
				R_title,
				R_year,
				R_foreword,
				R_datesign,
				R_sign,
				R_volume,
				R_chapter,
				R_date
			) VALUES (
				:R_issue, 
				:R_issue_note,
				:R_title,
				:R_year,
				:R_foreword,
				:R_datesign,
				:R_sign,
				:R_volume,
				:R_chapter,
				:R_date
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($rule);
		return $this->pdo->lastInsertId();
	}
	
    public function updateRule($rule) {
		$sql = "
			UPDATE rule SET
            R_issue = :R_issue, 
            R_issue_note = :R_issue_note,
            R_title = :R_title,
            R_year = :R_year,
            R_foreword = :R_foreword,
            R_datesign = :R_datesign,
            R_sign = :R_sign,
            R_volume  = :R_volume,
            R_chapter = :R_chapter,
            R_date = :R_date
			WHERE R_id = :R_id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($rule);
		return true;
	}
    
    public function getRuleById($R_id) {
		$sql = "
			SELECT
				R_id,
                R_issue, 
                R_issue_note,
                R_title,
                R_year,
                R_foreword,
                R_datesign,
                R_sign,
                R_volume,
                R_chapter,
                R_date
			FROM 
				rule
			WHERE 
                R_id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$R_id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}

?>