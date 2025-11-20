   <!-- 
    Kyzer Owen A. Canicosa
    CYB-201
   -->

<?php
// creation of variables
$title = "Supermarket Flowers";
$artist ="Ed Sheeran";
$mood="Melancholic";

//stored adjectives, nouns, and verbs into arrays
$nouns =["Flowers","Tea","Cup","Photo album","Cards","Stuffed animals","Ginger beer","Pillows","Beds","Chairs","Nightgowns","Case","Tear","Hand","Memories","Life","Heart","angel"];
$verbs =["Took","Threw","Packed","Fluffed","Made","Stacked","Folded","Wiped","Fell","Holding","Blink","Spread","Sing","Drive"];
$adjectives =["supermarket","Day-old","Get-well-soon","Stuffed","Old","Broke","Loved ","Neatly","Home"];


//replaced some words in the verse with words from the array
$verse1=["I took the supermarket ". $nouns[0]."from the windowsill",
"I ". $verbs[1]." the day-old ".$nouns[1] ." from the cup",
$verbs[2] ." up the photo album Matthew had made",
"Memories of a life that's been loved",
$verbs[0]." the ".$adjectives[2] ."cards and stuffed animals",
"Poured the ". $adjectives[4]. $nouns[6]." down the sink",
"Dad always told me, Don't you cry when you're down",
"But mum, there's a ". $nouns[12]." every time that I ".$verbs[10],
];

$prechorus1=["Oh, I'm in pieces, it's tearing me up, but I know",
            "A heart that's broke is a heart that's been loved"];

$chorus1=["So, I'll ". $verbs[12]." Hallelujah"
,"You were an ".$nouns[17] ." in the shape of my mum"
,"When I fell down, you'd be there ".$verbs[9] ." me up"
,$verbs[11] ." your wings as you go"
,"And when God takes you back"
,"He'll say, Hallelujah, you're home"];

$verse2 =[
"I ".$verbs[3]." the pillows, ".$verbs[4]." the beds, ".$verbs[5]." the chairs up"
,$verbs[6]." your ".$nouns[10]." neatly in a case"
,"John said he'd ".$verbs[13] ." then put his hand on my cheek"
,"And ".$verbs[7] ."a tear from the side of my face"
];

$prechorus2=["And I hope that I see the world as you did, 'cause I know",
"A life with love is a life that's been lived"];

$chorus2=["So, I'll sing Hallelujah"
,"You were an ".$nouns[17]." in the shape of my mum"
,"When I ". $verbs[8]." down, you'd be there holding me up"
,$verbs[11]." your wings as you go"
,"And when God takes you back"
,"He'll say, Hallelujah, you're home"
];
//Demonstartion of type juggling
$versecount =2;
$prechorusCount="2";
$choruscount="2";
$total_verse_count= $versecount + $prechorusCount + $choruscount;
//counts the total lines in the song by adding the count of each array
$total_lines = count($verse1) + count($prechorus1)+ count($prechorus2) + count($verse2) +count($chorus1)+count($chorus2);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            body{ 
                background-image:url("bg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                color:black;
            }
            h1{
                font: 2em courier;
                text-align:center;
            }

            h2{
                font: 1em courier;
                text-align:center;
            }

            p{
                text-align: center;
                font: 1em courier;
            }

            div{
                margin-top:10px;
                background-color: rgba(255, 255, 255, 0.8);
                background-position: center;   
            }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Flowers</title>
</head>
<body>
    <div>
    <h1><?= $title ?></h1>
    <h2>Written by:<b><?=$artist?></b></h2>
    <p>Song Mood:<b><?= $mood?></b> </p>
    <p>Total Lines:<b><?= $total_lines?></b> </p>
    <p>Total Verse:<b><?= $total_verse_count?></b></p>
    <!-- Loops through every line in array to display them -->
    
    <p><?php foreach ($verse1 as $lines) {
                echo "$lines <br>";
        }?></p>

    <p>
        <?php foreach ($prechorus1 as $lines) {
                 echo "$lines <br>";
        }?>
    </p>

    <p>
        <?php foreach ($chorus1 as $lines) {
            echo "$lines <br>";
            }?>
    </p>

    <p><?php foreach ($verse2 as $lines) {
            echo "$lines <br>";
        }?></p>

    <p>
        <?php foreach ($prechorus2 as $lines) {
             echo "$lines <br>";
            }?>
    </p>

    <p>
        <?php foreach ($chorus2 as $lines) {
                echo "$lines <br>";
            }?>
    </p>


</div>
    
</body>
</html>