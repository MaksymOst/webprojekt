 <!-- navigation ---->
 <nav class="container navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page=index">Frontbone Interactive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">                
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_fertigeprojekte_active; ?>" href="?page=fertigeprojekte">Unsere Projekte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_workInProgress_active; ?>" href="?page=workInProgress">Work in Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_geschichte_active; ?>" href="?page=geschichte">Unsere Geschichte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_mitarbeiter_active; ?>" href="?page=mitarbeiter">Unser Team</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Minigames
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo $page_raetsel_active; ?>" href="?page=raetsel">Quiz</a></li>
                        <li><a class="dropdown-item <?php echo $page_tictactoe_active; ?>" href="?page=tictactoe">TicTacToe</a></li>
                        
                        
                    </ul>
                </li>
            </ul>
            <button id="switch" class="btn btn-outline-success" type="submit"><img id="modeswitch" src="img/dark_mode.png" alt=""></button>
        </div>
    </div>
</nav>