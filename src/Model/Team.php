<?php
namespace App\Model;

use App\Database\DbPerson;

class Team extends DbPerson {

    public function getAllTeam(){

        $sql = "
        SELECT *  FROM team
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
	}
	
    public function addTeam($team) {
		$sql = "
			INSERT INTO team (
				team_name, 
				team_sort
			) VALUES (
				:team_name, 
				:team_sort
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($team);
		return $this->pdo->lastInsertId();
	}
	
    public function updateTeam($team) {
		$sql = "
			UPDATE team SET
                team_name = :team_name, 
				team_sort = :team_sort
			WHERE tid = :tid
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($team);
		return true;
	}
    
    public function getTeamById($tid) {
		$sql = "
			SELECT
                tid,
				team_name, 
				team_sort
			FROM 
				team
			WHERE 
                tid = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$tid]);
		$data = $stmt->fetchAll();
		return $data[0];
	}

}

?>