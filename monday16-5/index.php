<?php  
    $dbHost="localhost";  
    $dbName="test";  
    $dbUser="root";      
    $dbPassword="";       
    try{  
        $dbConn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword); 
        Echo "Successfully connected with myDB database";  
    } catch(PDOException $e){  
    Echo "Connection failed" . $e->getMessage();  
    }
        $x= "INSERT INTO students ( std_name ,std_dob , city ) VALUES ( 'marwa','1998-10-14', 'aqaba' );";
        $x2= "INSERT INTO students ( std_name ,std_dob , city ) VALUES ( 'noor','1998-10-14', 'aqaba' );";
        
        $y="DELETE FROM students WHERE std_id='3'";
    
        $sql1="UPDATE students SET std_name ='aya' WHERE std_id='5';";
    
        $sql2="CREATE TABLE namename(first_name VARCHAR(255) NOT NULL,last_name VARCHAR(255) NOT NULL );";

    $dbConn -> exec($x);
    $dbConn->exec($y);
    $dbConn->exec($sql1);
    $dbConn->exec($sql2);
?> 