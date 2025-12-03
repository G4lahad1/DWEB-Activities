<? declare(strict_types=1);  ?>
<?php
  



$wonka_stock = [
    "Everlasting Bubblegum"=> ["price" => 30.00,  "stock" => 50],
    "Wonka Bars"=> ["price" => 70.00,  "stock" => 8],
    "Chocolate Frog"=> ["price" => 100.00, "stock" => 15],
    "Toffee"=> ["price" => 40.00,  "stock" => 25],
    "Feastables"=> ["price" => 80.00,  "stock" => 35],
    "Wonka Caramel Swirl Bar"=> ["price" => 55.00,  "stock" => 30],
    "Wonka Rainbow Nerds Mix"=> ["price" => 65.00,  "stock" => 18],
];


$taxRate = 12; 


function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? "Yes" : "No";
}



function get_total_value(float $price, int $quantity): float
{
 
    return $price * $quantity;
}


function get_tax_due(float $price, int $quantity, int $taxRate = 0): float
{
    
    $totalValue = $price * $quantity;
 
    return $totalValue * ($taxRate / 100);
}

include 'header.php';
?>

<div class="container">
    <h2>Stock Level Monitor</h2>
    <p>
        This page shows the current stock levels for our Wonka products,
        the total value of each item in stock, and the tax due when all
        remaining stock is sold.
    </p>

    <table border="1" cellpadding="6" cellspacing="0" style="width:100%; margin-top:15px; font-size:14px; border-collapse:collapse;">
        <thead style="background-color: rgba(0,0,0,0.25);">
            <tr>
                
                <th>Product</th>
              
                <th>Stock Level</th>
             
                <th>Reorder?</th>
             
                <th>Total Value (₱)</th>
                
                <th>Tax Due (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wonka_stock as $product_name => $data): ?>
                <?php
                 
                    $price = (float)$data['price'];
                    $stock = (int)$data['stock'];

                    $reorderMessage = get_reorder_message($stock);
                    $totalValue     = get_total_value($price, $stock);
                    $taxDue         = get_tax_due($price, $stock, $taxRate);
                ?>
                <tr>
                    
                    <td><?php echo htmlspecialchars($product_name); ?></td>

                
                    <td><?php echo $stock; ?></td>

                    <td><?php echo $reorderMessage; ?></td>

                   
                    <td>₱<?php echo number_format($totalValue, 2); ?></td>

                    
                    <td>₱<?php echo number_format($taxDue, 2); ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <p style="margin-top:10px; font-size:13px;">
        <strong>Note:</strong> Tax rate used: <?php echo $taxRate; ?>%.
    </p>
</div>

<?php include 'footer.php'; ?>
