<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ascend</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="footlongheader">
            <nav>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="programs.html">PROGRAMS</a></li>
                        <li><a href="cv.html">CV</a></li>
                        <li><a href="phpfile.php">PHP</a></li>
                    </ul>
                </div>
            </nav>

            <h1>PHP Programs</h1>
            <br>
            <div class ="Hello_World">
                <?php
                    echo "This prints Hello World backwards:", "<br>";
                    echo strrev("Hello World");
                ?>
                
                <br>

            </div>

            <br>

            <div class ="Time_Lord">
                <?php
                    echo "This prints current time and date:", "<br>";
                    echo date("Y, H, i, s");
                ?>

            </div>

            <br>

            <div class ="Prime">
                <?php
                    echo "This programs checks if 42 is a prime number:", "<br";

                    $number = 42;
                    $k = 0;

                    for($i = 2; $i < $number; $i++)
                    {
                        if($number % $i == 0)
                        {
                            $k++;
                            break;
                        }
                    }

                    if($k == 0)
                    {
                        echo $number." is a prime number";
                    }
                    else
                    {
                        echo $number." is not a prime number";
                    }
                ?>
                


        
       

        </section>

    </body>
</html>