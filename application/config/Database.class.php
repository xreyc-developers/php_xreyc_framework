<?php 
class Database {

    private $SERVER = "mysql:host=localhost;dbname=lnhs_database;charset=utf8";
    private $USER = "root";
    private $PASS = "12345";
    private $OPTIONS = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    protected $connection;

    public function __contruct()
    {
        if(!isset($this->connection)){
            try{
                $this->connection = new PDO($this->SERVER, $this->USER, $this->PASS, $this->OPTIONS);
                return $this->connection;
            }
            catch(PDOException $e){
                echo "Connection Failed. Error: ". $e->getMessage();
            }
        }
    }

    public function closeConnection(){
        $this->connection = null;
    }

} 
?>



