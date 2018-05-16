<?php
session_start();
$_SESSION['language'] = 'polish';
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
              <a class="nav-link" href="#">O mnie<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Umiejętności</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projekty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="cover"></div>
    <div class="loader">
      <div class="lds-css ng-scope">
        <div style="width:100%;height:100%" class="lds-ripple">
          <div></div><div></div>
        </div>
      </div>
    </div>
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
          <div class="title"><h2>O Mnie</h2></div>
        <div class="triangle triangle-right"></div>
      </div>
      <div class="main-category">
        <img id="hero" src="images/hero.png">
      <div class="container" style="margin-bottom: 100px;">
          <div class="row-features">
                <div class="feature">
                      <i class="icon-feature fas fa-sitemap"></i>
                      <p>Dopasowane Do Twoich Potrzeb</p>
                </div>
                <div class="feature">
                      <i class="icon-feature fas fa-pencil-alt"></i>
                      <p>Dokładność Pixel-Perfect</p>
                </div>
                <div class="feature">
                      <i class="icon-feature fas fa-mobile-alt" ></i>
                      <p>Przystosowane Do Wszystkich Urządzeń</p>
                </div>
                <div class="feature">
                      <i class="icon-feature fas fa-heart" style="color:rgb(144, 22, 22)"></i>
                      <p>Budowane Z Pasją</p>
                </div>
          </div>

          <div class="my-description">

            <h3 style="text-align: center;">
                  Cześć!<br> Mam na imię Przemysław. Jestem programistą webowym od strony front-end.

            </h3>
            <h5>
              Logiczne myślenie i tworzenie. To dwie rzeczy które uwielbiałem robić od zawsze.
              Programowanie, łącząc ze sobą te dwa komponenty, stało się nieodzowną częścią mojego życia w momencie wypisania pierwszego 'Hello World' na ekranie.
              Sztuka kodowania jest niesamowitą nauczycielką pokory, dokładności i cierpliwości.
              Dlatego każdemu z moich projektów oddaje całe moje serce, całą moją koncentrację i całą moją kawę. Bo różnica tkwi w detalach.
              Stwórzmy razem coś niesamowitego!
            </h5>
          </div>
      </div>
      <h2 class="mid-big-header">Rzeczy, które wytwarzają u mnie nadmierną ilość dopaminy</h2>
      <div class="cards">
          <div class="card">
              <img class="card-img-top" src="images/chess.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Szachy</h4>
                <p class="card-text">Ta niepowtarzalna strategia z rodzaju '<strong> easy to lern, lifetime to master</strong>' towarzyszy mi od samego początku życia. I wciąż zaskakuje jak mało o niej wiem. Szachy to gra która wymaga zabójczej precyzji i balansu. Nie możesz grać zbyt pasywnie, zbyt agresywnie, kontrolować zbyt wiele lub zbyt mało pól. Szachy to miniaturowa gra w życie. Szachy to walka, szachy to miłość. </p>

              </div>
          </div>
        <div class="card">
            <img class="card-img-top" src="images/invest.jpg" alt="Card image cap">
            <div class="card-block">
            <h4 class="card-title">Inwestowanie</h4>
            <p class="card-text"><strong> Pieniądze szczęścia</strong> nie <strong>dają</strong>, ale na pewno bardzo szczęsciu pomagają. Skoro bank jest w stanie wziąć twoje pieniądze i po roku oddać Ci kilka % więcej to znaczy, że muszą być pewni, że z tego zrobią więcej. Dlaczego by nie wyciągnąć więc pieniędzy ze skarpety pod poduszką i nauczyć je, by zarabiały same na siebie?</p>

          </div>
      </div>
        <div class="card">
        <img class="card-img-top" src="images/travel.jpg" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title">Podróżowanie</h4>
        <p class="card-text">Dziecięca ciekawość wraz z wiekiem często zanika. Na szczęście w tym aspekcie nadal nie wyrosłem z pieluch. Niepohamowana chęć poznawania nowych kultur, ludzi, budynków i historii zmusza mnie do tułaczek po najróżniejszych zakątkach świata - Od <strong>śmiertelnie gorących bezdroży Arizony</strong> po sięgające gwiazd wieżowowce Dubaju.</p>

        </div>
        </div>
        <div class="card">
        <img class="card-img-top" src="images/self-dev.jpg" alt="Card image cap">
        <div class="card-block">
        <h4 class="card-title">Rozwój osobisty</h4>
        <p class="card-text">Bycie szczęśliwym to styl życia, a nie cel. To od Ciebie zależy czy będziesz cieszył się życiem. Kształtowanie swojej mentalności tak, by nikt i nic nie zaburzyło twojej wewnętrznej harmonii i szczęścia nie jest proste, ale uważam, że jest najbardziej przydatną rzeczą na <strong>całym świecie!</strong>  </p>
        </div>
        </div>
      </div>
      </div>
    </div>
    <div class="category">
          <div class="topic">
            <div class="triangle"></div>
              <div class="title"><h2>Umiejętności</h2></div>
            <div class="triangle triangle-right"></div>
          </div>
          <div class="container category-explanation">
              <div class="main-explanation">
                <p>Kliknij na poszczególne nazwy technologii/języków by zobaczyć moją subiektywną ocenę poziomu ich znajomości.</p>
                </div>
              <img src="images/Avatar.png" alt="Person">
          </div>
          <div class="main-skills-wrap">
          <div class="panel">
            <img id="technologyPicture" src="images/qm.png" alt="Technologia">
            <ul>
              <li class="AngularJS" value="40">Angular</li>
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
          <div class="title"><h2>Wybrane Projekty</h2></div>
        <div class="triangle triangle-right"></div>
      </div>
      <div class="projects">
                    <div class="project">
                                <div class="project-decription">
                                  <a class="project-name" href="http://chessyes.eu">ChessYes</a>
                                  <p><strong>ChessYes to witryna pozwalająca na rozwój umiejętności szachowych.</strong>   <br> <br>
                                     Do dyspozycji są trzy różne metody nauki: rozwiązywanie zadań kombinacyjnych o różnym poziomie trudności, analizowanie partii profesjonalnych graczy oraz trenowanie zasięgu widzenia na szachownicy w minigrze zręcznościowej.
                                    Kombinacje oraz mecze pobierane są dynamicznie z bazy danych za pomocą technologii AJAX. Poprawność odpowiedzi kombinacji jest również sprawdzana dynamicznie by użytkownik nie mógł podpatrzeć jej przed wykonaniem ruchu.
                                    W projekcie wykorzystana została biblioteka <a href="http://chessboardjs.com">chessboardjs</a> odpowiedzialna za wyświetlanie szachownicy i bierek.
                                    Baza zadań oraz partii jest stale powiększana. <br>
                                    <div class="project-links">
                                    <a href="https://github.com/PrzemyslawKonefal/Chess-Website"><i class="fab fa-github-square fa-2x"></i></a>
                                    <button class="live-button"><a href="http://chessyes.eu">Live</a></button>
                                    </div>
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
                                     <p><strong> Uproszczona wersja narzędzia dla architektów.</strong> <br> <br>
                                      Aplikacja pozwala na generowanie dwuwymiarowych planów budynków z podziałem na piętra i pomieszczenia.
                                      Tworzenie legendy przestrzeni wraz z przypisaniem do nich kolorów sprawia, że model jest bardziej przejrzysty oraz ułatwia nawigację.
                                      Właściowścią kreatora jest także sprawdzanie najważniejszych zasad związanych z tworzeniem owych modeli. <br>
                                      <div class="project-links">
                                      <a href="https://github.com/PrzemyslawKonefal/BIM-model-creator"><i class="fab fa-github-square fa-2x"></i></a>
                                      <button class="live-button"><a href="http://przemkon.pl/projects/BIM">Live</a></button>
                                      </div>
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
                                               <p><strong>Stań się bardziej efektywny dzięki odpowiedniemu zarządzaniu czasem.</strong> <br> <br>
                                               Catch Up Time to aplikacja tworząca interwały regulujące czas pracy i przerw. By ułatwić to zadanie na stronie po naciśnięciu 'start' ustawienia wstępne spowodują powstanie interwałów techniki Pomodoro.
                                               Aplikacja jednak nie ogranicza się jedynie do metody Pomodoro. Pozwala na dowolne ustawianie zegarów, zmianę dźwięku poszczególnych alarmów, zatrzymywanie i odliczanie dowolnych zegarów czy zmianę wyglądu zegarów lub ich ułożenia.
                                               Dodatkowo, witryna jest wyposażona w listę 'to do',
                                               która jest niezbędnym elementem dla każdego kto szanuje swój czas! <br>
                                               <div class="project-links">
                                               <a href="https://github.com/PrzemyslawKonefal/Pomodoro-clock"><i class="fab fa-github-square fa-2x"></i></a>
                                               <button class="live-button"><a href="http://catch-up-time.com">Live</a></button>
                                               </div>
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
            <div class="title"><h2>Kontakt</h2></div>
          <div class="triangle triangle-right"></div>
        </div>
        <div class="contact-box">
          <div class="contact-ball">
            <div class="flex-grasp" style="margin-bottom: 40px;">
              <h2>Jeśli:</h2>
              <ul>
                <li>Tworzysz projekt, w którym mogę Ci pomóc</li>
                <li>Szukasz do swojego ambitnego zespołu nowego członka</li>
                <li>Chcesz powiedzieć "Cześć!"</li>
              </ul>
            </div>
            <div class="flex-grasp">
              <h2>Wtedy:</h2>
              <p>Najbardziej komfortowym sposobem na skontaktowanie się ze mną jest napisanie maila na:
                 <a href="mailto:przemyslaw.konefal@gmail.com"><i class="far fa-envelope"></i>  przemyslaw.konefal@gmail.com</a> lub kontakt telefoniczny <a href="tel:+48694795314"> <i class="fas fa-phone"></i>  694 795 314</a>
                 <span class="mid-break">Możesz mnie znaleźć także na</span>
                 <span class="media">

                <a href="https://www.facebook.com/przemyslawkonefal1"><i class="fab fa-facebook-square fa-2x"></i></a>
                 <a href="https://github.com/PrzemyslawKonefal"><i class="fab fa-github-square fa-2x"></i></a>
               </span>
                </p>
            </div>
          </div>
          <div class="contact-ball smaller-ball">
            <form action="message.php" method="post">
                  <h4>Twoje imię:</h4>
                  <input type="text" name="name" required>
                  <h4>Twój email:</h4>
                  <input type="email" name="email" required>
                  <h4>Parę słów na temat naszej współpracy</h4>
                  <textarea name="message" required></textarea>
                  <button type="submit" name="button" id = 'scrollBottom'>Wyślij</button>
                  <?php if (isset($_SESSION['MailSent']) and $_SESSION['MailSent'] == true) {
                    $_SESSION['MailSent'] = false;
                    echo "<p style = 'color: #6fbd2a;'>Wiadomość wysłana pomyślnie! :)</p>";
                  } ?>
                  <div class="additional">
                    Możesz skorzystać także z formularza kontaktowego :)
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
