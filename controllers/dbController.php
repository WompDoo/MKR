<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "mkr";
    private $conn;
    private $dbMenuItems="product";
    public $last_query;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    /* UUEST NÄITEST */

    // Confirm MySQL Query
    private function confirm_query($result){
        if(!$result){
            $output = "Database query failed: " . mysqli_error($this->conn) . "<br />";
            $output .= "Last MySQL Query: " . $this->last_query;
            die($output);
        }
    }


    public function fetch_assoc($result){
        return mysqli_fetch_assoc($result);
    }

    // Close MySQL Connection
    public function close_conn(){
        if(isset($this->conn)){
            $this->conn->close();
            unset($this->conn);
        }
    }

    public function find_by_query($query=""){
        $result = $this->runQuery($query);
        $arrayWithData = array();
        while($row = $this->fetch_assoc($result)){
            $arrayWithData[]=$row;
        }
        $this->close_conn();
        return $arrayWithData;
    }

    // Run MySQL Query
    public function query($sql){
        $this->last_query = $sql;
        $result = mysqli_query($this->conn, $sql);
        $this->confirm_query($result);
        return $result;
    }

    /* Run query, find results, save results to $object_array, return $object_array */
    public function findMenuItem(){
        global $database;
        $result = $database->query("SELECT DISTINCT product_category FROM ".$this->dbMenuItems." WHERE qty_stock > 0");
        $object_array = array();
        /* Save results to object array */
        while($row = $database->fetch_assoc($result)){
            $object_array[]=$row;
        }
        /* Return object array*/
        return $object_array;
        /* Close MySQL connection */
        $this->close_conn();
    }
}

$database = new DBController();