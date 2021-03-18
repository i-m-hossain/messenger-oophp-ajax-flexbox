<?php

class base_class extends db{

    private $query;
    public function Normal_Query($query, $param = null){
        if(is_null($param)){
            $this->query = $this->con->prepare($query);
            return $this->query->execute();
        }else{
            $this->query = $this->con->prepare($query);
            return $this->query->execute($param);
        }
    }
    public function Count_Rows(){
        return $this->query->rowCount();
    }

    public function security($data){
        return trim(strip_tags($data));
    }

    public function create_session($session_name, $session_value){
        
        $_SESSION["$session_name"] = $session_value;

    }

    public function single_result(){
        return $this->query->fetch(PDO::FETCH_OBJ);

    }
}