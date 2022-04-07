<?php
namespace App\Model;

use App\Database\DbPerson;

class Person extends DbPerson {

    // public function getAllPersons($filters=[]) {

	// 	$where = "";

	// 	if($filters['search']) {
	// 		$where .= " AND ( 
	// 			persons.firstname LIKE :search 
	// 			OR persons.nickname LIKE :search
	// 		) ";
	// 		$filters['search'] = "%{$filters['search']}%";
	// 	}else{
	// 		unset($filters['search']);
	// 	}

	// 	if($filters['gender_id']) {
	// 		$where .= " AND persons.gender_id = :gender_id ";
	// 	}else{
	// 		unset($filters['gender_id']);
	// 	}

	// 	if($filters['club_id']) {
	// 		$where .= " AND persons.club_id = :club_id ";
	// 	}else{
	// 		unset($filters['club_id']);
	// 	}

	// 	$sql = "
	// 		SELECT
	// 			persons.id,
	// 			persons.firstname,
	// 			persons.nickname,
	// 			persons.dob,
	// 			persons.salary,
	// 			persons.avatar,
	// 			refs.title AS gender,
	// 			clubs.title AS club
	// 		FROM 
	// 			persons
	// 			LEFT JOIN refs ON persons.gender_id = refs.id
	// 			LEFT JOIN clubs ON persons.club_id = clubs.id
	// 		WHERE
	// 			persons.id > 0
	// 			{$where}
	// 		ORDER BY
	// 			persons.gender_id,
	// 			persons.dob
	// 	";
	// 	$stmt = $this->pdo->prepare($sql);
	// 	$stmt->execute($filters);
	// 	$data = $stmt->fetchAll();
	// 	return $data;
	// }

	public function getAllPersons() {

		$sql = "
			SELECT
				persons.pid,
				persons.sid,
				persons.idcard,
				persons.yid,
				persons.name,
				persons.surname,
				persons.birthday,
				persons.tel,
				persons.img,
				persons.tid,
				yot.yot_sort
			FROM 
				persons 
				LEFT JOIN yot ON persons.yid = yot.yid
		";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}

	public function addPerson($person) {
		$sql = "
			INSERT INTO persons (
				sid, 
				idcard, 
				yid, 
				name, 
				surname, 
				birthday, 
				tel, 
				img, 
				tid
			) VALUES (
				:sid, 
				:idcard, 
				:yid, 
				:name, 
				:surname, 
				:birthday, 
				:tel, 
				:img, 
				:tid
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return $this->pdo->lastInsertId();
	}

	public function updatePerson($person) {
		$sql = "
			UPDATE persons SET
				sid = :sid, 
				idcard = :idcard, 
				yid = :yid,
				name = :name, 
				surname = :surname, 
				birthday = :birthday,  
				tel = :tel,
				img = :img,
				tid = :tid
			WHERE pid = :pid
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return true;
	}

	// public function deletePerson($id) {
	// 	$sql = "
	// 		DELETE FROM persons WHERE id = ?
	// 	";
	// 	$stmt = $this->pdo->prepare($sql);
	// 	$stmt->execute([$id]);
	// 	return true;
	// }

	public function getPersonById($pid) {
		$sql = "
			SELECT
				persons.pid,
				persons.sid,
				persons.idcard,
				persons.yid,
				persons.name,
				persons.surname,
				persons.birthday,
				persons.tel,
				persons.img,
				persons.tid
			FROM 
				persons
			WHERE 
				persons.pid = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$pid]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}