<?php
session_start();
$_SESSION['language'] = 'english';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Przemysław Konefał</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="transition: .3s ease-out;">
        <span><i class="fas fa-home"></i></span>
        <div id="languages">
           <a href="./"> <img src="images/PL.png" alt="PL"> </a>
           <a href="./english.php"> <img src="images/US.png" alt="US"> </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav" style="width:100%; display:flex; justify-content: center;">
            <li class="nav-item">
              <a class="nav-link" href="#">About me<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="cover"></div>
    <div class="landing">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <img src="images/bubble.png" class="bubble">
    <div class="me">
          <img src="images/me.jpg" alt="My Face">
          <section class="details">
              <p id="quote">The difference between something good and something great is attention to detail.</p>
              <p id="autor">Charles R. Swindol</></p>
          </section>
          <div class="bubbles">

          </div>
    </div>
    </div>
    <div class="category">
      <div class="topic">
        <div class="triangle"></div>
          <div class="title"><h2>About me</h2></div>
        <div class="triangle triangle-right"></div>
      </div>
      <div class="main-category">
        <img id="hero" src="images/hero.png">
      <div class="container" style="margin-bottom: 100px;">
          <div class="row-features">
                <div class="feature">
                      <i class="icon-feature fas fa-sitemap"></i>
                      <p>Tailored to your needs</p>
                </div>
                <div class="feature">
                      <i class="icon-feature fas fa-pencil-alt"></i>
                      <p>Pixel-Perfect precision</p>
                </div>
                <div class="feature">
                      <i class="icon-feature fas fa-mobile-alt" ></i>
                      <p>Adapted to all devices</p>
                </div>
                <div class="feature">
                      <i class="icon-feature fas fa-heart" style="color:rgb(144, 22, 22)"></i>
                      <p>Built with passion</p>
                </div>
          </div>

          <div class="my-description">

            <h3 style="text-align: center;">
                  Hi!<br> My name is Przemysław. I am a front-end developer.

            </h3>
            <h5>
              Logical thinking and creating. Those are the activities I have loved for as long as I can remember.
              Programming, being a combination of those two components, became an indispensable part of my life from the very first "Hello World" printed on the screen.
              Art of coding is an incredible teacher of humility, accuracy and patience.
              This is why I give each of my projects all my heart, all my concentration and all my coffee. Because small details make a big difference. <br>
              Let's make something awesome together!
            </h5>
          </div>
      </div>
      <h2 class="mid-big-header">Things, that produce too much of dopamine in my body</h2>
      <div class="cards">
          <div class="card">
              <img class="card-img-top" src="images/chess.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Chess</h4>
                <p class="card-text">This unique strategy game '<strong> easy to lern, lifetime to master</strong>' accompanies me since i was a little kid and still impresses me how little i know about it. Chess is a game that requires dedly precision.You can not play too passive, too agressive, control to much or to less squares. Chess is like playing the game of life. Chess is war. Chess is love. </p>
              </div>
          </div>
        <div class="card">
            <img class="card-img-top" src="images/invest.jpg" alt="Card image cap">
            <div class="card-block">
            <h4 class="card-title">Investing</h4>
            <p class="card-text"><strong> Money does</strong> not <strong>bring happiness</strong>, but it certainly helps it to develop. If a bank is capable to take your money and give it back to you after a year with few % of increase, it must mean that <strong>they are sure</strong> they can make even more out of it. Why not take the money out of the sock under the pillow and learn yourself how to make more of it?</p>

          </div>
      </div>
        <div class="card">
        <img class="card-img-top" src="images/travel.jpg" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title">Traveling</h4>
        <p class="card-text">Curiosity often vanishes with increasing age. Luckily, not in my case. The unstoppable desire of getting to know new cultures, people, building and ideas forces me to wonder through the various of different places around the world. From the <strong>deadly hot deserts of Arizona</strong> to the highest skyscrapers in Dubai.</p>

        </div>
        </div>
        <div class="card">
        <img class="card-img-top" src="images/self-dev.jpg" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title">Personal Development</h4>
        <p class="card-text">Happiness is not a goal. It's a way of living. Forming your mentality to the point when noone can affect your inner calm and hapiness is a tought thing to do. Nevertheless, I believe it is a single the most useful thing<strong> in the entire universe!</strong></p>
        </div>
        </div>
      </div>
      </div>
    </div>
    <div class="category">
          <div class="topic">
            <div class="triangle"></div>
              <div class="title"><h2>Skills</h2></div>
            <div class="triangle triangle-right"></div>
          </div>
          <div class="container category-explanation">
              <div class="main-explanation">
                <p>Click on a particular technology/language to see my subjective level of knowledge about it.</p>
              </div>
              <img src="images/Avatar.png" alt="Person">
          </div>
          <div class="main-skills-wrap">
          <div class="panel">
            <img id="technologyPicture" src="images/qm.png" alt="Technologia">
            <ul>
              <li class="AngularJS" value="50">Angular</li>
              <li class="HTML" value="80">HTML</li>
              <li class="MySQL" value="60">MySQL</li>
              <li class="Python" value="50">Python</li>
              <li class="JavaScript" value="75">JavaScript</li>
              <li class="CSS" value="90">CSS</li>
              <li class="C" value="70">C++</li>
              <li class="Jquery" value="80">Jquery</li>
              <li class="Bootstrap" value="60">Bootstrap</li>
              <li class="PHP" value="35">PHP</li>
              <li class="Gimp" value="80">Gimp</li>
            </ol>
          </div>
          <div class="result-box">
              <div class="graph">
              </div>
              <h1 class="percentage"></h1>
          </div>
        </div>
    </div>
    <div class="category">
      <div class="topic">
        <div class="triangle"></div>
          <div class="title"><h2>Selected projects</h2></div>
        <div class="triangle triangle-right"></div>
      </div>
      <div class="projects">
                    <div class="project">
                                <div class="project-decription">
                                  <a class="project-name" href="http://chessyes.eu">ChessYes</a>
                                  <p><strong>Learn how to play chess and develop your chess skills.</strong>   <br> <br>
                                    ChessYes allows you to improve your play by providing three different methods of learning. <br>
                                    - Solving chess puzzles devided by the level of advancement <br>
                                    - Analising matches of top world players <br>
                                    - Playing a simple arcade game that expands your eyesight on board <br>
                                    Puzzles and matches loads dynamically from the server by AJAX.
                                    Anwers for puzzles are also taken from the server on the run to prevent users from checking out the solution before the move. <br>
                                    Library <a href="http://chessboardjs.com">chessboardjs</a> is used in a project. It is responsible for the board and pieces display.
                                    Database of puzzles and matches is constantly expanding. <br>
                                    <a href="https://github.com/PrzemyslawKonefal/Chess-Website"><i class="fab fa-github-square fa-2x" style="margin:50px 0;"></i></a>
                                  </p>
                                </div>
                                <div class="project-technologies">
                                      <div class="container">
                                      <div class="technology HTML">HTML</div>
                                      <div class="technology CSS">CSS</div>
                                      <div class="technology JavaScript"> JavaScript</div>
                                      <div class="technology Jquery">Jquery</div>
                                      <div class="technology MySQL">MySQL</div>
                                      <div class="technology PHP">PHP</div>
                                  </div>
                                  <img class="project-photo" src="images/project1.png">
                                </div>
                            </div>
							  <div class="project">
                                  <div class="project-decription">
                                     <a class="project-name" href="http://przemkon.pl/projects/BIM">BIM Model Creator</a>
                                     <p><strong>Simplified version of a tool for architects.</strong> <br> <br>
                                      Application generates two dimensional building plans divided into floors and spaces.<br>
                                      Spaces legend makes the navigation easier. <br>
                                      One of the application's properties is verifying the main rules of building creation. <br>
                                      <a href="https://github.com/PrzemyslawKonefal/BIM-model-creator"><i class="fab fa-github-square fa-2x" style="margin:50px 0;"></i></a>
                                    </p>


                                  </div>
                                  <div class="project-technologies">
                                        <div class="container">
                                        <div class="technology AngularJS">Angular</div>
                                        <div class="technology HTML">HTML</div>
                                        <div class="technology CSS">CSS</div>
                                        <div class="technology JavaScript"> JavaScript</div>
                                    </div>
                                    <img class="project-photo" src="images/project2.png">
                                  </div>
                                </div>
                  <div class="project">
                                          <div class="project-decription">
                                               <a class="project-name" href="http://catch-up-time.com">Catch Up Time</a>
                                               <p><strong>Squeeze the effectiveness out of your time by organizing it.</strong> <br> <br>
                                               Catch Up Time uses Pomodoro technique to help you manage your tasks.
                                               Despite Pomodoro intervals being preset, it allows to manipulate intervals creation however the user wants to.
                                               Additionally, the tool is equipped with 'to do' list, which is a necessity for anyone who respects the time.<br>
                                               <a href="https://github.com/PrzemyslawKonefal/Pomodoro-clock"><i class="fab fa-github-square fa-2x" style="margin:50px 0;"></i></a>
                                              </p>

                                            </div>
                                            <div class="project-technologies">
                                                      <div class="container">
                                                      <div class="technology HTML">HTML</div>
                                                      <div class="technology CSS">CSS</div>
                                                      <div class="technology JavaScript"> JavaScript</div>
                                                      <div class="technology Jquery">Jquery</div>
                                                  </div>
                                                  <img class="project-photo" src="images/project3.png">
                                                </div>
                                              </div>
                                            </div>
      </div>
      <div class="category">
        <div class="topic">
          <div class="triangle"></div>
            <div class="title"><h2>Contact</h2></div>
          <div class="triangle triangle-right"></div>
        </div>
        <div class="contact-box">
          <div class="contact-ball">
            <div class="flex-grasp" style="margin-bottom: 40px;">
              <h2>If:</h2>
              <ul>
                <li>You are creating a project, that i can help you with</li>
                <li>You are looking for a new member to join your ambitious team</li>
                <li>You want to say "Hi"</li>
              </ul>
            </div>
            <div class="flex-grasp">
              <h2>Then:</h2>
              <p>The most comfortable way to contact me is by sending an email to:
                 <a href="mailto:przemyslaw.konefal@gmail.com"><i class="far fa-envelope"></i>  przemyslaw.konefal@gmail.com</a> or phone call to: <a href="tel:+48694795314"> <i class="fas fa-phone"></i>  +48 694 795 314</a>
                 <span class="mid-break">You can also find me on:</span>
                 <span class="media">

                <a href="https://www.facebook.com/przemyslawkonefal1"><i class="fab fa-facebook-square fa-2x"></i></a>
                 <a href="https://github.com/PrzemyslawKonefal"><i class="fab fa-github-square fa-2x"></i></a>
               </span>
                </p>
            </div>
          </div>
          <div class="contact-ball smaller-ball">
            <form action="message.php" method="post">
                  <h4>Your name:</h4>
                  <input type="text" name="name" required>
                  <h4>Your email:</h4>
                  <input type="email" name="email" required>
                  <h4>Few words about your idea</h4>
                  <textarea name="message" required></textarea>
                  <button type="submit" name="button" id = 'scrollBottom'>Wyślij</button>
                  <?php if (isset($_SESSION['MailSent']) and $_SESSION['MailSent'] == true) {
                    $_SESSION['MailSent'] = false;
                    echo "<p style = 'color: #6fbd2a;'>Wiadomość wysłana pomyślnie! :)</p>";
                  } ?>
                  <div class="additional">
                    You can also use the contact form :)
                  </div>
            </form>
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js.js"></script>
  </body>
</html>
