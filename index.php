<?php

class car{
    public $color;

    function move (){
        echo 'move '.$this->color;
    }
}

$bmw = new car();
$bmw->color = 'red';
echo $bmw->move();

class connection{



    public $con = mysqli_connect("localhost","root","","fs8_proone");


    function AddNewPro($img,$desc,$user_id){
      
    
       $sql = "INSERT INTO `protofolio` (`img`,`description`,`user_id`) VALUES ('$img','$desc','$user_id')";
       mysqli_query($this->con,$sql);
    
       $res = mysqli_affected_rows($this->con);
    
       if($res == 1){
           return true;
       }else{
           return false;
       }
    }
    
    
    function GetProtofolios(){
    
        $sql = "select * From `userprotofolio`";
        $q = mysqli_query($this->con,$sql);
    
        $projects = [];
    
        while($res =  mysqli_fetch_assoc($q)){
            $projects[] = $res;
        }
    
        return $projects;
    }
    
    
    
    
    function DeletePro($pro_id){
        
    
       $sql = "DELETE FROM `protofolio` WHERE `id` = $pro_id";
       mysqli_query($this->con,$sql);
    
       $res = mysqli_affected_rows($this->con);
    
       if($res == 1){
           return true;
       }else{
           return false;
       }
    }
    
    
    
    function GetProtofolioById($id){
    
        $sql = "select * From `userprotofolio` WHERE `id` = $id";
        $q = mysqli_query($this->con,$sql);
    
    
        $res =  mysqli_fetch_assoc($q);
    
        return $res;
    }
    
    
    
    
    function UpdatePro($id,$desc,$img){
        
    
       $sql = "UPDATE `protofolio` SET `description` = '$desc' ";
    
       if(!empty($img)){
        $sql .= "  , `img` = '$img' ";
       }
       
       $sql .= " WHERE `id` = $id";
    
    
       mysqli_query($this->con,$sql);
    
       $res = mysqli_affected_rows($this->con);
    
       if($res == 1){
           return true;
       }else{
           return false;
       }
    }
    

}

