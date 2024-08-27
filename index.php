
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
        <a href="fetch.php">View Posts!</a>
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
                <th>Like</th>
                <th>Dislike</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($posts): ?>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($post['id']); ?></td>
                        <td><?php echo htmlspecialchars($post['title']); ?></td>
                        <td><?php echo htmlspecialchars($post['description']); ?></td>
                        <td><?php echo htmlspecialchars($post['created_at']); ?></td>
                        <td><?php echo "7" ?><button type="button" class=""> Like</button></td>
                        <td><button type="button" class="collapsible">Comments</button>
                            <div class="content">
                                <p> 
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
