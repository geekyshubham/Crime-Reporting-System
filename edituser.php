<html>
	<head>
	<style>
		
.container {
  position: ;
  top: 30%;
  padding:50;
  width: 100%;
 left:00;
 background: #59595ba3;
  color: #fff;

}
.container h1 {
  font-size: 36px;
  margin-bottom: 15px;
}
.container h1 a {
  display: inline-block;
  background: #000;
  background: rgba(0, 0, 0, 0.05);
  padding: 10px 15px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #fff;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.container h1 a:hover {
  background: rgb(92, 92, 92);
}
.container p {
  margin-bottom: 30px;
  color: #d6f2e4;
  font-family: 'Proxima Nova', sans-serif;
  font-size: 20px;
}
.container .social-media ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.container .social-media ul li {
  display: inline-block;
  margin: 0 16px 0 0;
  font-size: 14px;
}
.container .social-media ul li:last-child {
  margin: 0;
}
.container .social-media ul li a {
  display: block;
  width: 16px;
  color: #fff;
}
		</style>
	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chosen/0.9.15/chosen.css'>
		<link rel='stylesheet' href='https://s.cdpn.io/43033/animate.min.css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	
	
		<title>Edit User</title>
	</head>
	<body>
	<?
	session_start();
	if((!isset($_SESSION["type"]))||($_SESSION["type"]!="admin"))
		header('Location:index.php');
	?>
<nav>
  <ul>
    <li>
	<a href="admin.php"><b>Home</b></a>
    </li>
    <li>
	<a href="promoteuser.php"><b>Promote User</b></a>
	</li>
	<li>
	<a href="blockuser.php"><b>Block User</b></a>
	</li>
	<li>
	<a href="blockusers.php"><b>UnBlock User</b></a>
    </li>
  </ul>
</nav>
<center>
<div class='container'>
  <h1>
    <a data-sr='scale up 10%' href='#'>Updates</a>
    <span data-sr='top wait .3s 90px'>a</span>
    <span data-sr='top wait .4s 90px'>r</span>
    <span data-sr='top wait .4s 90px'>e</span>
    <span>&nbsp;</span>
    <span data-sr='top wait .5s 90px'>c</span>
    <span data-sr='top wait .6s 90px'>o</span>
    <span data-sr='top wait .7s 90px'>m</span>
    <span data-sr='top wait .8s 90px'>i</span>
    <span data-sr='top wait .9s 90px'>n</span>
    <span data-sr='top wait 1s 90px'>g</span>
    <span>&nbsp;</span>
    <span data-sr='top wait 1.1s 90px'>s</span>
    <span data-sr='top wait 1.2s 90px'>o</span>
    <span data-sr='top wait 1.3s 90px'>o</span>
    <span data-sr='top wait 1.4s 90px'>n</span>
    <span data-sr='top wait 1.5s 90px'>!</span>
  </h1>
  <p data-sr='bottom wait 1.5s 90px'>Please check back with us in the near future for updates.</p>
  <div class='social-media'>
    <ul>
      <li data-sr='top wait 1.8s 90px'>
        <a href='https://www.facebook.com/'>
          <i class='fa fa-facebook'></i>
        </a>
      </li>
      <li data-sr='top wait 1.9s 90px'>
        <a href='https://www.twitter.com/'>
          <i class='fa fa-twitter'></i>
        </a>
      </li>
      <li data-sr='top wait 2s 90px'>
        <a href=''>
          <i class='fa fa-codepen'></i>
        </a>
      </li>
      <li data-sr='top wait 2.1s 90px'>
        <a href=''>
          <i class='fa fa-envelope'></i>
        </a>
      </li>
    </ul>
  </div>
</div>
</center>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/scrollReveal.min.js'></script><script  src="./assets/js/scripts.js"></script>

	</body>
</html>