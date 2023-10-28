<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz game</title>

        <!-- add styles -->
        <style>
            *{
                margin:0;
                top:0;
            }

            body{
                background-color: rgba(11, 95, 219, 0.973);
            }

            a{
                text-decoration: none;
            }

            .nav{
                display: flex;
                justify-content: space-between;
                padding-top:12px;
                font-family: Arial, helvetica;
            }

            .nav .logo{
                padding-left: 12px;
            }

            .nav .logo span{
                color: purple;
            }

            ul{
               list-style: none; 
               display:flex;
            }

            ul li{
                padding-left:8px;
                padding-right:8px;
            }

            ul li a{
                text-decoration: none;
                text-align: center;
                padding:2px 4px;
                font-family: cursive;
                font-size:18px;
                color: #333;
                transition: .4s ease-in-out;
            }

            ul li a:hover{
                color: purple;
            }

            .game-body .intro-heading, .game-body .outro-heading{
                font-family: cursive;
                font-size:23px;
                text-align: center;
                padding-top:18px;
                margin:23px auto 12px;
                color: #fff;
            }

            .game-body .columns{
                display: flex;
                flex-direction: column;
            }

            .game-body .columns .row{
                max-width: 50%;
                width: 50% ;
                height: 200px;
                margin: 12px auto;
                padding: 5px 8px;
                text-align: center;
                border-radius: 20px;
                box-shadow: 1px 2px #334;
            }

            .row h2{
                font-weight: 700;
                font-family: Arial, helvetica;
                letter-spacing: 2px;
            }

            .pro{
                background-color: #333;
                color: #fff;
            }

            .standard{
                background-color: #fff;
                color: #333;
            }
        </style>
    </head>
    <body>

        <!-- Code for the main body -->
        <div class="game-body">
            <div class="intro-heading">
                <h1>SELECT GAME <br> MODE</h1>
            </div>
            
            <div class="columns">
                <a href='question<?php echo rand(1,50)?>.php?score=<?php echo 0; ?>&count=<?php echo 1; ?>'>
                    <div class="row standard">
                        <h2 style="font-weight:800;font-size:28px;">Random</h2>
                        <h2 style="padding-top:25px;"> - Practice mode<br> - Completely random<br> - Repetitive problems<br> - Answer as many questions as possible </h2>

                    </div>
                </a>

                <a href="../systematic/question1.php?score=<?php echo 0; ?>&count=<?php echo 1; ?>">
                    <div class="row pro">
                        <h2 style="font-weight:800;font-size:28px;">Systematic</h2>
                        <h2 style="padding-top:25px;"> - Test mode<br> - Completely systematic<br> - Non-repetitive problems<br> - Sit for a test with 50 questions </h2>
                    </div>
                </a>
            </div>

            <div class="outro-heading">
                <h1><a href="help.html" style="text-decoration:none;color:white;">Need help?</a></h1>
            </div>
        </div>
    </body>
</html>