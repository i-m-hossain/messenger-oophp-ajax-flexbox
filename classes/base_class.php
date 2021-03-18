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
}