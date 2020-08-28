<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutors || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/tutors.css">
</head>

<body>
    <main>
        <section class="container">
		<?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <!-- <section>Hello world</section> -->
                    <?php
                        if(isset($_GET['success'])) {
                          echo '<h4>Tutor application updated successfully</h4>';
                        }
                     ?>

                    <?php
                        $query = $this->db->get_where('users', array('user_id' => $userId));
                        if($this->db->affected_rows() <= 0) {
                          echo '<h3>No user found</h3>';
                          exit();
                        }

                        foreach($query->result() as $user) {
                          $fullname = $user->fullname;
                          $email = $user->email;
                          $activated = $user->activated;
                          $personalProfile = $user->personal_profile;
                          $country = $user->country;
                          $nationality = $user->nationality;
                          $dateOfBirth = $user->date_of_birth;
                          $gender = $user->gender;
                          $image = $user->image;
                          $tutorApproved = $user->tutor_approved;
                        }
                     ?>
                    <section class="table">
                        <h3>Tutor Information</h3>
                        <!-- <p class="control">
                            <button class="active" id="active">Active Tutors</button>
                            <button id="deactivated">Deactivated Tutors</button>
                        </p> -->
                        <div class="table_container">
                            <table id="table">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $fullname; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Personal Profile</td>
                                        <td><?php echo $personalProfile; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td><?php echo $country; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nationality</td>
                                        <td><?php echo $nationality; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth</td>
                                        <td><?php echo $dateOfBirth; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo $gender; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tutor Approved</td>
                                        <td>
                                          <?php
                                            if($tutorApproved == 0) {
                                              echo 'Not Applied';
                                            } else if($tutorApproved == 1){
                                              echo 'Pending &nbsp; &nbsp;';
                                              echo '<a href="'.base_url().'approve-tutor-application/'.$userId.'">Approve Application</a> &nbsp; &nbsp;';
                                              echo '<a href="'.base_url().'decline-tutor-application/'.$userId.'">Decline Application</a>';
                                            } else if($tutorApproved == 2) {
                                              echo 'Approved &nbsp;';
                                              echo '<a href="'.base_url().'decline-tutor-application/'.$userId.'">Decline</a>';
                                            }
                                          ?>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="table">
                        <h3>Tutor Application</h3>
                        <?php
                          $query = $this->db->get_where('tutors_application', array('tutor_id' => $userId));
                          if($this->db->affected_rows() > 0) {
                            // applciation found
                            foreach($query->result() as $tutorApp) {
                              $cvLink = $tutorApp->cv_link;
                              $linkedinLink = $tutorApp->linkedin_link;
                            }
                            echo '
                            <div class="table_container">
                                <table id="table">
                                    <tbody>
                                        <tr>
                                            <td>Link to Tutors CV</td>
                                            <td><a href="'.$cvLink.'" target="_blank">CV Link</a></td>
                                        </tr>
                                        <tr>
                                            <td>Link to Tutors Linkedin Profile</td>
                                            <td><a href="'.$linkedinLink.'" target="_blank">Linkedin Profile Link</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>';
                          } else {
                            // no application found
                            echo '<h3>Tutor has no application';
                          }
                         ?>
                    </section>


                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/admins.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
</html>
