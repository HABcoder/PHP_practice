<?php
include 'connection.php';
?>

<?php 
if(isset($_POST['ins'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO student (name, email, password, comment) VALUES ('$name', '$email', '$password', '$comment')";

    $query = mysqli_query($conn,$sql);

    if($query){
         echo '<script>alert("Data Inserted"); window.location.href="view.php";</script>';
    }
    else{
        echo "Data not inserted successfully";
    }
}
?>