<?php
    require_once "./database.php";
    
    
    $database = new Database();
    $db = $database->getConnection();

    $sql = "SELECT * FROM course_detail";
    $result = $db->query($sql);

    if($result->num_rows > 0){
        return $result;
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }

    $db->close();
?>