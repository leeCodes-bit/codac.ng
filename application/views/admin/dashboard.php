<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <main>
        <section class="container">
            <?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <section class="intro">
                        <div class="intro_lead">
                            <h1>Welcome, <?php echo $this->session->userdata("fullname"); ?>!</h1>
                            <!-- <p>Last Login: Monday, 10th February, 2020 -10:20PM</p> -->
                        </div>
                    </section>

                    <?php
                        // count students
                        $query = $this->db->get_where('users', array('role' => 'student'));
                        $studentCount = $this->db->affected_rows();

                        // count tutors
                        $query = $this->db->get_where('users', array('role' => 'teacher'));
                        $tutorCount = $this->db->affected_rows();

                        // count admins
                        $query = $this->db->get_where('admins');
                        $adminCount = $this->db->affected_rows();
                    ?>

                    <section class="cards">
                        <a href="<?php echo base_url(); ?>admin/students/all"><i class="fa fa-user-graduate"></i>
                            <div class="cards_body">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span><?php echo $studentCount; ?></span>
                                <p>Registered Students</p>
                            </div>
                        </a>

                        <a href="<?php echo base_url(); ?>admin/tutors"><i class="fa fa-user-graduate"></i>
                            <div class="cards_body">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span><?php echo $tutorCount; ?></span>
                                <p>Registered Tutors</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url(); ?>admin/admins"><i class="fa fa-user-graduate"></i>
                            <div class="cards_body">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span><?php echo $adminCount; ?></span>
                                <p>Registered Admins</p>
                            </div>
                        </a>
                    </section>
                </section>
            </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
</html>
