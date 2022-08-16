<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TCC</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- Google Fonts Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="css/styles.css">

    


</head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
            <div class="container py-3">
                <a href="#" class="navbar-brand third-color">
                    <img src="img/logo.png" alt="logo">
                    <span></span>
                </a>
                <button 
                 class="navbar-toggler" 
                 type="button" 
                 data-bs-toggle="collapse"
                 data-bs-target="#navbar-items" 
                 aria-controls="navbar-items" 
                 aria-expanded="false" 
                 aria-label="Toggle navigation"
                 >
        
                <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar-items">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link active third-color" aria-current="page">Institucional</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link third-color" >Adote</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link third-color" >Doações</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link third-color" >Ações</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link third-color" >Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CARD DECK-->

        <div class="col-12 col-md-10 offset-md-1" id="mini-card">

                    <div class="card-deck  d-flex align-content-start flex-wrap">

                        <div class="card col-12 col-md-4">
                            <img class="card-img-top" src="img/teste.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                             <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="button" class="btn btn-primary">Primary</button>
                            </div>
                         </div>
                        <div class="card col-12 col-md-4">
                            <img class="card-img-top" src="img/teste.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="button" class="btn btn-primary">Primary</button>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4">
                            <img class="card-img-top" src="img/teste.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="button" class="btn btn-primary">Primary</button>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4">
                            <img class="card-img-top" src="img/teste.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="button" class="btn btn-primary">Primary</button>
                            </div>
                        </div>


                    </div>
                </div>



        <!-- FOOTER -->
        <footer class="container-fluid bg-dark-color" id="footer">
            <div class="container">
                <div class="row">
                    <!--FOOTER TOP-->
                    <div class="col-12" id="footer-top">
                        <div class="row justify-content-between">
                            <div class="col-4"><h2>Tcc</h2></div>
                            <div class="col-4" id="social-icons">
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <!--FOOTER DETAILS-->
                    <div class="col-12" id="footer-details">
                        <div class="row">
                            <div class="col-12 col-md-4" id="news-container">
                                <h4>Fique por dentro das novidades</h4>
                                <p class="secondary-color">Inscreva-se para saber em primeira mão</p>
                                <form>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Digite seu e-mail">
                                    </div>
                                    <button class="btn btn-dark" type="submit">Inscrever</button>
                                </form>
                            </div>
                            <div class="col-12 col-md-4" id="contact-container">
                                <h4>Formas de contato</h4>
                                <p class="secondary-color">(00)0000000</p>
                                <p class="secondary-color">contato@Tcc</p>
                            </div>
                            <div class="col-12 col-md-4" id="links-container">
                             <div class="row">
                                 <h4>Você pode estar procurando por:</h4>
                                 <div class="col-6">
                                     <ul class="list-unstyled">
                                         <li><a href="#" class="secondary-color">Projetos</a></li>
                                         <li><a href="#" class="secondary-color">Projetos</a></li>
                                         <li><a href="#" class="secondary-color">Projetos</a></li>
                                     </ul>
                                 </div>
                                 <div class="col-6">
                                     <ul class="list-unstyled">
                                         <li><a href="#" class="secondary-color">Projetos</a></li>
                                         <li><a href="#" class="secondary-color">Projetos</a></li>
                                         <li><a href="#" class="secondary-color">Projetos</a></li>
                                     </ul>
                                 </div>
                                 
                             </div>
                            </div>
                        </div>
                    </div>
                    <!--FOOTER BOTTOM-->
                    <div class="col-12" id="footer-bottom">
                        <div class="row justify-content-between">
                            <div class="col-112 col-md-3">
                                <p class="seecondary-color">TCC &copy; 2022 </p>
                            </div>
                            <div class="col-112 col-md-3">
                                <p class="seecondary-color">teste</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>