<?php
    #deklarasi variabel
    $x = "Saya tidak akan terlambat lagi";

    echo "Cara 1: manual" . "<br>";
    echo $x . "<br>";
    echo $x . "<br>";
    echo $x . "<br>";

    echo "<hr>";

    echo "Cara 2: For #1" . "<br>";
    for ($i = 0 ; $i < 3; $i++)
        echo $x . "<br>";

    echo "<hr>";

    echo "Cara 3: For #2" . "<br>";
    $i = 0;
    for ( ; $i < 3; $i++)
        echo $x . "<br>";

    echo "<hr>";

    echo "Cara 4: For #3" . "<br>";
    for ($i = 0 ; $i < 3; )
    {
        echo $x . "<br>";
        $i++;
    }

    echo "<hr>";

    echo "Cara 5: For #4" . "<br>";
    $i = 0;
    for ( ; $i < 3; )
    {
        echo $x . "<br>";
        $i++;
    }

    echo "<hr>";

    echo "Cara 6: For #5" . "<br>";
    $i = 0;
    for ( ; true; )
    {
        if ($i < 3)
        {
            echo $x . "<br>";
            $i++;
        }
        else
            break;
    }

    echo "<hr>";

    echo "Cara 7: For #6" . "<br>";
    for ($i = 0 ; true; )
    {
        if ($i < 3)
        {
            echo $x . "<br>";
            $i++;
        }
        else
            break;
    }

    echo "<hr>";

    echo "Cara 8: For #7" . "<br>";
    for ($i = 0 ; true; $i++)
    {
        if ($i < 3)
        {
            echo $x . "<br>";
        }
        else
            break;
    }
        


?>