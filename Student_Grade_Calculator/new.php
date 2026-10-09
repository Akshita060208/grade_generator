<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Calculator</title>

    <style>
        body{
            font-family: serif;
            background-color: #f0f4f8;
            text-align: center;
            margin-top: 50px;

        }

.container{
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

input{
    padding: 10px;
    width: 80%;
    margin :8px ;
    box-sizing: border-box;
}

button{
    padding: 10px 20px;
    background-color: #831a57;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover{
    background-color: #5a0f3c;
}

.result{
    margin-top: 20px;
    background-color: #f9f9f9;
    font-size: 18px;
    color: #333333;
    border-radius: 8px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Grade Calculator</h1>
        <form action="new.php" method="post">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="num_subjects">Number of Subjects:</label>
            <input type="number" id="num_subjects" name="num_subjects" min="1" max="10" required><br><br>

            <label for="maths">Maths Marks:</label>
            <input type="number" id="maths" name="maths" min="0" max="100" required><br><br>

            <label for="science">Science Marks:</label>
            <input type="number" id="science" name="science" min="0" max="100" required><br><br>

            <label for="english">English Marks:</label>
            <input type="number" id="english" name="english" min="0" max="100" required><br><br>

            <label for="social_science">Social Science Marks:</label>
            <input type="number" id="social_science" name="social_science" min="0" max="100" required><br><br>

            <label for="hindi">Hindi Marks:</label>
            <input type="number" id="hindi" name="hindi" min="0" max="100" required><br><br>

            <label for="Punjabi">Punjabi Marks:</label>
            <input type="number" id="Punjabi" name="Punjabi" min="0" max="100" required><br><br>

            <label for="Drawing">Drawing Marks:</label>
            <input type="number" id="Drawing" name="Drawing" min="0" max="100" required><br><br>

            <label for="Gk">Gk Marks:</label>
            <input type="number" id="Gk" name="Gk" min="0" max="100" required><br><br>

            <label for="Computer">Computer Marks:</label>
            <input type="number" id="Computer" name="Computer" min="0" max="100" required><br><br>

            <label for="english_grammar">English Grammar Marks:</label>
            <input type="number" id="english_grammar" name="english_grammar" min="0" max="100" required><br><br>

            <button type="submit" name="calculate_grade" value="Calculate Grade">
                Calculate Grade
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calculate_grade'])) {
            $name = $_POST['name'] ?? '';
            $num_subjects = (int)($_POST['num_subjects'] ?? 0);
            $maths = (float)($_POST['maths'] ?? 0);
            $science = (float)($_POST['science'] ?? 0);
            $english = (float)($_POST['english'] ?? 0);
            $social_science = (float)($_POST['social_science'] ?? 0);
            $hindi = (float)($_POST['hindi'] ?? 0);
            $Punjabi = (float)($_POST['Punjabi'] ?? 0);
            $Drawing = (float)($_POST['Drawing'] ?? 0);
            $Gk = (float)($_POST['Gk'] ?? 0);
            $Computer = (float)($_POST['Computer'] ?? 0);
            $english_grammar = (float)($_POST['english_grammar'] ?? 0);

            $total_marks = $maths + $science + $english + $social_science + $hindi + $Punjabi + $Drawing + $Gk + $Computer + $english_grammar;
            $percentage = $num_subjects > 0 ? (($total_marks / ($num_subjects * 100)) * 100) : 0;

            if ($percentage >= 90) {
                $grade = "A+";
            } elseif ($percentage >= 80) {
                $grade = "A";
            } elseif ($percentage >= 70) {
                $grade = "B";
            } elseif ($percentage >= 60) {
                $grade = "C";
            } elseif ($percentage >= 50) {
                $grade = "D";
            } else {
                $grade = "F";
            }

            echo "<h2>Result for: " . htmlspecialchars($name) . "</h2>";
            echo "<p>Total Marks: " . htmlspecialchars((string)$total_marks) . "</p>";
            echo "<p>Percentage: " . htmlspecialchars((string)$percentage) . "%</p>";
            echo "<p>Grade: " . htmlspecialchars($grade) . "</p>";
        }
        ?>

    </div>
</body>
</html>