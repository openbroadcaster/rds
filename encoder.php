
<?php








/*  $commands is a string coming from the form that need to be split 
  before sending to the encoder (using python) 
*/



$datetime  = date("F j, Y, g:i a") ; 
  
$user_id = "userTEST";  // ?????   < THIS IS THE USER IN THE PHP SESSION,PLEASE CHANGE IT

$sessionname = $_POST["sessionname"];

$commands = $_POST["commands"];




$query = "INSERT INTO rdsmodule (datetime , user_id , sessionname , commands) 
         VALUES ('".$datetime."', '". $user_id ."', '".$sessionname ."', '". $commands."')";


		 
		 
		 
		 
	class storingRDS extends OBFModule {
	
	    public function storeRDS()	{
		$this->db->query($query);

		return true;

	   }
	
	
	}	 
		 
		 







// the NEXT CODE WAS JUST FOR TESTING in my LOCAL SERVER ... please feel free to delete



defined('DB_SERVER')? NULL : define("DB_SERVER", "Localhost");
defined('DB_USER')? NULL : define("DB_USER", "root");
defined('DB_PASS')? NULL : define("DB_PASS", "");
defined('DB_NAME')? NULL : define("DB_NAME", "rdsmodule");




class storeCommands  {



      private $connection;

 

      public function open_connection(){
       
          $this->connection =  new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
       
          if ($this->connection->connect_error) {

                die('Connect Error (' . $this->connection->connect_errno . ') '. $this->connection->connect_error);
             
               } 

        
        }



      public function close_connection(){
          
           if(isset($this->connection)){
              
              mysqli_close($this->connection);
              unset($this->connection);
              
           }
          
       }





     public function store($sql=""){
             
          
           if( $this->db->query($sql)){
                echo "successful ! ";

           } else { echo   "An error acurred, please try gain later." ;}



           /*
            if( $this->connection->query($sql)) {

                echo "successful ! ";

            } else {

               echo   "An error acurred, please try gain later." ;

            }
             */
             
             
      }




}







// echo  $commands;









 
 ?>