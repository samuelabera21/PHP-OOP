<?php
// Part IV Q3A: Login form and authentication
session_start();
$conn = mysqli_connect("localhost", "root", "root123", "mydb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $usertype = $_POST["usertype"];
    $sql = "SELECT * FROM mytbl WHERE username='$username' AND password='$password' AND usertype='$usertype'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;
        if ($usertype == "student") {
            header("Location: student.php");
        } elseif ($usertype == "teacher") {
            header("Location: teacher.php");
        } elseif ($usertype == "admin") {
            header("Location: admin.php");
        }
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>
<!-- HTML Form -->
<form method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    User Type:
    <select name="usertype" required>
        <option value="">-- Select User Type --</option>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
    </select><br>
    <input type="submit" value="Login">
</form>
