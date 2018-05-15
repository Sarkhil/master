<?php
session_start();
?>

<html>

  <head>
    <title> About | SKC </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

 
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SKC</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide">
        
        <div class="tagline">If you eat <font color="red"><strong>good food</strong></font>, you will see that <font color="green"><strong><em>life's good</em>.</strong></font></div>
    </div>

    <div class="paragraph1">
      <h1>OUR TEAM</h1>
      <h3><p>SKC was founded in 1998. We care about quality, craft and delicious piece of food.</p><p> Our mission today is the same as its always been. That every guest who chooses our restaurant 
	  leaves happy.</p></h3>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="col-md-10" style="float: none; margin: 0 auto;">
        <div class="paragraph2">
          <h1><center>A FEW THINGS WE BELIEVE</center></h1>
          <p><br>
          <div class="goldcolor">
          <h2>1. Interrogate the premise.</h2>
          </div>
          <h3>Test every assumption. Make sure the problems are solved at the right time.</h3> 
          </p>
          <p><br>
          <div class="goldcolor">
          <h2>2. Find the opportunity.</h2>
          </div>
          <h3>Dive head first into research and come up with a better menu that feels like an <strong>AH HA!</strong> moment.</h3> 
          </p>
          <p><br>
          <div class="goldcolor">
            <h2>3. Clients == teammates.</h2>
            </div>
            <h3>You hired SKC, and now we're one team with a shared mission. Let's figure it our together.</h3>
          </p>
          <p><br>
          <div class="goldcolor">
            <h2>4. Be tech-agnostic.</h2>
            </div>
            <h3>Our chefs favour versatility over specialization, using the best techniques for the flavour of food.</h3>
          </p>
          <p><br>
          <div class="goldcolor">
            <h2>5. Design for real life.</h2>
            </div>
            <h3>The things we make will add measurable value to your business and the lives of your users.</h3>
          </p>
        </div>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
    <h1><strong> ABOUT US </strong></h1>
    <h3>
      <p>
        The purpose of <font color="green"><strong>SKC</strong></font> is to automate the existing manual system by the help of computerized equipments and full-fledged computer software, fulfilling their requirements, so that their valuable data/information can be stored for a longer period with easy accessing and manipulation of the same. The required software and hardware are easily available and easy to work with.
      </p>
      <p>
        <font color="green"><strong>SKC</strong></font>, as described above, can lead to <font color="green"><strong>error free, secure, reliable and fast management system.</strong></font> It can assist the user to concentrate on their other activities rather to concentrate on the record keeping. Thus it will help organization in better utilization of resources. The organization can maintain computerized records without redundant entries. That means that one need not be distracted by information that is not relevant, while being able to reach the information. 
      </p>
      <p>
        <font color="green"><strong>Basically the project describes how to manage for good performance and better services for the clients.</strong></font> 
      </p>
    </h3>  
    </div>

    <div class="col-xs-12 line"><hr></div>
  <div class="paragraph3">
    <div class="missionbox">
      <div class="missionfont">
      <strong>Our mission is to ensure nobody has a bad meal.</strong>
      
    </div>
     
    </div>
    
  </div>    
  
  <div class="paragraph1">
    <h1><strong> We do this by</strong></h1>
    <p><br>
    <h2><strong><div class="darkgoldcolor">Helping people discover great places around them.</div></strong></h2>
    <h3>Our team gathers informations from every restaurant on a regular basis to ensure our data is fresh. Our vast community of food lovers share their revies and photos, so you have all that you need to make an informed choice.</h3>
    </p>
    <p><br>
      <h2><strong><div class="darkgoldcolor">Enabling restaurants to create amazing experiences.</div></strong></h2>
      <h3>With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences</h3>
    </p>
  </div>
         </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Siddique Kabab Center 2017 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>