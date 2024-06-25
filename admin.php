<?php
session_start();
require 'config.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

// Handle form submissions for adding/editing questions or viewing statistics

?>

<!DOCTYPE html>
<html lang=en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Admin Panel</h1>
    <h2>Manage Surveys</h2>
    <form method="post">
        <!-- Form untuk menambah/mengedit pertanyaan -->
        <label for="question">Pertanyaan</label>
        <input type="text" id="question" name="question" required>
        <button type="submit" name="add_question">Add Question</button>
    </form>

    <h2>Survey Statistics</h2>
    <!-- Tampilkan statistik survei -->
    <table>
        <tr>
            <th>Kategori</th>
            <th>Jumlah Responden</th>
            <th>Rata-rata Skor</th>
        </tr>
        <?php
        // Fetch and display statistics from the database
        $sql = "SELECT category, COUNT(*) as total_respondents, AVG(answers->'$.q1') as avg_score FROM responses GROUP BY category";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['category']}</td>
                    <td>{$row['total_respondents']}</td>
                    <td>{$row['avg_score']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
