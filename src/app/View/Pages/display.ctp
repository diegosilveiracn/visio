<h1 class="ls-title-intro ls-ico-home">Página Inicial</h1>

<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3">Total de Registros</h2>
  </header>

  <div id="sending-stats" class="row">
    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Pacientes</h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong><?php echo $pacientes; ?></strong>
          </span>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Consultas</h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong><?php echo $consultas; ?></strong>
          </span>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Proprietários</h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong><?php echo $proprietarios; ?></strong>
          </span>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4 color-default">Clínicas</h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong><?php echo $clinicas; ?></strong>
          </span>
        </div>
      </div>
    </div>

  </div>

</div>
