<?php require('randomQuote.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Assignment 1</title>
    <meta name="description" content="Assignment 1">
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>
<div id="mainContainer">
    <h1>Travis Peterson</h1>
    <img src="/images/me.jpg" alt="Me">
    <p class="intro">Hi, My name is Travis Peterson and I currently live in San Antonio Texas.  I currently work for USAA where I lead and
        develop mainly Java based applications on internal systems. I am working on my Information Management Systems Masters
        degree here at the Harvard Extension School and this is my last semester.  On my spare time I have done web development
        in some form or another.  I have worked in PHP before but am looking to take my PHP knowledge and skills to the next
        level and so that is what I am looking to get out of this class.  I am happily married and have 3 kids (2 daughters
        and a boy) and so besides work and homework most of my time is spent hanging out with my family.
    </p>
    <div class="randomQuote">
        <h2>Random Quote</h2>
        <?php
            echo $randomQuotes;
        ?>
    </div>
</div>
</body>
</html>