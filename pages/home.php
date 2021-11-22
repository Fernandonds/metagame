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
                    </div><!--box-->

            <?php

                for ($c=0; $c < 9; $c++){
                    echo  "
                    <div class='box'>
                    <img src='images/imagem-teste.jpg'>
                    <h3>Título</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, optio perspiciatis aliquam eligendi molestiae beatae nobis. Quos, maiores voluptate? Culpa, alias. Eius recusandae velit eligendi dolores cum hic quae vitae.</p>
                    <button class='btn-articles'>Ler mais...</button>
                    <div class='border-bottom'></div>
                    </div><!--box-->
                    ";
                }
            ?>

        </div><!--box-articles-->

        </main> <!--container-->