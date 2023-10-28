<?php 
$score = $_GET['score'];
$count = $_GET['count'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tQuiz</title>

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
                color: #fff;
            }


            ul{
               list-style: none; 
               display:flex;
            }

            ul li{
                padding-left:8px;
                padding-right:28px;
                font-size:2rem;
                color: #fff;
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
                height: 80px;
                margin: 12px auto;
                padding: 5px 8px;
                text-align: center;
                border-radius: 20px;
                border:none;
                box-shadow: 0px 6px #aaa;
                background-color: #fff;
                color: #000;
                font-family: cursive;
                font-size:24px;
                font-weight:700;
                cursor:pointer;
                margin-bottom: 12px;
            }

            .game-body .columns .standard{
                margin-top:70px;
            }


        </style>
    </head>
    <body>

        <!-- Code for the navigation bar -->
        <div class="nav">
            <div class="logo">
                <h1><a href="index.php" style="text-decoration:none;color:#fff;">tQuiz</a></h1>
            </div>
            <div class="navbar">
                <ul>
                    <li>Score = <?php echo $_GET['score'] ?></li>
                </ul>
            </div>
        </div>

        <!-- Code for the main body -->
        <div class="game-body">
            <div class="intro-heading">
                    <div class="audio" hidden>
                        <audio controls autoplay>
                            <source src="92-Rihanna feat Drake - Work(DjDeo V.Xtendz).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                <h1>Adolf Hitler grew up in which country?</h1>
            </div>
            
            <div class="columns">
                    <button class="row standard click" onclick='this.style.backgroundColor = "red"; var ran = Math.ceil(Math.random() * 50); window.location.href = `question24.php?score=<?php echo $score ?>&count=<?php echo $count + 1 ?>`;'>Germany</button>
                    <button class="row click" onclick='this.style.backgroundColor = "red"; var ran = Math.ceil(Math.random() * 50); window.location.href = `question24.php?score=<?php echo $score ?>&count=<?php echo $count + 1 ?>`;'>Poland</button>
                    <button class="row correct" id="correct" onclick="addScore()">Austria</button>
                    <button class="row click" onclick='this.style.backgroundColor = "red"; var ran = Math.ceil(Math.random() * 50); window.location.href = `question24.php?score=<?php echo $score ?>&count=<?php echo $count + 1 ?>`;'>Switzerland</button>
            </div>
        </div>

        <script>
            var buttons = document.querySelectorAll('click');
            const correct = document.querySelectorAll('correct');

            let clicked = () => {
                var correctButton = document.getElementById('correct');
                correctButton.style.backgroundColor = "green";
                correctButton.style.color = "white";
                window.location.href = 'question6.php?score=<?php echo $score ?>'; 
            }

            let addScore = () => {
                var correctButton = document.getElementById('correct');
                correctButton.style.backgroundColor = "green";
                correctButton.style.color = "white";
                var ran = Math.ceil(Math.random() * 50);
                window.location.href = `question24.php?score=<?php echo $score + 1 ?>&count=<?php echo $count + 1 ?>`; 
            }

            
        </script>
    </body>
</html>