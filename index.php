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

        <main class="container">
            <a href="#">Home</a>
    
            <p>Artigos</p>
       
            <div class="box-articles">
    
            <div class='box'>
                        <img src='images/imagem-teste.jpg'>
                        <h3>Título</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, optio perspiciatis aliquam eligendi molestiae beatae nobis. Quos, maiores voluptate? Culpa, alias. Eius recusandae velit eligendi dolores cum hic quae vitae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem porro odit officia aliquid et molestiae iusto exercitationem quis, dicta explicabo deleniti quod quaerat at asperiores ducimus eaque perferendis nesciunt illum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, veniam! Quos modi, in voluptatibus vitae corrupti minus accusantium aspernatur repellendus perferendis est quas nesciunt soluta officiis sed tempora earum facere.</p>
                        <button class='btn-articles'>Ler mais...</button>
                        <div class='border-bottom'></div>
                        </div>
                        <!--box-->
            
            <?php

                for($c = 1; $c < 5; $c++){
                    echo "
                    <div class='box'>
                    <img src='images/imagem-teste.jpg'>
                    <h3>Título</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, optio perspiciatis aliquam eligendi molestiae beatae nobis. Quos, maiores voluptate? Culpa, alias. Eius recusandae velit eligendi dolores cum hic quae vitae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem porro odit officia aliquid et molestiae iusto exercitationem quis, dicta explicabo deleniti quod quaerat at asperiores ducimus eaque perferendis nesciunt illum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, veniam! Quos modi, in voluptatibus vitae corrupti minus accusantium aspernatur repellendus perferendis est quas nesciunt soluta officiis sed tempora earum facere.</p>
                    <button class='btn-articles'>Ler mais...</button>
                    <div class='border-bottom'></div>
                    </div>
                    <!--box-->
                    ";
                }
            ?>
    
            </div><!--box-articles-->
    
            </main> <!--container-->

    <footer>
        <p>Todos os direitos reservados </p>
    </footer>
    
    <script src="js/all.js"></script>
    <script src="js/script.js"></script>
</body>
</html>