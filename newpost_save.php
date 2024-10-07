<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $cat_id = $_POST['category'];
    $topic = $_POST['topic'];
    $content = $_POST['comment'];
    
    // Assuming user_id is stored in session after login
    $user_id = $_SESSION['user_id'];
    // Connect to database
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

    // Prepare the SQL insert statement
    $sql = "INSERT INTO post (title, content, post_date, cat_id, user_id) VALUES (:title, :content, NOW(), :cat_id, :user_id)";
    
    // Execute the statement
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'title' => $topic,
        'content' => $content,
        'cat_id' => $cat_id,
        'user_id' => $user_id
    ]);

    // Close the database connection
    $conn = null;

    // Redirect back to index.php after saving
    header("Location: index.php");
    exit();
}
?>
