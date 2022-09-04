     <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0">Hotel North South </h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>  
      
    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu"> 
        <nav  class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-4 h-font text-light ">Admin PANEL</h4>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                        <ul class="nav nav-pills flex-column ">
                            <li class="nav-item">
                                <a class="nav-link text-white h-font" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white h-font" href="rooms.php">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white h-font" href="features_facilities.php">Features & Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white h-font" href="user_queries.php">User Queries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white h-font" href="carousel.php">Carousel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white h-font" href="settings.php">Settings</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>

    <script>
     function setActive(){
        let navbar = document.getElementById('dashboard-menu');
        let a_tags = navbar.getElementsByTagName('a');
        for(i=0;i<a_tags.length;i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];
            if(document.location.href.indexOf(file_name) >= 0){
            a_tags[i].classList.add('active'); 
            }
        }
      }
     setActive();
    </script>