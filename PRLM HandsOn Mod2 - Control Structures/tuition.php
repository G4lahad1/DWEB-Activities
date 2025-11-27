<?php include 'header.php'; ?>

<h2>Assessment of Fees</h2>

<?php

$student_course = "BSIT"; 
$total_units = 18;

$price_per_unit = match ($student_course) {
    'BSIT' => 500.00,
    'CS' => 550.00,
    'NURSING' => 800.00,
    'HRM' => 450.00,
    default => 400.00, 
};


$total_tuition = $total_units * $price_per_unit;

echo "<p>Course: <strong>" . $student_course . "</strong></p>";
echo "<p>Rate per Unit: P" . $price_per_unit . "</p>";
echo "<h3>Total Tuition: P" . $total_tuition . "</h3>";

echo "<hr>";
echo "<h3>Installment Plan (While Loop)</h3>";


$balance = $total_tuition;
$monthly_payment = $total_tuition / 3;
$month_counter = 1;


while ($balance > 1) {
  
    $payment_formatted = number_format($monthly_payment, 2);
    
    echo "<div class='bill-box'>";
    echo "<strong>Month " . $month_counter . ":</strong> Pay P" . $payment_formatted;
    echo "</div>";

 
    $balance = $balance - $monthly_payment;
    
    
    $month_counter++;
}
?>

<?php include 'footer.php'; ?>