<?php include 'header.php'; ?>

<h2>Library Book Status</h2>

<?php

$category_code = "TECH"; 

echo "<p>Selected Category: " . $category_code . "</p>";

echo "<strong>Location: </strong>";
switch ($category_code) {
    case "TECH":
        echo "3rd Floor, IT Section";
        break;
    case "MED":
        echo "2nd Floor, Health Sciences";
        break;
    case "LIT":
        echo "1st Floor, Fiction Area";
        break;
    default:
        echo "Basement Archives";
        break;
}

echo "<hr>";
echo "<h3>Availability Check (Do...While Loop)</h3>";



$copies_to_check = 5;
$found_available = false; 

do {
    echo "Checking Copy #" . $copies_to_check . "... ";
    
  
    if ($copies_to_check == 2) {
        echo "<span class='pass'>AVAILABLE!</span><br>";
        $found_available = true;
    } else {
        echo "<span class='fail'>Borrowed</span><br>";
    }

    $copies_to_check--;

} while ($copies_to_check > 0 && $found_available == false);


if ($found_available) {
    echo "<p><strong>Result:</strong> Please proceed to the counter.</p>";
} else {
    echo "<p><strong>Result:</strong> All copies are currently borrowed.</p>";
}
?>

<?php include 'footer.php'; ?>