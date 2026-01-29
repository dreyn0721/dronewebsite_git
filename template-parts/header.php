<?php 
include("init/database.php");
include("init/main-functions.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">


	<link href="assets/main.css" rel="stylesheet" crossorigin="anonymous">

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="description" content="<?=$description;?>">
	<meta name="author" content="<?=$author;?>" />
	<title><?=$pagetitle;?></title>

	<style>
	:root{
	  --primary:#706868;
	  --secondary:#55635e;
	}

	html{scroll-behavior:smooth;}
	body{font-family:Arial,sans-serif;}

	/* ===== Futuristic Separator ===== */
	.separator{
	  position:relative;
	}
	.separator::after{
	  content:"";
	  display:block;
	  height:70px;
	  background:
	    linear-gradient(135deg,
	      transparent 60%,
	      rgba(0,0,0,.08) 60%,
	      rgba(0,0,0,.08) 65%,
	      transparent 65%);
	}

	/* ===== Navbar ===== */
	.navbar{background:#fff;}
	.nav-link{
	  position:relative;
	  color:#000;
	}
	.nav-link:hover{color:var(--primary);}
	.nav-link::after{
	  content:"";
	  position:absolute;
	  width:0;
	  height:2px;
	  background:var(--primary);
	  left:0;
	  bottom:0;
	  transition:.3s;
	}
	.nav-link:hover::after{width:100%;}

	/* CTA Button */
	.cta-btn{
	  position:relative;
	  overflow:hidden;
	  background:var(--primary);
	  color:#fff;
	  border:1px solid #706868;
	}
	.cta-btn::before{
	  content:"";
	  position:absolute;
	  inset:0;
	  background:#fff;
	  transform:translateY(-100%);
	  transition:.4s;
	  z-index:0;
	}
	.cta-btn:hover::before{transform:translateX(0);
	  border: solid 1px #706868;
	  border-radius: 5px;}
	.cta-btn span{
	  position:relative;
	  z-index:1;
	}
	.cta-btn:hover span{color:var(--primary);}

	/* ===== Hero ===== */
	.hero{
	  background:
	    linear-gradient(to right, var(--primary), transparent),
	    url("https://dummyimage.com/800x400/000/fff");
	  background-size:cover;
	  padding:120px 0;
	}
	.hero-card{
	  background:rgba(255,255,255,.6);
	  backdrop-filter:blur(5px);
	  width:70%;
	  margin:auto;
	  border-radius:15px;
	  padding:40px;
	}
	.hero-card h1{color:var(--primary);}

	/* Stars */
	.stars i{color:#f5b301;}

	/* Section title */
	.section-title{
	  color:var(--primary);
	  font-weight:bold;
	  margin-bottom:30px;
	}

	/* Footer */
	footer{background:var(--primary);color:#fff;}
	footer a{color:#ddd;text-decoration:none;}
	footer a:hover{color:#fff;}
	.footer-bottom{
	  background:#cfd0d1;
	  color:#000;
	  text-align:center;
	  padding:10px;
	}



	
	</style>


</head>
<body>


	<!-- ===== NAVBAR ===== -->
	<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
	  <div class="container">
	    <a class="navbar-brand" href="<?php echo $base_url; ?>">
	      <img src="https://dummyimage.com/200x80/000/fff&text=LOGO">
	    </a>

	    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="nav">
	      <ul class="navbar-nav ms-auto align-items-lg-center">

	        <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/blog.php">Blog</a></li>

	        <li class="nav-item"><a class="nav-link" href="#">About us</a></li>

	        <li class="nav-item"><a class="nav-link" href="#">Our Services</a></li>

	        <?php if( logged_in() ): ?>
				<li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/logout.php">Logout</a></li>
			<?php else: ?>
				<li class="nav-item">
					<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
						Login
					</a>
				</li>
			<?php endif; ?>

	        <li class="nav-item ms-lg-3">
	          <button class="btn cta-btn scroll-btn">
	            <span>Reach Us Out</span>
	          </button>
	        </li>

			
	      </ul>
	    </div>
	  </div>
	</nav>

	<?php include("template-parts/auth-modal.php"); ?>
	<div style="height:120px"></div>