<?php
$openFile = fopen('./data/data.csv','r');

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>集計</title>
</head>
<body>



<table border="1">
        <tr>
            <th>回答日時</th>
            <th>お名前</th>
            <th>EMAIL</th> 
            <th>年齢</th>
            <th>電話番号</th>
            <th>満足度</th>
        </tr>
        
        <?php 
   
        while($str = fgets($openFile)){
            $ary = explode("," , $str);
            
            ?>
            <tr>
                <td><?=h($ary[0])?></td>
                <td><?=h($ary[1])?></td>
                <td><?=h($ary[2])?></td>
                <td><?=h($ary[3])?></td>
                <td><?=h($ary[4])?></td>
                <td><?=h($ary[5])?></td>
            </tr>
            <?php
 

            
            }
          
            ?>
    </table>
