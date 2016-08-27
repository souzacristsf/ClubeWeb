<?php include "../../app/view/Cabecalho.html";?>
<?php require_once('../../app/model/listarSocio.php');?>
<?php require_once ('../../app/model/listarClube.php');?>
    <div class="container">
        <h2>Listar Socio</h2>
        <div class="listar">
            <form name="deletarSocio" method="post" action="../../app/model/deletarSocio.php">
                <table class="table table-bordered table-striped table-holder">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php
                        if(!empty($listaSocios)){
                            foreach($listaSocios as $listaSocio) {?>
                                <tr>
                                    <td><?=$listaSocio['nome']?></td>
                                    
                                    <td><a href="../../app/model/deletarSocio.php?id=<?=$listaSocio['id']?>&idClube=<?=$listaSocio['id_clube']?>" type="submit" name="delete" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <p class="alert alert-danger">Não há nenhum socio cadastrado</p>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    
    <script src="../../libs/jquery/jquery-3.1.0.min.js"></script>
    <script src="../../libs/js/bootstrap.min.js"></script>
</body>
</html>

