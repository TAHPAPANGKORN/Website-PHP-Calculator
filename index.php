<?php include 'calculator.php';?>

<html>
    <link rel="stylesheet" href="style.css">
<body>
 <div class="main">
    <h1>My Calculator by tartah</h1>
        <form action="index.php" method="GET">
            <input class="type"type="text" name="upper"><br>
            <select class="sel" name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select><br>
            <input class="type" type="text" name="lower"><br>
            <input class= "btn-submit"type="submit" value="calculate">
        </form>
        <div class="cal">
            <h1><?php echo "$textCal = $cal"; ?></h1>
        </div>
        
 </div>

</body>
