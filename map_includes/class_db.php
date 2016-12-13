<?
	class db {
		var $db_host;
		var $db_username;
		var $db_password;

		var $db;
		var $the_selected_db;

		var $last_insert_ID;

		// global variables
		var $database_core	= "hevga";

		function db($db_host, $db_username, $db_password){
			$this->db_host = $db_host;
			$this->db_username = $db_username;
			$this->db_password = $db_password;
		}

		function select_the_db($db_ref_name){
			if($this->the_selected_db!=$db_ref_name){
				$this->the_selected_db = $db_ref_name;

				try {
					$connection_string="mysql:host=".$this->db_host.";dbname=".$db_ref_name;  //print($connection_string); die();
					$this->db = new PDO($connection_string, $this->db_username, $this->db_password);
					$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				} catch (PDOException $e) {
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
			}
		}

		function doSQL($theDatabase, $theSQL, $theValueArray){
			$statement="complete";

			$this->select_the_db($theDatabase);
			try {
				$statement=$this->db->prepare($theSQL);
				$statement->execute($theValueArray);
				$this->last_insert_ID=$this->db->lastInsertId();
			} catch (PDOException $e) {
				print("DB ERROR: "); print( $e->getMessage() . "<br/>");
				die();
			}

			return $statement;
		}
	}
?>