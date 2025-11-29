<!-- Canicosa, Kyzer Owen A. -->
<?php
$prices = [
    'Everlasting Bubblegum'=> 30,
    'Wonka Bars'=> 70,
    'Chocolate Frog'=> 100,
    'Toffee'=> 40,
    'Feastables'=> 80
];

// sample "family bundle" quantities
$cart = [
    'Everlasting Bubblegum'=> 4,
    'Wonka Bars'=> 4,
    'Chocolate Frog'=> 4,
    'Toffee' => 4
];

$subtotal = 0;

foreach ($cart as $item => $qty) {
    $line_price = (float)$prices[$item] * (int)$qty;
    $subtotal += $line_price;
}

// 10% bundle discount for large orders
$discount = 0;
if ($subtotal >= 1000) {
    $discount = $subtotal * 0.10;
}

$subtotal_after_discount = $subtotal - $discount;
$tax = (float)$subtotal_after_discount * 0.12;
$total = $subtotal_after_discount + $tax;

include 'header.php';
?>
<div class="container">
    <h2>Family Bundle Cart</h2>
    <p>This is an example of a family-size order using our popular items.</p>

    <div class="item-row">
        <strong>Item</strong>
        <span>Qty</span>
        <span>Price</span>
        <span>Line Total</span>
    </div>

    <?php foreach ($cart as $item => $qty): ?>
        <?php
            $price = (float)$prices[$item];
            $line_total = $price * (int)$qty;
        ?>
        <div class="item-row">
            <span><?php echo $item; ?></span>
            <span><?php echo $qty; ?></span>
            <span>₱<?php echo $price; ?></span>
            <span>₱<?php echo $line_total; ?></span>
        </div>
    <?php endforeach; ?>

    <p>Subtotal: ₱<?php echo $subtotal; ?></p>

    <?php if ($discount > 0): ?>
        <p>Bundle Discount (10%): -₱<?php echo $discount; ?></p>
    <?php else: ?>
        <p>No bundle discount applied for this sample order.</p>
    <?php endif; ?>

    <p>Tax (12%): ₱<?php echo $tax; ?></p>
    <p><strong>Estimated Total: ₱<?php echo $total; ?></strong></p>
</div>
<?php include 'footer.php'; ?>
