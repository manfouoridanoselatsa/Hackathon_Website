<?php
namespace Phppot;

class Message
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

    /**
     * to check if the Text already exists to avoid replica
     *
     * @param string $text
     * @return boolean
     */
    public function isTextMessageExists($text)
    {
        $query = 'SELECT * FROM message where text = ?';
        $paramType = 's';
        $paramValue = array(
            $text
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
 

    /**
     * to add the Messages / by a user
     *
     * @return string[] registration status message
     */
    public function registerMessage()
    {
        $isTextMessageExists = $this->isTextMessageExists($_POST["text"]);
        if (htmlspecialchars($_SESSION["admin"]) == 1) {
            $valid = 1;
        }
        else{
            $valid = 0;
        }
        $response = 0;
        if ($isTextMessageExists) {
            $response = array(
                "status" => "error",
                "message" => "text already exists."
            );
        } 
        else {
             
            $query = 'INSERT INTO message (text, id_user, valide) VALUES (?, ?, ?)';
            $paramType = 'ssi';
            $paramValue = array(
                htmlspecialchars($_POST["text"]),
                htmlspecialchars($_SESSION["id"]),
                $valid
            );
            $messageId = $this->ds->insert($query, $paramType, $paramValue);
            if (!empty($messageId)) {
                $response = array(
                    "status" => "success",
                    "message" => "Message enregistré"
                );
            }
        }
        return $response;
    }
    
    
    public function RandomGetMessage()
    {
        $query = 'SELECT * FROM message
        	  WHERE id NOT IN ( SELECT id_message FROM votes WHERE id_user = ?) AND valide = 1
        	 ORDER BY RAND() LIMIT 1 ;';
        $paramType = 's';
        $paramValue = array(
        
        $_SESSION["id"]
            
        );
        $messageRecord = $this->ds->select($query, $paramType, $paramValue);
        return $messageRecord;
    }
    
    public function updateVote($id)
    {
    
    	 $q = 'UPDATE message set vote_final = (CASE
                           WHEN haineux >= non_haineux AND haineux >= hesite
                             THEN "haineux"
                            WHEN non_haineux > haineux AND non_haineux > hesite
                             THEN "non_haineux"
                            WHEN hesite > non_haineux  AND hesite > haineux 
                             THEN "hesite"
                           END)
             WHERE id = ?';
         $paramType = 's';
    	 $paramValue = array(
                $id
                );
         $r = $this->ds->update($q, $paramType, $paramValue);
    }
    

    public function voteMessage($id)
    {
    
    	$response= array(
			"status" => "error",
			"message" => "vous avez déja voté pour ce message"
		);
		/*$response= array(
			"status" => "",
			"message" => ""
		);*/
		$vote = "";
		
		$query = 'SELECT * FROM votes WHERE id_message =  ? AND id_user = ?;';
        $paramType = 'ss';
        $paramValue = array(
			$id,
			$_SESSION["id"]
        );
        $voteRecord = $this->ds->select($query, $paramType, $paramValue);
		// donc ici bas on vérifi si oui ou non l'utilisateur a déja voté le messge
		if(empty($voteRecord)){// si $voteRecord est vide alors l'utilisateur n'a pas encore voté le message sinon il l'a déja fait
			if(htmlspecialchars($_POST["vote"]) == "1"){
				$vote = "haineux";
				$q = 'UPDATE message SET haineux = haineux + 1 , total_votes = total_votes + 1
					  WHERE id = ?;';
				$paramType = 's';
				
				$paramValue = array(
				   $id
				);
				$r = $this->ds->update($q, $paramType, $paramValue);
			}
			if(htmlspecialchars($_POST["vote"]) == "0"){
				$vote = "non_haineux";
				$q = 'UPDATE message SET non_haineux = non_haineux + 1 , total_votes = total_votes + 1
					  WHERE id = ?;';
				$paramType = 's';
				$paramValue = array(
				$id
				);
				$r = $this->ds->update($q, $paramType, $paramValue);
			}
			if(htmlspecialchars($_POST["vote"]) == "2"){
				$vote = "hesite";
				$q = 'UPDATE message SET hesite = hesite + 1 , total_votes = total_votes + 1
					  WHERE id = ?';
				$paramType = 's';
				$paramValue = array(
				$id
				);
				$r = $this->ds->update($q, $paramType, $paramValue);
			}
			$this->updateVote($id);
		
			// ici on fait l'insertion des votes par message dans la table des votes
			$query = 'INSERT INTO votes (id_user, id_message, vote, explication) VALUES (?, ?, ?, ?)';
			$paramType = 'ssss';
			$paramValue = array(
				$_SESSION["id"],
				$id,
				$vote, 
				htmlspecialchars($_POST["explication"])
			);
			$voteId = $this->ds->insert($query, $paramType, $paramValue);
			if (!empty($voteId) ) {
				$response = array(
					"status" => "success",
					"message" => "vote bien pris en compte"
				);
			}
		}
        return $response;
    }

    public function saveCSV()
    {
        $doublon = 0 ;
        $insert  = 0 ;

        if ($_FILES["file"]["error"] > 0) {
            
            $response= array(
                "status" => "error",
                "message" => "Return Code: " . $_FILES["file"]["error"] . "<br />"
            );

            return $response;

        }
        else 
        {
            $id = -1;
            $text = -1;
            $file = fopen($_FILES["file"]["tmp_name"] , "r");
            $extension = pathinfo( $_FILES["file"]["name"] , PATHINFO_EXTENSION);
            
            if ($extension != "csv") 
            {
                $response= array(
                    "status" => "error",
                    "message" => "fichier non pris en compte"
                );
                return $response;
            }

            $hearders = fgetcsv($file);

            foreach ($hearders as $k => $v) 
            {

                if ($v == "id") {
                    $id = $k ;
                }
                if($v == "text"){
                    $text = $k ;
                }
            }

            if ($id == -1 || $text == -1) {
                $response= array(
                    "status" => "error",
                    "message" => "fichier avec une structure non requise revoir le fichier"
                );
    
                return $response;
            }
            
            if (htmlspecialchars($_SESSION["admin"]) == 1) {
                $valid = 1;
            }
            else{
                $valid = 0;
            }
            
            while (($data = fgetcsv($file)) !== FALSE) 
            {
                $isTextMessageExists = $this->isTextMessageExists($data[$text]);
                if (!$isTextMessageExists) 
                {
                    $query = 'INSERT INTO message (text, id_user, id_source, source, valide) VALUES (?, ?, ?, ?, ?)';
                    $paramType = 'ssssi';
                    $paramValue = array(
                        $data[$text],
                        (int)htmlspecialchars($_SESSION["id"]),
                        $data[$id],
                        (int)htmlspecialchars($_POST["source"]),
                        $valid

                    );
                    $messageId = $this->ds->insert($query, $paramType, $paramValue);
                    if (empty($messageId)) {
                        $response = array(
                            "status" => "error",
                            "message" => "some thing went wrong",
                            
                        );
                    }
                    else
                    {
                        $insert = $insert + 1 ;
                    }
                } 
                else
                {
                    $doublon = $doublon + 1 ;
                }
                    
            }

            $response= array(
                "status" => "success",
                "message" => "fichier enregistrer avec success" . "</br>". $insert . " nouvelles insertions" . "</br>" . $doublon . " doublons",
                "doublon" => $doublon,
                "insert" => $insert
            );

            return $response;
            
        }

    }

	public function GetNextMessage($id){	
		$query = 'SELECT * FROM message
        	  WHERE id NOT IN ( SELECT id_message FROM votes WHERE id_user = ?) ORDER BY RAND() LIMIT 1 ;';
        $paramType = 's';
        $paramValue = array(
			$id
        );
        $messageRecord = $this->ds->select($query, $paramType, $paramValue);
		
        if (is_array($resultArray)) {
            $count = count($resultArray);
			
        }
		return $messageRecord;
	}
	
    public function GetAllMessages($id) {
        
        $query = 'SELECT DISTINCT message.id,username,text,valide FROM message,utilisateur WHERE message.id_user = utilisateur.id AND message.id NOT IN(SELECT votes.id_message FROM votes WHERE votes.id_user = ?)';
        $paramType = 's';
        $paramValue = array(
			$id
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);


    $result = '<table id="example" class="display" style="width:100%">
         <thead>
            
            <tr>
                <th style = "text-align : center;">Username</th>
                <th style = "text-align : center;">Text</th>
                <th style = "text-align : center;display:none;">validé</th>
				<th style = "text-align : center;">Voter</th>
            </tr> 
        </thead>';
        
    foreach ($resultArray as $data) {
        $result = $result . '<tr>
        <td style = "text-align : center;">'.
            $data['username'] .
        '</td>
        <td style = "" >'.
            $data['text'].
        '</td>';
        if ($data['valide'] == 1) {
            $checkbox = '<td style = "text-align : center;display:none;">'.
            "<input class='mycheckbox' type='checkbox' name='check{$data['id']}' id='{$data['id']}' value='{$data['id']}' checked>
            ". 
                '</td>';
        } else {
            $checkbox =  '<td style = "text-align : center;display:none;">'.
            "<input class='mycheckbox' type='checkbox' name='check{$data['id']}' id='{$data['id']}' value='{$data['id']}' >
            ". 
                '</td>';
        }

        $result = $result . $checkbox;
        
        $result = $result."<td style = 'text-align : center;font-weight:bold;'><a href = 'home2.php?id_message={$data['id']}'>Voter</a></td></tr>";
        
    }
    $result = $result . '</table>';


    return  $result ;

    }
	
	public function GetAllMessages_Adm() {
        
        $query = 'SELECT DISTINCT message.id,username,text,valide,vote_final FROM message,utilisateur WHERE message.id_user = utilisateur.id';
        $paramType = '';
        $paramValue = array(
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);


    $result = '<table id="example" class="display" style="width:100%">
         <thead>
            
            <tr>
                <th style = "text-align : center;">Username</th>
                <th style = "text-align : center;">Text</th>
                <th style = "text-align : center;display:none;">validé</th>
				<th style = "text-align : center;">Label</th>
            </tr> 
        </thead>';
        
    foreach ($resultArray as $data) {
        $result = $result . '<tr>
        <td style = "text-align : center;">'.
            $data['username'] .
        '</td>
        <td style = "" >'.
            $data['text'].
        '</td>';
        if ($data['valide'] == 1) {
            $checkbox = '<td style = "text-align : center;display:none;">'.
            "<input class='mycheckbox' type='checkbox' name='check{$data['id']}' id='{$data['id']}' value='{$data['id']}' checked>
            ". '</td>';
        } else {
            $checkbox =  '<td style = "text-align : center;display:none;">'.
            "<input class='mycheckbox' type='checkbox' name='check{$data['id']}' id='{$data['id']}' value='{$data['id']}' >
            ". 
                '</td>';
        }

        $result = $result . $checkbox;
        
        $result = $result."<td style = 'text-align : center;font-weight:bold;'>{$data['vote_final']}</td></tr>";
        
    }
    $result = $result . '</table>';


    return  $result ;

    }
 
 
 
 }
 
