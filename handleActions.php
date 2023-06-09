<?php
include("database.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["add"]))
    {
        $input = $_POST["inputBox"];
        $query = "INSERT INTO todolist(id,item,status) VALUES(NULL,'$input','0')";
        if(mysqli_query($con,$query))
        {
            echo "<script>alert('new record inserted')</script>";
        }
        else{
            echo "error:" .mysqli_error($con);
        }
    }
    else if(isset($_POST["checked"]))
    {
        // echo $_POST["checked"];
        update_items($_POST["checked"]);
    }
    else if(isset($_POST["deleted"]))
    {
       delete_items($_POST["deleted"]);
    }
    header("Location:index.php");
}
?>