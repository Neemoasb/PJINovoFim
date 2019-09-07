<div id="wrapper">


  <?php require "visao/components/sidebar.php"; ?>
<div class="container-fluid  mt-4">
  <div class="col-lg-8 mb-4 align-middle m-auto">

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Cadastrar/Editar Dados</h6>
      </div>
      <div class="card-body">




        <form class="form-horizontal" action="" method="post" >
            <div class="form-group">
                <label for="codCategoria" class=" control-label">Dados sobre a Hidroponica</label>
            </div>
            <div class="form-group">
                <label for="nomeProduto" class="control-label">Nome da cidade: (Cidade)</label>
                <div>
                    <input type="text" class="form-control" name="local" id="local" placeholder="Insira a sua cidade" value="<?= @ $produto['local'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="precoProduto" class="control-label">Quantidade de Agua inserida</label>
                <div >
                    <input type="number" class="form-control" name="agua" id="agua" placeholder="Quantidade de agua colocada (em litros)" value="<?= @ $produto['agua'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="estoque" class="control-label">Quantidade de plantas Inseridas</label>
                <div>
                    <input type="number" class="form-control" name="quant" id="quant" placeholder="Quantidade de mudas colocadas" value="<?= @ $produto['quant'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="estoque" class="control-label">Telefone do usuario</label>
                <div>
                    <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Quantidade de mudas colocadas" value="<?= @ $produto['telefone'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="estoque" class="control-label">Email do usuario</label>
                <div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu email" value="<?= @ $produto['email'] ?>">
                </div>
            </div>

            <div class="form-group m-auto">
                <div>
                    <button type="submit" class="btn btn-block btn-outline-success">Salvar configurações</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>


  <?php require "visao/components/footer.php"; ?>
</div>
</div>
