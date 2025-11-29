<!-- Canicosa, Kyzer Owen A. -->
<?php
$prices = [
    'Everlasting Bubblegum' => 30,
    'Wonka Bars'            => 70,
    'Chocolate Frog'        => 100,
    'Toffee'                => 40,
    'Feastables'            => 80
];

function price_label($price) {
    return $price >= 80 ? "Premium item" : "Classic favorite";
}

include 'header.php';
?>
<div class="container">
    <h2>Price List</h2>
    <p>Here’s a quick look at our sample pricing for popular treats:</p>

    <ul>
        <li>Everlasting Bubblegum – ₱<?= $prices['Everlasting Bubblegum']; ?> (<?= price_label($prices['Everlasting Bubblegum']); ?>)</li>
        <li>Wonka Bars – ₱<?= $prices['Wonka Bars']; ?> (<?= price_label($prices['Wonka Bars']); ?>)</li>
        <li>Chocolate Frog – ₱<?= $prices['Chocolate Frog']; ?> (<?= price_label($prices['Chocolate Frog']); ?>)</li>
        <li>Toffee – ₱<?= $prices['Toffee']; ?> (<?= price_label($prices['Toffee']); ?>)</li>
        <li>Feastables – ₱<?= $prices['Feastables']; ?> (<?= price_label($prices['Feastables']); ?>)</li>
    </ul>

    <?php if ($prices['Feastables'] > 70): ?>
        <div class="note">
            <strong>Note:</strong> Feastables is one of our premium chocolate lines and is perfect for gifts.
        </div>
    <?php endif; ?>
</div>
<?php include 'footer.php'; ?>
