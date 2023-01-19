<!DOCTYPE html>
<html lang="en">

<?php 

include("./partials/adminhead.php");

?>
<body>

    <!-- side-menu section -->

    <div class="menu">
        <div class="logo">
            <img src="./images/messi.png">
            <h2>Brand</h2>
        </div>
        <div class="items">
          <li>  <i class="fa fa-pie-chart"></i><a href="login.html">Dashboard</a></li>
          <li>  <i class="fa fa-book"></i><a href="#">Library</a></li>
          <li>  <i class="fa fa-car"></i><a href="#">Parking</a></li>
          <li>  <i class="fa fa-music"></i><a href="#">Music</a></li>
          <li>  <i class="fa fa-money"></i><a href="#">Finance</a></li>
          <li>  <i class="fa fa-users"></i><a href="#">Users</a></li>
          <li>  <i class="fa fa-lock"></i><a href="#">Admin</a></li>

          <li><a href="login.php">Login</a></li>
        </div>

    </div>

    <!-- interface section -->

    <section class="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa fa-bars"></i>
                </div>
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>

            <div class="profile">
                <i class="fa fa-bell"></i>
                <img src="./images/profile.png" alt="">
            </div>
        </div>

        <h3 class="i-name">
            Dashboard
        </h3>
        <div class="values">
            <div class="val-box">
                <i class="fa fa-users"></i>
                <div>
                    <h3>5,089</h3>
                <span>New Users</span>
                </div>
            </div>
            
            <div class="val-box">
                <i class="fa fa-product-hunt"></i>
                <div>
                    <h3>500</h3>
                <span>Products</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa fa-usd"></i>
                <div>
                    <h3>10,089</h3>
                <span>This Month</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa fa-cart-plus"></i>
                <div>
                    <h3>9,089</h3>
                <span>Total Orders</span>
                </div>
            </div>
            
        </div>

        <dir class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Title</td>
                        <td>Status</td>
                        <td>Role</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <img src="./images/profile.png" alt="">
                            <div class="people-de">

                                <h5>Brian Matata</h5>
                            <p>brian@email.com</p>
                            </div>
                        </td>
                        <td class="prople-des">
                            <h5>Software Engineer</h5>
                            <p>Web Developer</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>

                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="./images/profile.png" alt="">
                            <div class="people-de">

                                <h5>Otieno Briyo</h5>
                            <p>briyo@email.com</p>
                            </div>
                        </td>
                        <td class="prople-des">
                            <h5>Software Developer</h5>
                            <p>Android Developer</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>

                        <td class="role">
                            <p>Employee</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="./images/profile.png" alt="">
                            <div class="people-de">

                                <h5>Yobra Awilo</h5>
                            <p>awilo@email.com</p>
                            </div>
                        </td>
                        <td class="prople-des">
                            <h5>Network Engineer</h5>
                            <p>Wifi Installation</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>

                        <td class="role">
                            <p>Intern</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>

                    <tr>
                        <td class="people">
                            <img src="./images/profile.png" alt="">
                            <div class="people-de">

                                <h5>Konshens Korza</h5>
                            <p>korza@email.com</p>
                            </div>
                        </td>
                        <td class="prople-des">
                            <h5>Software Engineer</h5>
                            <p>Web Developer</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>

                        <td class="role">
                            <p>Partner</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </dir>
    </section>
   
    <script>
        $('#menu-btn').click(function(){
            $('.menu').toggleClass("active");
        });
    </script>
    
</body>
</html>
