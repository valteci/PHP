<!DOCTYPE html>
<html>
    <head>
        <title>Bet.me</title>
        <meta charset="utf-8">        
    </head>
    <body>   
        <h1>     
            <?php
$deslocamento = 1;
$inicio = 3;

switch (true) {
    case $inicio - $deslocamento === 1:
        print "A";
        break;
    case $inicio - $deslocamento === 2:
        print "B";
        break;
    case $inicio - $deslocamento === 3:
        print "C";
        break;
    case $inicio - $deslocamento === 4:
        print "D";
        break;
}
            ?>
        </h1>
            
    </body>
</html>