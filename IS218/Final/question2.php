<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/
	use \pages\page as page;
   require_once'autoloader.php';
   
// questions #2
   class question2 extends page {
		function get(){
				$host = "sql.njit.edu";
				$dbname = "nav3";
				$user ="nav3";
				$pass = "YD9Aowq9";
				try{
				$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			$STH = $DBH->query("SELECT DISTINCT schools.Name, finances.L2011 
			FROM schools INNER JOIN finances ON finances.UID = schools.UID ORDER BY finances.L2011 DESC ");
				
			$this->content .= "<h1>Colleges with the largest total liabilities</h1><br>";
		
				$this->content .= "<table border = 2>";
				$this->content .= "
					<tr>
						<th>College Name</th>
						<th>Total Liabilities</th>
					</tr>
				";
				
				while($rows = $STH->fetch()){
					$this->content .= "<tr>";
					$this->content .= "<td>" . $rows['Name'] . "</td>";
					$this->content .= "<td>" . $rows['L2011'] . "</td>";
					$this->content .= "</tr>";
				}
				
				$this->content .= "</table>";
				
				$DBH = null;
				}
				catch(PDOException $e){
					echo $e->getMessage();
				}
				
			}
		}

?>