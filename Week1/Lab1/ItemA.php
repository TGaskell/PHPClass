<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <p>
        <?php
        //Explode example
        $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo $pieces[0]; // piece1
        echo $pieces[1]; // piece2
        ?>
        </p>
        <p>
        <?php
        //sha1
        $fruit = 'apple';

        if (sha1($fruit) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
            echo "Would you like a green or red apple?";
        }
        ?>
        </p>
        <p>
        <?php
        //htmlentities
        $str = "A 'quote' is <b>bold</b>";

        // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($str);

        // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($str, ENT_QUOTES);
        ?>
        </p>
        <p>
        <?php
        //md5
        $stri = 'apple';

        if (md5($stri) === '1f3870be274f6c49b3e31a0c6728957f') {
            echo "Would you like a green or red apple?";
        }
        ?>
        </p>
        <p>
        <?php
        //strip_tags
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        echo strip_tags($text);
        echo "\n";

        // Allow <p> and <a>
        echo strip_tags($text, '<p><a>');
        ?>
        </p>
        <p>
        <?php
        //trim
        function trim_value(&$value) 
        { 
            $value = trim($value); 
        }

        $fruits = array('apple','banana ',' cranberry');
        var_dump($fruits);

        array_walk($fruits, 'trim_value');
        var_dump($fruits);
        ?>
        </p>
        <p>
        <?php
        //ucwords
        $foo = 'hello world!';
        $foo = ucwords($foo);             // Hello World!

        $bar = 'HELLO WORLD!';
        $bar = ucwords($bar);             // HELLO WORLD!
        $bar = ucwords(strtolower($bar)); // Hello World!
        ?>
        </p>
        <p>
        <?php
        //strlen
        $strn = 'abcdef';
        echo strlen($strn); // 6

        $strg = ' ab cd ';
        echo strlen($strg); // 7
        ?>
        </p>
        <p>
        <?php
        //str_shuffle
        $string = 'abcdef';
        $shuffled = str_shuffle($string);

        // This will echo something like: bfdaec
        echo $shuffled;
        ?>
        </p>
        <p>
        <?php
        //ord
        $stOrd = "\n";
        if (ord($stOrd) == 10) {
            echo "The first character of \$str is a line feed.\n";
        }
        ?>
        </p>

        
    </body>
</html>
