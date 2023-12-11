<?php
include_once('../view/component/dashboard_sidebar.php');
include_once('../controller/check_login_status.php');
if(!check_login_status()){
   header('location: login.php');
}
include_once('../model/usersModel.php');
include_once('../model/postsModel.php');

$get_current_user_info = get_current_user_info();

$get_current_user_type = get_current_user_type();

                                                //total users
//$total_users = count_total_users();

                                                  //total cashier
//$total_cashier = count_total_cashier();

                                                  //total customers
//$total_customers = count_total_customers();







//count total packages
$total_packages = count_total_packages();
?>

<!-- including header -->
<?php include_once('../view/component/dashboard_header.php'); ?>

<?php 
if($get_current_user_type == "Cashier" || $get_current_user_type == "Customer"){
    header('location: ../view/profile.php');
}

?>

<div class="main-section">
                <div class="container">
                    <div class="row">
                        <div class="column-thirty-three">
                            <div class="dashboard-sidebar">
                                <?php //echo get_sidebar();?>
                            </div>
                        </div>
                        <div class="column-sixty-six">
                            <div class="dashboard-block">
                                <div class="row">
                                    <div class="column-twenty-five">
                                        <div class="single-block">
                                            <h3>Total Packages</h3>
                                            <p><?php echo $total_packages; ?></p>
                                        </div>
                                    </div>
                                  
                                    
                                    <div class="column-twenty-five">
                                        <div class="single-block">
                                            <h3>Posts</h3>
                                            <p><?php echo $total_posts; ?></p>
                                        </div>
                                    </div>
                                    <div class="column-twenty-five">
                                        <div class="single-block">
                                            <h3>Total Users</h3>
                                            <p><?php echo $total_users; ?></p>
                                        </div>
                                    </div>
                                    <div class="column-twenty-five">
                                        <div class="single-block">
                                            <h3>Cashier</h3>
                                            <p><?php echo $total_cashier; ?></p>
                                        </div>
                                    </div>
                                    <div class="column-twenty-five">
                                        <div class="single-block">
                                            <h3>Customers</h3>
                                            <p><?php echo $total_customers; ?></p>
                                        </div>
                                    </div>
                                    <div class="column-twenty-five">
                                        <div class="single-block">
                                            <h3>Orders</h3>
                                            <p>11</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
    </div>



<!-- including footer -->
<?php include_once('../view/component/footer.php'); ?>