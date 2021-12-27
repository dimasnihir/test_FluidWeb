 <!DOCTYPE html>

 <html>

 <head>
 <link rel="shortcut icon" href="../../images/link.svg" />
  <title>shortener</title>




 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 	<link href="../../css/main.css" rel="stylesheet">
 	<link rel="preconnect" href="https://fonts.googleapis.com">
 	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	<link rel="preconnect" href="https://fonts.googleapis.com">
 	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
 </head>

 <body>
 	<!--  #DBD7D2 -->
 	<header style="height: 10vh;">
 		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size:20px; font-family: 'Nunito', sans-serif; font-weight:300">
 			<div class="container">
 				
 					<a class="navbar-brand" href="/create">
 						<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
 							<path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
 							<path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
 						</svg>
 						URL shortener</a>

 				
 				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 					<span class="navbar-toggler-icon"></span>
 				</button>
 				<div class="collapse navbar-collapse" id="navbarSupportedContent">
 					<ul class="navbar-nav me-auto mb-2 mb-lg-0">




 					</ul>

 					<a href="/administrator"><button class="btn btn-outline-success" type="submit">Admin</button></a>

 				</div>
 			</div>
 		</nav>
 	</header>


 	<?php include 'application/views/' . $content_view; ?>


 </body>

 </html>