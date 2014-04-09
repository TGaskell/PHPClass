<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table>
        
        <?php
            $number = 1;
            for ($i = 1; $i <= 100; $i++) {
            
                $date= date("m d Y");
              
              if ($number % 2 === 0){
              echo '<tr style="background-color: silver;">';
              echo "<td>'$number'</td> <td>$date</td>";
              echo '</tr>';
              }
              else {
                    echo '<tr>';
                    echo "<td>'$number'</td> <td>$date</td>";
                    echo '</tr>';
                }
              $number++;
              }
          ?>
        
        </table>
    </body>
</html>
