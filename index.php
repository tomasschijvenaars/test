<!doctype html>
<?php
    require('controller/datacontroller.php');
    $dc = new DataController();
    $projects = $dc->showProjects();
?>
<html lang="en">
    <head>
        <title>Portfolio Tomas Schijvenaars</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/0e36556437.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-sm shadow-lg">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About Me <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Information</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="header dark">
            <div class="container hdrcont">
                <div class="row justify-content-center mb-4" style="margin-top: 100px;">           
                    <img class="rounded-circle" style="width:250px;height:250px;" src="img/ProfilePic.png"/>
                </div>
                <div class="row justify-content-md-center">
                    <h1>Tomas Schijvenaars</h1>
                </div>
                <hr class="light"/>
                <div class="row justify-content-md-center">
                    <h4>C#  -  PHP  -  SQL</h4>
                </div>
            </div>
        </div>
        <section id="about" class="section-abtme">
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <h1>About Me</h1>
                </div>
                <hr class="dark"/>
                <div class="row pt-3 justify-content-center">
                    <p style="width:900px; text-align: center;">
                    Hi, I am Tomas Schijvenaars. I'm a Dutch developer living in Oudenbosch, a small town near Breda.<br>My programming skills mainly lie in back-end development, in both C# and PHP.<br>I'm also educated in making database systems linked to applications, mainly the SQL variants such as MySQL and MSSQL.<br>As you might see in this portfolio, I'm also capable of front-end design and website building.
                    </p>
                </div>
            </div>
        </section>
        <section id="project" class="section-proj">
            <div class="container-fluid projcont">
                <div class="row justify-content-center">
                    <h1>Projects</h1>
                </div>
                <hr class="light"/>
                <div class="pt-3">  
                    <div class="row pt-4 text-center">
                    <?php
                    if (is_array($projects) || is_object($projects)) {
                        foreach ($projects as $project) {
                            ?>
                            <div class="col-md-4 mb-5">
                                <?php echo "<a href='project?projectID=$project->id'><img src='data:image/jpeg;base64," . base64_encode($project->image) . "' class='rounded border border-dark projectimg' width='400px' heigth='400px'></a>"; ?>
                            </div>
                            
                        <?php
                          }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
        <div class="container mt-3">
            <div class="row justify-content-center">
                <h1>Contact Information</h1>
            </div>
            <hr class="dark"/>
            <div class="row text-center mt-2">
                <div class="col-md-6">
                    <i class="fas fa-envelope fa-3x mb-1"></i><br>
                    <a href="mailto:tomasschijvenaars@gmail.com">tomasschijvenaars@gmail.com</a>
                </div>
                <div class="col-md-6">
                    <i class="fab fa-linkedin-in fa-3x mb-1"></i><br>
                    <a href="https://www.linkedin.com/in/tomas-schijvenaars-58a4541a7/">https://www.linkedin.com/in/tomas-schijvenaars-58a4541a7/</a>
                </div>
            </div>
            <div class="row text-center mt-2">
                <div class="col-md-6">
                    <i class="fas fa-phone-alt fa-3x mb-1"></i><br>
                    <span>+31 6 23123660</span>
                </div>
                <div class="col-md-6">
                    <i class="fab fa-github fa-3x mb-1"></i><br>
                    <a href="https://github.com/tomasschijvenaars">https://github.com/tomasschijvenaars</a>
                </div>
            </div>
        </div>
        </section>
        <footer>
            <div class="text-center footerdiv">
                <div class="smalltext">
                    <small>Copyright © Tomas Schijvenaars</small>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <script src="/js/script.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>