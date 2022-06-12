<?php
require_once dirname(__FILE__) . '/../models/ActivityLog.php';
require_once dirname(__FILE__) . '/../classes/DB.php';

class ActivityLogController{

public static function makelog($action,$description,$id){

    
// $user_id=$_SESSION['id'];


$ActivityLog=new ActivityLog();

$ActivityLog->data["user_id"]= $id;
$ActivityLog->data["action"]= $action;
$ActivityLog->data["description"] = $description;
        // if ($ActivityLog->save()) {
           
        //     return true;
            
        // }return false;
}




}
