<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<header>
		<h1 class="judul">LOGIN</h1>
		<p class="deskripsi"> Masukkan Username dan Password anda</p>
	</header>

	<div class="wrap"></div>

		<div class="blog">
			<div class="conteudo">
				<form action="check.php" method="post">
					<div class="imgcontainer">
						<div class="container">

						<label><b>Username</b></label>
							<input type="text" placeholder="Masukkan Username" name="username" value="<?=isset($_POST['username']) ? $_POST['username'] : ''?>"/>					
						<label><b>Password</b></label>
					<input type="password" placeholder="Masukkan Password" name="password" value="<?=isset($_POST['password']) ? $_POST['password'] : ''?>"/>
					
						<button type="submit" name="submit">LOGIN</button>
   						 
  					</div>
				</form>

			
</body>
</html>