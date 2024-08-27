

<!-- <?php
    echo "this is a test";
    ?>
<?php
// Connect to the SQLite database
try {
    $db = new PDO('sqlite:forum.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Prepare the insert statement
    $stmt = $db->prepare("INSERT INTO posts (title, description) VALUES (:title, :description)");

    // Bind parameters
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Post added successfully!";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}

// Fetch all posts from the database, ordered by newest first
$posts = $db->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forum</title>
</head>
<body>
    <h1>Simple Forum</h1>
    <h2> 
        <a href="test.php">Submit a post!</a>
    </h2>
    <!-- Form to submit a new post
    <form action="" method="post">
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Submit</button>
    </form> -->

    <hr>

    <!-- List all posts -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Posts Table</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>

    <h1>Posts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($posts): ?>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($post['id']); ?></td>
                        <td><?php echo htmlspecialchars($post['title']); ?></td>
                        <td><a href="<?php echo htmlspecialchars($post['description']); ?>"><?php echo htmlspecialchars($post['description']); ?></a></td>
                        <td><?php echo htmlspecialchars($post['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No posts found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
