<?php

$hostname = '127.0.0.1:3306';
$uname = 'root';
$pass = 'password';
$db = 'hbwebsite';

$conn = mysqli_connect($hostname, $uname, $pass, $db);
if(!$conn){
    die("Cannot coonect to Database". mysqli_connect_error());
}

// fuction for data filteration 

function filteration($data){
    foreach($data as $key => $value){
        $value =  trim($value);
        $value =  stripslashes($value);
        $value =  htmlspecialchars($value);
        $value =  strip_tags($value);
        $data[$key] = $value;
        return $data;
    }
}
// select all data from the database 
function selectall($table){
$con = $GLOBALS['conn'];
$res = mysqli_query($con, "SELECT * FROM $table");
return $res;
}
// selection of data from database using parameters
function select($sql, $values, $datatypes){
    $con = $GLOBALS['conn']; // making connection global
    if($stmt = mysqli_prepare($con, $sql)){ // prepare statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //binding parameters to parepared query
        if(mysqli_stmt_execute($stmt)){ // execure query
            $res = mysqli_stmt_get_result($stmt); // geeting result from executing query
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            die("Query cannot be executed-Select");
        }
    }
    else{
        die("Query cannot be prepared-select");
    }
}

function update($sql, $values, $datatypes){
    $con = $GLOBALS['conn']; // making connection global
    if($stmt = mysqli_prepare($con, $sql)){ // prepare statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //binding parameters to parepared query
        if(mysqli_stmt_execute($stmt)){ // execure query
            $res =  mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            die("Query cannot be executed-Update");
        }
    }
    else{
        die("Query cannot be prepared-Update");
    }
}

function insert($sql, $values, $datatypes){
    $con = $GLOBALS['conn']; // making connection global
    if($stmt = mysqli_prepare($con, $sql)){ // prepare statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //binding parameters to parepared query
        if(mysqli_stmt_execute($stmt)){ // execure query
            $res =  mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            die("Query cannot be executed-Inserted");
        }
    }
    else{
        die("Query cannot be prepared-Inserted");
    }
}

function delete($sql, $values, $datatypes){
    $con = $GLOBALS['conn']; // making connection global
    if($stmt = mysqli_prepare($con, $sql)){ // prepare statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //binding parameters to parepared query
        if(mysqli_stmt_execute($stmt)){ // execure query
            $res =  mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            die("Query cannot be executed-Update");
        }
    }
    else{
        die("Query cannot be prepared-Update");
    }
}

?>