<?php
// Part IV Q3B: Session script for student.php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['usertype'] != 'student') {
    header("Location: login.php");
    exit();
}
?>
Welcome, <?php echo $_SESSION['username']; ?>!<br>
User Type: <?php echo $_SESSION['usertype']; ?><br>
<a href="logout.php">Logout</a>
