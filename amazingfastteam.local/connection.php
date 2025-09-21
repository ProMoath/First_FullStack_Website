<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "amazing_fast_team";

    try{
        $connection = new PDO(
            "mysql:host=$host;dbname=$dbname", 
            $user, $password
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "<script>alert('Connected Successfully')</script>";
    }
    catch(PDOException $e){
        echo "<script>alert('Connection Faild: {$e->getMessage()}')</script>";
    }

    // Function Section
    function selectAll($table){
        global $connection;
        try{
            $statement = $connection->prepare(
                "SELECT * FROM $table"
            );
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "<script>alert('Error: {$e->getMessage()}')</script>";
        }
    }

    function countAll($table, $column='NO'){
        global $connection;
        try{
            $statement = $connection->prepare(
                "SELECT COUNT($column) FROM $table"
            );
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_COLUMN)[0];
        }
        catch(PDOException $e){
            echo "<script>alert('Error: {$e->getMessage()}')</script>";
        }
    }

    function countWhere($table, $condition){
        global $connection;
        try{
            $statement = $connection->prepare(
                "SELECT COUNT($condition) FROM $table WHERE $condition = 1"
            );
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_COLUMN)[0];
        }
        catch(PDOException $e){
            echo "<script>alert('Error: {$e->getMessage()}')</script>";
        }
    }
?>