<?php
    require_once './database.php';
    require_once './view_data.php';

    

    $course_id = $_POST['course_id'];
    $course_type = $_POST['course_type'];
    $course_name = $_POST['course_name'];
    $null = NULL;
    $valll = NULL;

    foreach($result as $res){
        if($res['course_id']==$course_id){

            $valll = TRUE;
            break;
        }
    }

    if($valll == FALSE){

        $database = new Database();
        $db = $database->getConnection();
        $sql = "INSERT INTO course_detail (id,course_id,course_name,course_type) VALUES ('$null','$course_id','$course_name','$course_type')";

        if($db->query($sql)===TRUE){
            echo "New record created successfully ";
        }else{
            echo "Error".$sql."<br>".$db->error;
       }
    }else{
        echo "Similar record already exist";
    }   

    $db->close();
?>