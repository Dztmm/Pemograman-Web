<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$website = $_POST['website'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];

echo "<h2>Your Input:</h2>";
echo "<p>Name: " . $nama . "</p>";
echo "<p>Email: " . $email . "</p>";
echo "<p>Website: " . $website . "</p>";
echo "<p>Comment: " . $comment . "</p>";
echo "<p>Gender: " . $gender . "</p>";
?>