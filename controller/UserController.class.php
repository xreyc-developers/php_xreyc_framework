<?php


class UserController extends Controller
{

    /* IMPORTING CONTROLLER RESOURCES */
    
    public function __construct()
    {
        parent::__construct();
    }
    

    /* READ */

    public function get($query)
    {        
        try {
            $result = $this->connection->query($query);

            $rows = array();

            foreach ($result as $row) {
                $rows[] = $row;
            }
            return $rows;
        }
        catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
        
    
    /* CREATE */

    public function insert($data) 
    {        
        try {
            
            $data = json_decode($data);

            $query = "INSERT INTO accounts SET 
                username=:username, 
                password=:password, 
                email=:email, 
                name=:name";

            $stmt = $this->connection->prepare($query);

            // SANITIZE DATA
            $data->username=htmlspecialchars(strip_tags($data->username));
            $data->password=htmlspecialchars(strip_tags($data->password));
            $data->email=htmlspecialchars(strip_tags($data->email));
            $data->name=htmlspecialchars(strip_tags($data->name));
        
            // BIND DATA
            $stmt->bindParam(":username", $data->username);
            $stmt->bindParam(":password", $data->password);
            $stmt->bindParam(":email", $data->email);
            $stmt->bindParam(":name", $data->name);

            $stmt->execute();

            $this->closeConnection();
            echo "New record created successfully";

        }
        catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }


    /* UPDATE */

    public function update($query, $data) 
    {        
        try {
            $stm = $this->connection->prepare($query);
            $stm->execute($data);
            echo "Record updated successfully";
        }
        catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
    

    /* DELETE */

    public function delete($id, $table) 
    {
        $query = "DELETE FROM $table WHERE id = $id" ;
        $result  = $this->connection->exec($query);
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            echo "Record has been successfully deleted";
        }    
    }

}
?>