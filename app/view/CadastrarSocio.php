<?php include "../../app/view/Cabecalho.html";?>
<?php require_once('../../app/model/listarClube.php');?>


    <div class="container">

    <div>
        <!--class="cadastro"-->
        <h2>Cadastrar Socio</h2>
        <form name="cadastroSocio" method="post" action="../../app/model/cadastroSocio.php" >
            <div class="form-group">
                <label for="nomeCompleto">Nome Completo</label>
                <input type="nome" name="nome" class="form-control" id="nomeCompleto" placeholder="exemplo: Michel Souza" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="clubes" required>
                    <option value="">Selecione</option>
                        <?php foreach($resultados as $resultado) {?>
                            <option value="<?php echo $resultado['id'];?>"><?php echo $resultado['nome']?></option>
                        <?php }?>                        
                </select>
            </div>
            
            <button type="submit" class="btn btn-default">Salvar</button>
            <button type="button" class="btn btn-primary">Cancelar</button>
        </form>
    </div>

    </div>
    <script>
        function validar(){
            var inputNome = cadastroSocio.nome.value
                If(inputNome == ""){
                    alert("Preencha o campo);
                    return false;
                }
            }
    </script>
    <script src="../../libs/jquery/jquery-3.1.0.min.js"></script>
    <script src="../../libs/js/bootstrap.min.js"></script>
</body>
</html>


