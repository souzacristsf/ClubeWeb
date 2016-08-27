<?php include "../../app/view/Cabecalho.html";?>
    <div class="container">

      <div>
          <!--class="cadastro"-->
        <h2>Cadastrar Clube</h2>
        <form name="cadastroClube" method="post" action="../../app/model/cadastroClube.php">
            <div class="form-group">
                <label for="nomeClube">Nome Clube</label>
                <input type="nome" name="nome" class="form-control" id="nomeClube" placeholder="exemplo: Flamengo">
            </div>
            <button type="submit" class="btn btn-default">Salvar</button>
            <button type="button" class="btn btn-primary">Cancelar</button>
        </form>
      </div>
    </div>
    
    <script src="../../libs/jquery/jquery-3.1.0.min.js"></script>
    <script src="../../libs/js/bootstrap.min.js"></script>
  </body>
</html>
