<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>
    <div class="lista-filmes">
        <div class="row mb-5">
            <?php
            /* inicio da conexão com o BD */
            $servidor = 'localhost';
            $bd = 'bd_filmes';
            $usuario = 'root';
            $senha = '';

            $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
            if(!$conexao){
                die("deu ruim".mysqli_connect_error());

            }
            /* Fim da Conexão */

            $sql = "select * from filmes";
            $resultado = mysqli_query($conexao, $sql);
            
            // echo "<pre>";
            // print_r($resultado);
            // exit();
            while($linha = mysqli_fetch_assoc($resultado)){
                ?>
                <div class="col-3">
                    <img src=<?=$linha['foto'];?> class="img-fluid">
                    <h3><?=$linha['titulo'];?></h3>
                    <span>⭐ <?=$linha['avaliacao'];?>/10</span>
                </div>
            <?php
            }
            ?>

            
            
        </div>
    </div>
    <div class="row ">
        <div class="col-6">
            <img src="img/banner.jpg" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p class="fs-5 fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus non velit officia, placeat illum beatae quia modi perspiciatis ex ratione! Modi nostrum enim perferendis nulla saepe veritatis nemo dolorem rerum!
                <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
            </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6 align-content-center">
            <p class="fs-5 fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus non velit officia, placeat illum beatae quia modi perspiciatis ex ratione! Modi nostrum enim perferendis nulla saepe veritatis nemo dolorem rerum!
                <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
            </p>
        </div>
        <div class="col-6">
            <img src="img/filme5.jpg" class="img-fluid">
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btg-lg mt-5 fs-5 fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        Precisa de ajuda? Clique aqui!
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda 🧠</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Entre em contato através dos nossos canais de comunicação</p>
                    <p>E-mail: filme@filme.com.br <br> Whatsapp: (11)99999-9999 <br> <a href="contato.php"> Formulário de contato</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal
    <button type="button" class="btn btn-warning mt-5" data-bs-toggle="modal" data-bs-target="#meuModal">
        Clique aqui!
    </button>
        meu modal
    <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Exemplo de Modal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Olá, esse é o meu modal
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?> -->