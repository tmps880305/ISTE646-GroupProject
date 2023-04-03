<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-main-style.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-main-page.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-navbar.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-footer.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/mastermind-scorebar.css"/>


    <title>MasterMinds</title>
</head>
<body>
<!--Header -->
<div class="main-container">
    <!--  Navbar  -->
    <div class="nav_container">
        <div class="navbar">
            <div class="logo_container">
                <a href="./index.html"><img src="assets/img/mastermind_logo_3.png" alt="logo"></a>
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
                        <a href="./food.html">General Information</a>
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
                $DUMMY_TEAMSCORE_JSON = ['{
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

    <!--  Placeholder for main contents  -->
    <div class="main-content">
        <h2>MainPage</h2>
    </div>

</div>


<footer class="footer">
    <div>
        <a>Thank you !</a>
    </div>
</footer>

</body>
</html>