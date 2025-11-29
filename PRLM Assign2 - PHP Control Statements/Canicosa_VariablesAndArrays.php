<!-- Canicosa, Kyzer Owen A. -->
<?php
$best_sellers = [
    'Everlasting Bubblegum',
    'Wonka Bars',
    'Chocolate Frog',
    'Toffee',
    'Feastables'
];

$name = "Kyzer";

// weekend promo logic
$dayNumber = 7;
$isWeekend = ($dayNumber >= 6);

if ($isWeekend) {
    $promo_message = "Weekend Promo: Buy 3, Get 1 Free on any best seller!";
} else {
    $promo_message = "Order today and your treats ship within 24 hours!";
}

include 'header.php';
?>
<div class="container">
    <h2>Best Sellers</h2>
    <p>Hi <?php echo $name; ?>, here are the treats our customers love the most:</p>

    <?php if (count($best_sellers) > 0): ?>
        <ul>
            <?php foreach ($best_sellers as $candy): ?>
                <li><?php echo $candy; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Our best sellers list is being updated. Please check again later.</p>
    <?php endif; ?>

    <h3>Today’s Store Note</h3>
    <p><?php echo $promo_message; ?></p>
</div>
<?php include 'footer.php'; ?>
