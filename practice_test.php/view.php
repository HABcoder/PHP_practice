<?php
include 'connection.php';
?>
<?php
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>
<body>
    <table border="3px" style="border-collapse: collapse;"  cellpadding="6px">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>comment</th>
        </tr>
        <?php
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $names = $row['name'];
                $emails = $row['email'];
                $ids = $row['id'];
                $pass = $row['password'];
                $comments = $row['comment'];
                
                echo "<tr>
            <td>$ids</td>
            <td>$names</td>
            <td>$emails</td>
            <td>$pass</td>
            <td>$comments </td>
            </tr>";
            }
        }
        ?>
    </table>
</body>
</html>
