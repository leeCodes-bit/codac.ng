<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students || Codac.ng</title>
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
                    <section class="table">

                        <h3>Registered Students</h3>
                        <p class="control">
                            <a href="<?php echo base_url(); ?>admin/students/all"><button class="active" id="active">All Students</button></a>
                            <a href="<?php echo base_url(); ?>admin/students/active"><button class="active" id="active">Active Students</button></a>
                            <a href="<?php echo base_url(); ?>admin/students/inactive"><button id="deactivated">Deactivated Students</button></a>
                        </p>
                        <div>
                            <?php 
                                if(isset($_GET["activated"])) {
                                    echo '<h4 style="color:green; text-align: center;">Student Activated Successfully</h4>';
                                }

                                if(isset($_GET["deactivated"])) {
                                    echo '<h4 style="color:green; text-align: center;">Student Deactivated Successfully</h4>';
                                }
                            ?>
                        </div>
                        <div class="table_container">
                            <table id="table">
                                <tbody>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                  <?php
                                  if(isset($mode)) {
                                    if($mode == 'all') {
                                        $query = $this->db->get_where('users', array("role" => "student"));
                                    } else if ($mode == 'active') {
                                        $query = $this->db->get_where('users', array("role" => "student", "status" => 1));
                                    } else if ($mode == 'inactive') {
                                        $query = $this->db->get_where('users', array("role" => "student", "status" => 0));
                                    } else {
                                        $query = $this->db->get_where('users', array("role" => "student"));
                                    }
                                  } else {
                                    $query = $this->db->get_where('users', array("role" => "student"));
                                  }

                                    
                                    if($this->db->affected_rows() > 0) {
                                      // admins found
                                      $sn = 1;
                                      foreach($query->result() as $user) {
                                        echo '
                                        <tr>
                                            <td>'.$sn.'</td>
                                            <td>'.$user->fullname.'</td>
                                            <td>'.$user->email.'</td>
                                            <td>';
                                              if($user->status == 0) echo '<span style="color:red;">Inactive</span>';
                                              else if($user->status == 1) echo '<span style="color:green;">Active</span>';
                                            echo '</td>
                                            <td>';
                                                if($user->status == 0){
                                                    echo '<span><a href="'.base_url().'admin/activateStudent/'.$user->user_id.'">Activate</a></span>';
                                                } else if ($user->status == 1) {
                                                    echo '<span><a href="'.base_url().'admin/deactivateStudent/'.$user->user_id.'">Deactivate</a></span>';
                                                }
                                            echo '</td>
                                        </tr>';
                                        $sn++;
                                      }
                                    } else {
                                      // no admin found
                                      echo '<h3 style="color:red;">No Student Found</h3>';
                                    }
                                  ?>
                                </tbody>
                            </table>
                        </div>
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
