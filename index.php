<!DOCTYPE html>
<html lang="en">

<?php
session_name("iste646_group");
session_start();

$_SESSION['rootPath'] = "./";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-main-style.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-main-page.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-navbar.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-footer.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-scorebar.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['rootPath']?>assets/css/style.css">
    

    <title>MasterMinds</title>
</head>

<body>
    <div class="body-main-container">
        <!--Header -->
        <div class="main-container">
            <!--  Navbar  -->
            <div class="nav_container">
                <div class="navbar">
                    <div class="logo_container">
                        <a href="./index.html"><img src="<?php echo $_SESSION['rootPath']?>assets/img/mastermind_logo_3.png" alt="logo"></a>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="./reference.html">Home</a>
                            </li>
                            <li class="dropdown">
                                <div class="dropWrap">
                                    <a href="./transport.html">Program Information</a>
                                    <ul>
                                        <li><a class="dropItem" href="./transport-between.html">All-stars</a></li>
                                        <li><a class="dropItem" href="./transport-within.html">Events</a></li>
                                        <li><a class="dropItem" href="./transport-within.html">Alumni Events</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo $_SESSION['rootPath']?>assets/pages/general-info/index.html" target="_blank">General Information</a>
                            </li>
                            <li class="dropdown">
                                <div class="dropWrap">
                                    <a href="./transport.html">Leagues Information</a>
                                    <ul>
                                        <li><a class="dropItem" href="./transport-between.html">Results</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="./reference.html">Teams</a>
                            </li>
                            <li id="nav-divider">
                                <a href="./transport.html">Contact</a>
                            </li>
                            <li>
                                <a href="./food.html">Relate Links</a>
                            </li>
                            <li>
                                <a href="./drink.html">Store</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!--  Quick Scores  -->
            <div class="scorebar-container">
                <div class="scorebar">
                    <div class="pick-date">
                        <select name="scorebar-date">
                            <option>Sat, Apr 01</option>
                            <option>Sat, Apr 01</option>
                            <option>Sat, Apr 01</option>
                            <option>Sat, Apr 01</option>
                        </select>
                    </div>
                    <div class="teamscore-wrap">

                        <?php

                        // The data should be sent from the database, so I create a DUMMY one for temporary use.
                        $DUMMY_TEAMSCORE_JSON = [
                            '{
                        "time":"3:00 pm", 
                        "team1":{"name":"Team A","score":"115"}, 
                        "team2":{"name":"Team B","score":"87"}, 
                        "location":"Albany"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team C","score":"120"}, 
                        "team2":{"name":"Team D","score":"110"}, 
                        "location":"Buffalo"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team E","score":"101"}, 
                        "team2":{"name":"Team F","score":"105"}, 
                        "location":"Rochester"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team C","score":"109"}, 
                        "team2":{"name":"Team D","score":"105"}, 
                        "location":"Rochester"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team C","score":"78"}, 
                        "team2":{"name":"Team D","score":"92"}, 
                        "location":"Albany"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team C","score":"120"}, 
                        "team2":{"name":"Team D","score":"110"}, 
                        "location":"Buffalo"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team E","score":"101"}, 
                        "team2":{"name":"Team F","score":"105"}, 
                        "location":"Rochester"}', '{
                        "time":"4:00 pm", 
                        "team1":{"name":"Team C","score":"109"}, 
                        "team2":{"name":"Team D","score":"105"}, 
                        "location":"Rochester"}'
                        ];

                        // Dump data from the array until it's empty
                        foreach ($DUMMY_TEAMSCORE_JSON as $key => $teamscore) {
                            $get = json_decode($teamscore, true);
                            echo '<div class="teamscore-card">
                            <div class="tmscore-wrap tmscore-left">
                                <div class="tmscore-ttl">' . $get["time"] . '</div>
                                <div class="tmscore-cnt">' . $get['team1']['name'] . '</div>
                                <div class="tmscore-cnt">' . $get['team2']['name'] . '</div>
                            </div>
                            <div class="tmscore-wrap tmscore-right">
                                <div class="tmscore-ttl tmscore-loc">' . $get["location"] . '</div>
                                <div class="tmscore-cnt">' . $get['team1']['score'] . '</div>
                                <div class="tmscore-cnt">' . $get['team2']['score'] . '</div>
                            </div>
                        </div>';
                        }

                        ?>


                    </div>

                </div>
            </div>

        </div>
        <!--  Placeholder for main contents  -->
        <div class="main-content">
            <div class="main-section">
                <h2>Master Minds</h2>
                <div class="image-container">
                    <img src="<?php echo $_SESSION['rootPath']?>assets/img/javier-trueba-iQPr1XkF5F0-unsplash.jpg" alt="classroom">
                    <figcaption>Photo by <a
                            href="https://unsplash.com/@javotrueba?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">javier
                            trueba</a> on <a
                            href="https://unsplash.com/photos/iQPr1XkF5F0?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                    </figcaption>
                </div>

                <div class="special-events-container">
                    <h2>Special Events</h2>
                    <div class="events-container">
                        <div class="events-1">
                            <img src="<?php echo $_SESSION['rootPath']?>assets/img/george-zheng-UA_TpTR5oAI-unsplash.jpg" alt="event picture 1" href="#"
                                 target="_blank">
                            <figcaption>Photo by <a
                                    href="https://unsplash.com/@geezheng?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">George
                                    Zheng</a> on <a
                                    href="https://unsplash.com/images/events/graduation?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                            </figcaption>
                            <div class="events-title">
                                <h3>Summer time Alumni</h3>
                            </div>

                        </div>
                        <div class="events-1">
                            <img src="<?php echo $_SESSION['rootPath']?>assets/img/sugar-golf-XOSwAvWexBo-unsplash.jpg" alt="event picture 2" href="#"
                                 target="_blank">
                            <figcaption>Photo by <a
                                    href="https://unsplash.com/@sugargolf?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Sugar
                                    Golf</a> on <a
                                    href="https://unsplash.com/s/photos/sugar-golf?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                            </figcaption>
                            <div class="events-title">
                                <h3>Tournament Invation</h3>
                            </div>

                        </div>
                        <div class="events-1">
                            <img src="<?php echo $_SESSION['rootPath']?>assets/img/giorgio-trovato-_XTY6lD8jgM-unsplash.jpg" alt="event picture 3"
                                 href="#" target="_blank">
                            <figcaption>Photo by <a
                                    href="https://unsplash.com/@giorgiotrovato?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Giorgio
                                    Trovato</a> on <a
                                    href="https://unsplash.com/s/photos/tournament?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                            </figcaption>
                            <div class="events-title">
                                <h3>Acronym Tournament</h3>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="home-text-container">
                    <h2>Overview</h2>
                    <div class="text-wrapper">
                        <div class="text-container">
                            <div class="text-container-title">
                                <h3>How is it Played?</h3>
                            </div>
                            <div class="text">
                                <p>
                                <ul>
                                    <li>Meets are scheduled roughly
                                        once a month with the host
                                        site rotating among league
                                        schools. Meets are held after
                                        school, starting at 3:30 and
                                        ending around 6:30.</li>
                                        <br>
                                    <li>
                                        Each meet has between five
                                        and seven games with each
                                        school usually playing twice.
                                    </li>
                                    <br>
                                    <li>
                                        Two four-person teams face
                                        off in games that are run in
                                        eight minute halves with
                                        teams able to substitute at
                                        the half. Including JV
                                        players, schools average
                                        over a dozen players.
                                    </li>
                                    <br>
                                    <li>
                                        Students buzz in and must
                                        be recognized before
                                        answering. Correct answers
                                        earn that player's team
                                        points and the chance for
                                        the team to work together on
                                        bonus questions.
                                    </li>
                                    <br>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="text-container-title">
                                <h3>Deadlines</h3>
                            </div>
                            <div class="text">
                                <div class="deadline-item">
                                    <h4>Albany:</h4>
                                    <p>Friday, September 23, 2022</p>
                                </div>
                                <div class="deadline-item">
                                    <h4>Binghamton:</h4>
                                    <p>Friday, November 4, 2022</p>
                                </div>
                                <div class="deadline-item">
                                    <h4>Buffalo:</h4>
                                    <p>Friday, September 23, 2022</p>
                                </div>
                                <div class="deadline-item">
                                    <h4>Rochester:</h4>
                                    <p>Friday, September 23, 2022</p>
                                </div>
                                <div class="deadline-item">
                                    <h4>Syracuse:</h4>
                                    <p>Friday, October 7, 2022</p>
                                </div>
                                <div class="deadline-item">
                                    <h4>Plattsburgh:</h4>
                                    <p>Thursday, November 10, 2022</p>
                                </div>

                            </div>
                        </div>
                        <div class="text-container">
                            <div class="text-container-title">
                                <h3>How is it Played?</h3>
                            </div>
                            <div class="text">
                                <p>
                                <ul>
                                    <li>Meets are scheduled roughly
                                        once a month with the host
                                        site rotating among league
                                        schools. Meets are held after
                                        school, starting at 3:30 and
                                        ending around 6:30.</li>
                                    <li>
                                        <br>
                                        Each meet has between five
                                        and seven games with each
                                        school usually playing twice.
                                    </li>
                                    <br>
                                    <li>
                                        Two four-person teams face
                                        off in games that are run in
                                        eight minute halves with
                                        teams able to substitute at
                                        the half. Including JV
                                        players, schools average
                                        over a dozen players.
                                    </li>
                                    <br>
                                    <li>
                                        Students buzz in and must
                                        be recognized before
                                        answering. Correct answers
                                        earn that player's team
                                        points and the chance for
                                        the team to work together on
                                        bonus questions.
                                    </li>
                                    <br>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="side-section">
                <div class="resource-container">
                   <div class="headline-title"> <h2>HeadLines</h2></div>
                   <div class="headlines-container">
                        <div class="headline-text">
                            <a href="#">headline1</a>
                        </div>
                        <div class="headline-text">
                            <a href="#">headline2</a>
                        </div>
                        <div class="headline-text">
                            <a href="#">headline3</a>
                        </div>
                        <div class="headline-text">
                            <a href="#">headline4</a>
                        </div>
                   </div>

                </div>
                <div class="resource-container-1">
                    <div class="quick-links-title">
                        <h2>Quicklinks</h2>
                    </div>
                    <div class="links-container">
                        <div class="link">
                            <a href="#">link1</a>
                        </div>
                        <div class="link">
                            <a href="#">link2</a>
                        </div>
                        <div class="link">
                            <a href="#">link3</a>
                        </div>
                        <div class="link">
                            <a href="#">link4</a>
                        </div>
                    </div>
                </div>

                <div class="resource-container-2"></div>

            </div>

        </div>


        <footer class="footer">
            <div class="footer-container">
            <div class=nav-container>
                <a href="#" target="_blank">Home</a>
                <a href="#" target="_blank">Program</a>
                <a href="#" target="_blank">General</a>
                <a href="#" target="_blank">League</a>
                <a href="#" target="_blank">Teams</a>
                <a href="#" target="_blank">Contact</a>
                <a href="#" target="_blank">related links</a>
                <a href="#" target="_blank">store</a>
            </div>
            <div class="social-icons-container">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
            </div>
        </footer>

    </div>

</body>

</html>