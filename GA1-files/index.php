
<!-- contributed by:
    Name: Ishan Bhatia
    Banner Number: B00835259
    Implemented the front end aspects of the game 
    
    Name: Arjun Banga
    -If index page is accessed after the quiz is complete, display the score
    -Call to the startQuiz popup

    Name: Miftahul Kashfy
    Banner Number: B00850212
    - Implemented the display of the quiz result once the quiz is over
    - added the final touches-->

<?php
    include "includes/header.php";
    if ( isset($_GET['complete'])) {
        $var = $_GET['complete'];
        echo '<script type="text/javascript">alert("Thank you for playing the superhero quiz! \nYour score is "+'.$var.'+"/10!")</script>';
    }
?>

<main>

<div class="content">

        <div class="headerContent">

            <div class="coverContent">

                <h1 id="mainQuizHeading">WELCOME TO THE QUIZ</h1>
            </div>
        </div>

    <div class="introContent">

        <p id="quizIntroPara">"Heroes are made by the path they choose not the powers they are graced with"<br> Select from the three super hero quizzes below to start the game. <br> MARVEL? DC? STARWARS? Which one is your favourite? </p>

        <h1 id="subHeading">SELECT A QUIZ TOPIC</h1>

        <div class="availableQuizzes">

            <a href="marvel.php" id="mainMarvel" onclick = "startQuiz(this);">
                <div id="marvel">
                    <p id="marvelHeading">MARVEL</p>
                </div>
            </a>

            <a href="dc.php" id="mainDC" onclick = "startQuiz(this);">
                <div id="DC">
                    <p id="dcHeading">DC</p>
                </div>
            </a>

            <a href="starWars.php" id="mainStarWars" onclick = "startQuiz(this);">
                <div id="starWars">
                    <p id="starWarsHeading">STAR WARS</p>
                </div>
            </a>

        </div>


    </div>

</div>
    
</main>

<?php
    include "includes/footer.php";
?>
