<?php


    try{
    $dbhost = $dbname = $dbuser = $dbpass = "";

    $dbhost = 'localhost';
    $dbname = 'db_oninemkt';
    $dbuser = 'root';
    $dbpass = "";


    $db = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO user (userid,user_type,user_sex)
    VALUES ('John', 'admin', 'Male')";


    $sql = "UPDATE user SET user_type='guest' WHERE user_sn=2";

    $stmt = $db->prepare($sql);

    // execute the query
    $stmt->execute();


    // use exec() because no results are returned
    $db->exec($sql);
    echo "New record created successfully";

    }
    catch(PDOException $e){
        echo "Connection error: ".$e->getMessage();
    }
?>