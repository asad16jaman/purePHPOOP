<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "asad";
    
    $cnc = new mysqli($servername,$username,$password,$database);
    if($cnc->connect_error){
        echo $cnc->connect_error;
    }
    $sql = "SELECT * FROM abc";
    $rsl = $cnc->query($sql);
    if($rsl->num_rows>0){
       echo "<ul>";
        while($row = $rsl->fetch_assoc())
            echo "<li> name is : ".$row["customerName"]." roll is : ".$row["roll"]."</li>";
       echo "</ul>";
    }else{
        echo " somossa ace...";
    }

    $cnc->close();




?>