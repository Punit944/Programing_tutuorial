<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">iDiscuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./About.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        TopCategories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Contact.php">Contact</a>
                </li>
            </ul>

            <form class="d-flex" action="search.php" method="get">
                <input class="form-control me-2"  name="search"type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php 
            session_start();
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
            {
                echo '<div class="logbtn m-1">
                    <a href="partials/_logout.php" type="button" class="btn btn-outline-primary m-1" >
                        Logout
                    </a>
            
                </div>';
                
                                             

                
            }
            else
            {
                echo '<div class="logbtn m-1">
                    <button type="button" class="btn btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#LoginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#SignupModal">
                        Singup
               </button>
    
                </div>';
                
                
             }
            ?>
        </div>
    </div>
</nav>

<?php 

include "_loginModal.php";
include "_signupModal.php";

?>