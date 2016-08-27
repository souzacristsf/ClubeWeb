<?php include "../../app/view/Cabecalho.html";?>
<?php require_once('../../app/model/listarClube.php');?>

    <div class="container">
        <h2>Listar Clube</h2>
        <div class="listar">
            <table class="table table-bordered table-striped table-holder">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
             <?php
                if(!empty($resultados)){
                    foreach($resultados as $resultado) {?>
                        <tr>
                            <td><?=$resultado['nome']?></td>
                            
                            <td><a href="../../app/model/deletarClube.php?id=<?=$resultado['id']?>&idClube=<?=$resultado['id_clube']?>" type="submit" name="delete" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a></td>
                        </tr>
                    <?php }
                } else { ?>
                    <p class="alert alert-danger">Não há nenhum clube cadastrado</p>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    
    <script src="../../libs/jquery/jquery-3.1.0.min.js"></script>
    <script src="../../libs/js/bootstrap.min.js"></script>
</body>
</html>

