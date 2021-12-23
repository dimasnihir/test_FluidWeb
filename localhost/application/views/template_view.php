 <!DOCTYPE html>

 <html>

 <head>



 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 	<link href="../../css/main.css" rel="stylesheet">
 </head>

 <body>
 	<!--  #DBD7D2 -->
 	<header>
 		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 			<div class="container">
 				<div class="navbar-brand">URL shortener</div>
 				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
 					<span class="navbar-toggler-icon"></span>
 				</button>
 				<div class="collapse navbar-collapse" id="navbarText">
 					<ul class="navbar-nav">
 						<li class="nav-item">
 							<a class="nav-link" aria-current="page" href="/create/">Create</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link" href="/administrator/">Administrator</a>
 						</li>

 					</ul>

 				</div>
 			</div>
 		</nav>
 		</div>
 	</header>
 	
 	<?php include 'application/views/' . $content_view; ?>


 </body>

 </html>