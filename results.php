<!-- Michael Johnson
     04/24/2026
     Project: Searching a Databse with PHP and MySQL
     results.php
 -->

<!DOCTYPE html> 
<html lang="en"> 
	<head>
		<title>Student Lookup</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<h1>Results</h1> 
       <div class='message'>
		   
        <p>
		<?php
			class DataHandler { 
				// Properties  
				private $db_conn; 
				
				// Methods
				public function __construct() { 
					//Create the database connection
					$this->db_conn = MySQLi_connect(
		   				"localhost", //Server Name
		   				"taus_web_user", //Username
		   				"NYzDxh1p.9]NKabm", //Password
		   				"taus_data" //Database Name
					);  
					//Test the connection
					if (MySQLi_connect_errno()) {
						die("Connection failed: " . MySQLi_connect_error());
					}
				}
				
				public function get_email($s_email) 
				{
						//Stored procedure to run
		   				$query = "CALL sp_getStudentByEmail('".$s_email."')";
		   				
						//Stored procedure preparation
		   				$exec_query = MySQLi_query($this->db_conn, $query);
		   	
		   				//Fetching result from database
		   				$q_results = MySQLi_fetch_array($exec_query);
		   				
						return $q_results;
				}
				
			}
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") { 
			
					$s_email = $_POST["s_email"];
					$s_email = trim($s_email);
					$s_email = filter_var($s_email, FILTER_SANITIZE_EMAIL);
					 
		            $dh = new DataHandler();
				    $results = $dh->get_email($s_email);
				
				    
				    if($results != null)
					{
				    	
						
						
						echo $results['first_name']." ".$results['last_name']." ".$results['email'];
				    }
				    else
				    {
				    	echo "<p>No Records Found</p>";
				    }
				    
				}
			
			
			
			?>
		</p>
		</div>
		<a href="index.php">Return to Email Search</a>
	</body>
</html>