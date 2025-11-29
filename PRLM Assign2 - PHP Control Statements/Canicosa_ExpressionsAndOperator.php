<!-- Canicosa, Kyzer Owen A. -->
<?php
$greet = "Thank you for shopping with us!";
$items = 4;
$cost  = 10; // sample base cost per pack

$subtotal = $cost * $items;
$tax      = $subtotal * 0.12;
$total    = $subtotal + $tax;

// Shipping fee logic
$shipping_fee = 50;
if ($total >= 500) {
    $shipping_fee = 0;
}

$grand_total = $total + $shipping_fee;


$payment_method = "GCash";

$payment_message = match ($payment_method) {
    "Cash"=> "Payment method: Cash on Delivery",
    "Card"=> "Payment method: Credit/Debit Card",
    "GCash"=> "Payment method: GCash",
    default=> "Payment method: To be confirmed"
};

include 'header.php';
?>
<div class="container">
    <h2>Checkout Summary</h2>


    <p>Number of Packs: <?= $items; ?></p>
    <p>Price per Pack: ₱<?= $cost; ?></p>

    <p>Subtotal: ₱<?= $subtotal; ?></p>
    <p>VAT (12%): ₱<?= $tax; ?></p>
    <p>Total (before shipping): ₱<?= $total; ?></p>

    <?php if ($shipping_fee == 0): ?>
        <p>Shipping: <strong>FREE</strong></p>
    <?php else: ?>
        <p>Shipping Fee: ₱<?= $shipping_fee; ?></p>
    <?php endif; ?>

    <p><strong>Amount Payable: ₱<?= $grand_total; ?></strong></p>

    <p><?= $payment_message; ?></p>
    <p><?= $greet; ?></p>
</div>
<?php include 'footer.php'; ?>
