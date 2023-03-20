<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chess Board PHP Code</title>
</head>
<body>
    <h1 style="text-align:center;" > Chess Board Using PHP </h1>
    <table>
        <?php
        for($row=0; $row<=7; $row++){
            echo '<tr>';
            for($col=0; $col<=7; $col++){
                $total=$row+$col;
                if($total%2==0){
                    echo '<td style = "width:30px ; height:30px; background:#000"></td>';
                }
                if ($total%2!=0){
                    echo '<td style = "width:30px ; height:30px; background:#fff"></td>';
                }

            }
            echo '</tr>';
        }
        ?>
    </table>