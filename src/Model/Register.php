<?php
namespace App\Model;

use App\Database\Db;

class Register extends Db {

    public function getAllRegister($filters=[]){

		$where="";
		if($filters['idcard']){
			$where .=" AND idcard = :idcard";
		}else{
			unset($filters['idcard']);
		}

		if($filters['birth_y']){
			$where .=" AND birth_y = :birth_y";
		}else{
			unset($filters['birth_y']);
		}

		if($filters['district']){
			$where .=" AND district = :district";
		}else{
			unset($filters['district']);
		}

		if($filters['search']){
			$where .=" AND (name like :search OR surname like :search )";
			$filters['search'] = "%{$filters['search']}%";
		}else{
			unset($filters['search']);
		}

        $sql = "
        	SELECT
				*
			FROM
				register
			WHERE
				id  > 0
				{$where}
			ORDER BY
				id desc
        ";
        $stmt = $this->pdo->prepare($sql);
		$stmt->execute($filters);
        $data = $stmt->fetchAll();
        return $data;
	}
	
	public function getRegisterById($id) {
		$sql = "
			SELECT
                *
			FROM 
				register
			WHERE 
                id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}
	
    // public function addRegister($act) {
	// 	$sql = "
	// 		INSERT INTO act (
	// 			A_title, 
	// 			A_foreword,
	// 			A_receive,
	// 			A_position,
	// 			A_comment
	// 		) VALUES (
	// 			:A_title, 
	// 			:A_foreword,
	// 			:A_receive,
	// 			:A_position,
	// 			:A_comment
	// 		)
	// 	";
	// 	$stmt = $this->pdo->prepare($sql);
	// 	$stmt->execute($act);
	// 	return $this->pdo->lastInsertId();
	// }
	
    // public function updateAct($act) {
	// 	$sql = "
	// 		UPDATE act SET
    //             A_title = :A_title, 
	// 			A_foreword = :A_foreword,
	// 			A_receive = :A_receive,
	// 			A_position = :A_position,
	// 			A_comment = :A_comment
	// 		WHERE A_id = :A_id
	// 	";
	// 	$stmt = $this->pdo->prepare($sql);
	// 	$stmt->execute($act);
	// 	return true;
	// }
    
    // public function getActById($A_id) {
	// 	$sql = "
	// 		SELECT
    //             A_id,
	// 			A_title, 
	// 			A_foreword, 
	// 			A_receive, 
	// 			A_position, 
	// 			A_comment
	// 		FROM 
	// 			act
	// 		WHERE 
    //             A_id = ?
	// 	";
	// 	$stmt = $this->pdo->prepare($sql);
	// 	$stmt->execute([$A_id]);
	// 	$data = $stmt->fetchAll();
	// 	return $data[0];
	// }

}

?>