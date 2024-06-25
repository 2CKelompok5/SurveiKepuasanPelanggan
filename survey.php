<?php
session_start();
include 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $survey_id = $_POST['survey_id'];
    $user_id = $_POST['user_id'];

    foreach ($responses as $question_id => $response) {
        $sql = "INSERT INTO survey (survey_id, user_id, survey_jenis, survey_kode, survey_nama, survey_deskripsi, survey_tanggal) VALUES ('$survey_id', '$user_id', '$survey_jenis', '$survey_kode', '$survey_nama', '$survey_deskripsi', '$survey_tanggal')";
        $conn->query($sql);
    }

    echo "Survey submitted successfully.";
}

$sql = "SELECT * FROM survey WHERE user_id='1'"; // contoh
$result = $conn->query($sql);
$questions = [];
while ($row = $result->fetch_assoc()) {
    $questions[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Survey</title>
</head>
<body>
    <h1>Survey</h1>
    <form method="POST" action="survey.php">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="mahasiswa">Mahasiswa</option>
            <option value="wali mahasiswa">Wali Mahasiswa</option>
            <option value="dosen">Dosen</option>
            <option value="industri">Industri</option>
            <option value="tendik">Tendik</option>
            <option value="alumni">Alumni</option>
        </select>
        <input type="hidden" name="questions" value="<?php echo htmlspecialchars(json_encode($questions)); ?>">
        <?php foreach ($questions as $question): ?>
            <label><?php echo $question['question_text']; ?></label>
            <input type="text" name="responses[<?php echo $question['id']; ?>]" required>
        <?php endforeach; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
