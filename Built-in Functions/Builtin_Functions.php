<!-- Kyzer Owen A. Canicosa CYB-201 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 5 - Built-in Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Module 5 - Built-in Functions</h1>
        
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr><th colspan="4">Change the Case of Characters</th></tr>
                    <tr class="sub-header">
                        <td>Function Category</td>
                        <td>Function</td>
                        <td>Input</td>
                        <td>Output</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lowercase</td>
                        <td><code>strtolower()</code></td>
                        <td>Holy Angel University</td>
                        <td><?php echo strtolower("Holy Angel University"); ?></td>
                    </tr>
                    <tr>
                        <td>Uppercase</td>
                        <td><code>strtoupper()</code></td>
                        <td>Holy Angel University</td>
                        <td><?php echo strtoupper("Holy Angel University"); ?></td>
                    </tr>
                    <tr>
                        <td>Capitalize</td>
                        <td><code>ucwords()</code></td>
                        <td>holy angel university</td>
                        <td><?php echo ucwords("holy angel university"); ?></td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr><th colspan="4">Counting Characters and Words</th></tr>
                    <tr class="sub-header">
                        <td>Function Category</td>
                        <td>Function</td>
                        <td>Input</td>
                        <td>Output</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Number of Characters</td>
                        <td><code>strlen()</code></td>
                        <td>Kyzer Canicosa</td>
                        <td><?php echo strlen("Kyzer Canicosa"); ?></td>
                    </tr>
                    <tr>
                        <td>Number of Words</td>
                        <td><code>str_word_count()</code></td>
                        <td>Kyzer Canicosa</td>
                        <td><?php echo str_word_count("Kyzer Canicosa"); ?></td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr><th colspan="4">Removing and Replacing Characters</th></tr>
                    <tr class="sub-header">
                        <td>Function Category</td>
                        <td>Function</td>
                        <td>Input</td>
                        <td>Output</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Left Trim</td>
                        <td><code>ltrim()</code></td>
                        <td>"&nbsp;&nbsp;&nbsp;&nbsp;Kyzer"</td>
                        <td>"<?php echo ltrim("     Kyzer"); ?>"</td>
                    </tr>
                    <tr>
                        <td>Right Trim</td>
                        <td><code>rtrim()</code></td>
                        <td>"Kyzer&nbsp;&nbsp;&nbsp;&nbsp;"</td>
                        <td>"<?php echo rtrim("Kyzer    "); ?>"</td>
                    </tr>
                    <tr>
                        <td>Full Trim</td>
                        <td><code>trim()</code></td>
                        <td>"&nbsp;&nbsp;&nbsp;Kyzer&nbsp;&nbsp;&nbsp;"</td>
                        <td>"<?php echo trim("       Kyzer    "); ?>"</td>
                    </tr>
                    <tr>
                        <td>String Replace</td>
                        <td><code>str_replace()</code></td>
                        <td>Kyzer Owen</td>
                        <td><?php echo str_replace("Owen", "Canicosa", "Kyzer Owen"); ?></td>
                    </tr>
                    <tr>
                        <td>String Repeat</td>
                        <td><code>str_repeat()</code></td>
                        <td>Owen</td>
                        <td><?php echo str_repeat("Owen", 3); ?></td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr><th colspan="4">Other Built-in Functions (Math & Logic)</th></tr>
                    <tr class="sub-header">
                        <td>Function Category</td>
                        <td>Function</td>
                        <td>Input</td>
                        <td>Output</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rounding</td>
                        <td><code>round()</code></td>
                        <td>1523.6583</td>
                        <td><?php echo round(1523.6583, 2); ?></td>
                    </tr>
                     <tr>
                        <td>Rounding up to nearest Int</td>
                        <td><code>ceil()</code></td>
                        <td>15.66</td>
                        <td><?php echo ceil(15.66); ?></td>
                    </tr>
                    <tr>
                        <td>Rounding down to nearest Int</td>
                        <td><code>floor()</code></td>
                        <td>15.66</td>
                        <td><?php echo floor(15.66); ?></td>
                    </tr>
                    <tr>
                        <td>Random Number</td>
                        <td><code>mt_rand()</code></td>
                        <td>1 to 10</td>
                        <td><?php echo mt_rand(1, 10); ?></td>
                    </tr>
                      <tr>
                        <td>Power</td>
                        <td><code>pow()</code></td>
                        <td>10 and 2</td>
                        <td><?php echo pow(10, 2); ?></td>
                    </tr>
                        <tr>
                        <td>Squareroot</td>
                        <td><code>sqrt()</code></td>
                        <td>100</td>
                        <td><?php echo sqrt(100); ?></td>
                    </tr>
                    <tr>
                        <td>Numeric Check</td>
                        <td><code>is_numeric()</code></td>
                        <td>100</td>
                        <td><?php echo is_numeric(100) ? "True" : "False"; ?></td>
                    </tr>
                    <tr>
                        <td>Find Position</td>
                        <td><code>strpos()</code></td>
                        <td>Kyzer Owen (find "Owen")</td>
                        <td><?php echo strpos("Kyzer Owen", "Owen"); ?></td>
                    </tr>

                    <tr>
                        <td>Check if its in the string</td>
                        <td><code>str_contains()</code></td>
                        <td>Kyzer Owen (is "Owen" in this)</td>
                        <td><?php echo str_contains("Kyzer Owen", "Owen"); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


