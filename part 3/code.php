<?php

$masterEmail = !empty($_REQUEST['email']) ? $_REQUEST['email'] : (!empty($_REQUEST["masterEmail"]) ? $_REQUEST["masterEmail"] : 'unknown');
echo 'The master email is ' . $masterEmail . '\n';

try 
{
    $db = new PDO("mysql:host=localhost;dbname=my_database", 'root', 'sldjfpoweifns');
    $statement=$db->prepare("SELECT * FROM users WHERE email=:email");
    $statement->bindParam(":email",$masterEmail,PDO::PARAM_STR);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    while($row = $statement->fetch()) {
        echo $row['username']. "\n";
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

?>