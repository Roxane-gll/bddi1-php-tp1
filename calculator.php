
<?php
    switch($argv[1]){
        case "+" || "add":
            echo $argv[2] +=$argv[3];
            break;
        case "-" || "sub":
            echo $argv[2] -=$argv[3];
            break;
        case "*" || "mult":
            echo $argv[2] *=$argv[3];
            break;
        case "/" || "div":
            if (($argv[2]===0)||($argv[3]===0)){
                echo "invalid division";
                die()
            }
            echo 
            break;
        case "%" || "mod":
            echo $argv[2] %=$argv[3];
            break;
        default:
            echo "unknown operation";
            break;
    }
    echo "\n";
?>
