<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table>
            <tr>
                <td>1</td> <td>date</td>
            </tr>
            <tr style="background-color: silver;">
                <td>1</td> <td>date</td>
            </tr>
        </table>
        
        <?php
            
            $date = new DateTime();
            $date->setDate(2001, 2, 3);
            //echo $date->format('Y-m-d');

        
            for ($i = 1; $i <= 100; $i++) {
              echo "<td>$i</td> <td>$date</td>";  
              echo $i;
            }


            
            
        ?>
    </body>
</html>
