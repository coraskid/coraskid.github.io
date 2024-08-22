

<?php
// Simple PHP variable
$title = "Hello, World!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>This is a simple PHP page.</p>
</body>
</html>
/*
// Connect to the SQLite database
$db = new PDO('sqlite:forum.db');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $url = $_POST['url'];

    // Insert the new post into the database
    $stmt = $db->prepare("INSERT INTO posts (title, url) VALUES (:title, :url)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':url', $url);
    $stmt->execute();
}

// Fetch all posts from the database, ordered by newest first
$posts = $db->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forum</title>
</head>
<body>
    <h1>Simple Forum</h1>

    <!-- Form to submit a new post -->
    <form action="" method="post">
        <input type="text" name="title" placeholder="Title" required>
        <input type="url" name="url" placeholder="URL" required>
        <button type="submit">Submit</button>
    </form>

    <hr>

    <!-- List all posts -->
    <?php foreach ($posts as $post): ?>
        <div>
            <a href="<?php echo htmlspecialchars($post['url']); ?>">
                <?php echo htmlspecialchars($post['title']); ?>
            </a>
            <small>(<?php echo $post['created_at']; ?>)</small>
        </div>
    <?php endforeach; ?>
</body>
</html>
*/