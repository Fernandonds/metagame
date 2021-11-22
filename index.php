<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metagame</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/fontawesome/all.css">
</head>

<body>
    <header id='header'>
        <div class="logo">
            <img src="images/logo.png" alt="logo-tipo">
        </div>

        <div class="menu-icon" >
            <i class="fas fa-bars" onclick="menu()"></i>
        </div>
        

        <nav class="menu">
            <a href="#">Artigo 1<i class="fas fa-sort-down"></i></a>
            <a href="#">Artigo 2<i class="fas fa-sort-down"></i></a>
            <a href="#">Artigo 3<i class="fas fa-sort-down"></i></a>
            <a href="#">Artigo 4<i class="fas fa-sort-down"></i></a>
            <a href="#">Artigo 5<i class="fas fa-sort-down"></i></a>
            <a href="#">Artigo 6<i class="fas fa-sort-down"></i></a>
        </nav>
    </header>

    <nav class="menu-mobile" id="menu-mobile">
            <a href="#">Artigo 1</a>
            <a href="#">Artigo 2</a>
            <a href="#">Artigo 3</a>
            <a href="#">Artigo 4</a>
            <a href="#">Artigo 5</a>
        </nav>

        <?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
	}else{
		include('pages/404.php');
}
	?>

    <footer>
        <p>Todos os direitos reservados </p>
    </footer>
    
    <script src="js/all.js"></script>
    <script src="js/script.js"></script>
</body>
</html>