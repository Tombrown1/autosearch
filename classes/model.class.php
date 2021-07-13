<?php
// include_once "db.class.php";


class model {

    public function insert_record($table, $fields){
        
        $query ="";
        $query .= "INSERT INTO " . $table;
        $query .= " ( ". implode(", ", array_keys($fields)). " ) VALUES ";
        $query .= "( '". implode("', '", array_values($fields))."' )";

        // echo $query;
        // exit();

        $result = mysqli_query($this->db_con, $query);
        if($result){
            return true;
        }else{
            return false;
            }
        
    }

    

    public function select_record($table, $order){
        $query = "SELECT * FROM ".$table.$order;
        $array = array();
        $result = mysqli_query($this->db_con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function redirect($page){
        return header("Location:".$page);
    }
    
}