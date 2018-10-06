<?php
$json = file_get_contents("https://api.coursera.org/api/courses.v1");
$obj = json_decode($json);
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
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
</head>
<body>
    <a type="button" href="local_saved_data.php">View the saved courses</a>
    <table>
        <tr>
            <th>SI No.</th>
            <th>Course Id</th>
            <th>Course Name</th>
            <th>Course Type</th>
            <th>Action</th>
        </tr>
        <?php $index = 1; foreach( $obj->elements as $element){ ?>
           
            <tr>
                <td><?php echo $index ?></td>
                <td class="fc"><?php echo $element->id ?></td>
                <td class="sc"><?php echo $element->name ?></td>
                <td class="tc"><?php echo $element->courseType ?></td>
                <td><button type="button" class="addData">Submit</button></td>
            </tr>
                
        <?php $index++;} ?>   
    </table>  
    <script>
        $(document).ready(function(){
            
            $(".addData").click(function() {
                var $row = $(this).closest("tr");    
                var $id = $row.find(".fc").text(); 
                var $name = $row.find(".sc").text(); 
                var $ctype = $row.find(".tc").text(); 
    
                $.ajax({
                    url:"create_data.php",
                    type:"POST",
                    data:{'course_id':$id,'course_type':$ctype,'course_name':$name},
                    success:function(result){
                        alert(result);
                    }

                });
            });
            

        });
    </script>  
</body>
</html>