<?php
include_once './view_data.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!--<script src="main.js"></script>-->
    
</head>
<body>
    <a type="button" href="index.php">Back to Main Page</a>
    <table>
        <tr>
            <th>SI No.</th>
            <th>Course Id</th>
            <th>Course Name</th>
            <th>Course Type</th>
            
        </tr>
        <?php foreach( $result as $element){ ?>
            
            <tr>
                <td><?php echo $element['id'] ?></td>
                <td><?php echo $element['course_id'] ?></td>
                <td><?php echo $element['course_name'] ?></td>
                <td><?php echo $element['course_type'] ?></td>
                
            </tr>
            
        <?php } ?>   
    </table>    
</body>
</html>