<?php
include "cabecalho.php";
?>
<div class="container">
    <h2>Todos os filmes</h2>
    <div class="row">
    <?php
        /*Conexão com o BD*/
        $servidor = "localhost";
        $bd = "bd_filmes";
        $usuario = "root";
        $senha = "";

        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
        if (!$conexao) {
            die("Não conectado" . mysqli_connect_error());
        }
        $sql = "select * from filmes";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= $linha['foto']; ?>" class="card-img-top img-formatada">
                <div class="card-body">
                    <h5 class="card-title"><?= $linha['titulo']; ?></h5>
                    <p class="card-text">⭐ <?= $linha['avaliacao']; ?>/10</p>
                    <a href="umfilme.php?id=<?= $linha['id'] ?>" class="btn btn-primary">Veja detalhes</a>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
    </div>
</div>
<?php include "rodape.php"; ?>
 