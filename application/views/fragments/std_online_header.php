<nav class="navbar navbar-expand-lg navbar-dark">
    <a href="<?php echo base_url(); ?>" class="navbar-brand text-light">
        <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="Codac Logo">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Technology</a>
                    <a class="dropdown-item" href="#">Language</a>
                    <a class="dropdown-item" href="#">Science</a>
                    <a class="dropdown-item" href="#">Health</a>
                    <a class="dropdown-item" href="#">Business</a>
                    <a class="dropdown-item" href="#">Math</a>
                    <a class="dropdown-item" href="#">Marketing</a>
                    <a class="dropdown-item" href="#">Humanities</a>
                    <a class="dropdown-item" href="#">Lifestyle</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-3 ml-lg-3 my-lg-0" id="searchcourse">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="auth ml-auto">
            <a href="<?php echo base_url(); ?>studentdashboard">
                <button class="btn btn-lg btn-success" data-id="student" data-target="#signupModal" data-toggle="modal">My Dashboard</button>
            </a>
            <a href="<?php echo base_url(); ?>studentProfile">
                <button class="btn btn-lg btn-outline-light" data-target="#loginModal" data-toggle="modal">My Profile</button>
            </a>
            <a href="<?php echo base_url(); ?>tutors" class=" ml-lg-5">
                <button class="btn btn-lg btn-danger">Instructors</button>
            </a>
        </div>
    </div>
</nav>