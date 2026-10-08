<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html>
<body>

<h2>Feedback List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Feedback</th>
    </tr>

    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['message']; ?></td>
    </tr>
    <?php
    }
    ?>

</table>

<br>
<a href="index.php">Back</a>

</body>
</html>