<?php include 'header.php'; ?>

<h2>Academic Record</h2>

<?php
// Array for grades
// specific subjects
$my_grades = array(
    array("c" => "IT 101", "n" => "Web Development", "score" => 88),
    array("c" => "MATH 2", "n" => "Calculus", "score" => 94),
    array("c" => "PE 3",   "n" => "Swimming", "score" => 95),
    array("c" => "HIST 1", "n" => "Modern History", "score" => 82)
);
?>

<table border="1" cellpadding="10">
    <tr>
        <td><b>Subject</b></td>
        <td><b>Grade</b></td>
        <td><b>Status</b></td>
        <td><b>Remarks</b></td>
    </tr>

    <?php
    foreach ($my_grades as $row) {
        $current_grade = $row['score'];
        $full_name = $row['c'] . ": " . $row['n'];

        echo "<tr>";
        
        // Subject Name
        echo "<td>" . $full_name . "</td>";
        
        // The Grade
        echo "<td>" . $current_grade . "</td>";

        // Check if passed or failed
        echo "<td>";
        if ($current_grade < 75) {
            echo "<span style='color: red; font-weight: bold;'>FAILED</span>";
        } else {
            echo "<span style='color: green; font-weight: bold;'>PASSED</span>";
        }
        echo "</td>";

        // check remarks
        echo "<td>";
        if ($current_grade >= 90) {
            echo "Dean's List Candidate";
        } else {
            // Nested if statement for other conditions
            if ($current_grade < 75) {
                echo "Must Retake";
            } else {
                echo "Satisfactory";
            }
        }
        echo "</td>";

        echo "</tr>";
    }
    ?>

</table>

<?php include 'footer.php'; ?>