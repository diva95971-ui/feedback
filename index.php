<!DOCTYPE html>
<html>
<body>

<h2>Feedback Form</h2>

<form action="save.php" method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Feedback:
    <br>
    <textarea name="message" required></textarea>
    <br><br>

    <input type="submit" value="Submit">

</form>

<br>

<a href="view.php">View Feedback</a>

</body>
</html>