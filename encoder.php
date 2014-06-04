
<?php








//  commands is a string coming from the form that need to be split 
// when is retrieved and it is sent to the encoder (that will be using python) 




$datetime  = date("F j, Y, g:i a")  //      $_POST["datetime"];
  
//$user_id = $_POST["user_id"];

//$sessionname = $_POST["sessionname"];

$commands = $_POST["commands"];








//$query = "INSERT INTO rdsmodule (datetime , user_id , sessionname , commands) 
 //         VALUES ('".$datetime."', '". $user_id ."', '".$sessionname ."', '". $commands."')";















defined('DB_SERVER')? NULL : define("DB_SERVER", "Localhost");
defined('DB_USER')? NULL : define("DB_USER", "root");
defined('DB_PASS')? NULL : define("DB_PASS", "");
defined('DB_NAME')? NULL : define("DB_NAME", "rdsmodule");


  






// extends OBFModule

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







//$st = new storeCommands();


// to use this uncomment the commented code in store method in storeCommands class 
// $st->open_connection();

//$st->store($query);


echo  $commands;









 
 ?>