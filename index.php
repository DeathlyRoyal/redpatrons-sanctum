<!DOCTYPE html>
<html lang="en">

<head>

  <title>
    RedPatron's Sanctum
  </title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xterm@5.3.0/css/xterm.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/xterm@5.3.0/lib/xterm.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/xterm-addon-fit@0.8.0/lib/xterm-addon-fit.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="modal-images.css">
  <meta charset="UTF-8">
  <!--Dont touch above-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xterm@5.3.0/css/xterm.css" />

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body onload="
init()">
  <div id="terminal">
    <div onclick="startTerminal(0); animatedTextStart(300); animationSkip = true" id="skip">Skip Intro</div>
    <div class="terminalText" id="text1"></div>
    <div class="terminalText" id="text2"></div>
    <div class="terminalText" id="text3"></div>
    <div class="terminalText" id="text4"></div>
    <div class="terminalText" id="text5"></div>
    <div class="terminalText" id="text6"></div>
    <div class="terminalText" id="text7"></div>
    <div class="terminalText" id="text8"></div>
    <div class="terminalText" id="text9"></div>
    <div class="terminalText" id="text10"></div>
    <div class="terminalText" id="text11"></div>
  </div>
  <div id="main" class="container">
    <nav class="navbar navbar-expand-md border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Red's Sanctum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="code/code.php">Code</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lore/lore.php">Lore</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row">
      <div id="mainText" class="col-16 position-absolute">
        <div class="title-container programActive">
          <h2 id="mainTitle" class="animatedText fade-transition">Program Active</h2>
        </div>
        <div id="description">
          <div class="row-1">
            <h4>This website was created for a few purposes, these are:</h4>
          </div>
          <div class="row-1">
            <h5>● Saved code for easy access.</h5>
          </div>
          <div class="row-1">
            <h5>● Lore for Red's character's in the story Binding of Leviathan.</h5>
          </div>
          <div class="row-1">
            <h5>● Projects such as Minecraft building projects and coding projects.</h5>
          </div>
          <div class="row-1">
            <h5>● It also contains easter eggs! <span data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-custom-class="custom-tooltip" data-bs-title="Easter Eggs like this!">
                <span id="easterEgg1">:)</span>
              </span></h5>
          </div>
        </div>
      </div>
      <div id="horizonBody" class="fade-transition col-16">
        <div id="closeHorizon">&laquo;</div>
        <div id="horizonTitle">
          <h1>Horizon Limits</h1>
        </div>
        <div id="horizonText">
          <h4>Horizon Limits is a private modded Minecraft server meant for me and my friends
            it is hosted on a Linux Virtual Machine that i am capable of accessing trough tools like WinSCP and Putty
            The server itself is meant to run 24/7 with little downtime used for updates and backups,
            this maintenance is always planned and announced at least a day earlier.
            While the server itself has only 4 semi active players we still enjoy to play on it every few weeks and
            progress on our builds.</h4>
        </div>
        <button id="myImg" class="btn btn-danger">Check Images</button>
      </div>
    </div>
  </div>
  <div id="projectBody" class="">
    <div id="projectsTitleText">
      <h3>
        Projects
      </h3>
    </div>
    <div id="description">These are some of the upcoming or ongoing projects i am working on.</div>
    <div class="projects">
      <div id="horizonLimits" onclick="showMinecraft()">
        <h3 class="unselectable">Horizon Limits</h3>
      </div>
      <div id="project2" class="unknownProject">
        <h3>
        </h3>
      </div>
      <div id="project3" class="unknownProject">
        <h3>
        </h3>
      </div>
      <div id="project4" class="unknownProject">
        <h3>
        </h3>
      </div>
      <div id="project5" class="unknownProject">
        <h3>
        </h3>
      </div>
    </div>
  </div>
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content">
    <div id="caption">
      <div class="text-center">
        <div id="carouselHorizon" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="10"
              aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#carouselHorizon" data-bs-slide-to="11"
              aria-label="Slide 12"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/churchImg.png" class="d-block w-100" alt="Church">
              <div class="carousel-caption d-none d-md-block">
                <h5>Cathedral</h5>
                <h6>The main build of the server, a gothic cathedral.</h6>
                <h6>This was built by RedPatron and JesterOfTheSeas, each single block here was built by hand from a
                  youtube video.</h6>
                <h6>Cathedral serves as our starter base and is our first build of the server, it is dedicated to a made
                  up goddess Synthia in the server's lore.</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/churchInside.png" class="d-block w-100" alt="ChurchInside">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/churchLibrary.png" class="d-block w-100" alt="ChurchLibrary">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/churchBasement.png" class="d-block w-100" alt="ChurchBasement">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/churchBasementRoom.png" class="d-block w-100" alt="ChurchBasementRoom">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/boilerRoom.png" class="d-block w-100" alt="BoilerRoom">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/village.png" class="d-block w-100" alt="Village">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/trainTrack.png" class="d-block w-100" alt="TrainTrack">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/cultistHouseOutside.png" class="d-block w-100" alt="CultistHouseOutside">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/cultistHouse.png" class="d-block w-100" alt="CultistHouse">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/seaBase.png" class="d-block w-100" alt="Tryharders Base">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/magesBase.png" class="d-block w-100" alt="ChurchLibrary">
              <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <h6>Text</h6>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselHorizon" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselHorizon" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src="myscripts.js">
  </script>
</body>

</html>