      <div class="row align="center" container ">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url() ?>material/fondo.jpg">
              <span class="card-title">Nombre de Usuario</span>
            </div>
            <div class="card-content">
              <p>Hola esta es mi red social.</p>
            </div>
            <div class="card-action">
              <a href="#">Editar</a>
            </div>
          </div>
        </div>
      </div>
<!-- mensaje !-->
  <div class="row">
    <form class="col s12" method="POST" action="<?php  echo base_url() ?>muro/postear">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="texto"></textarea>
          <label for="icon_prefix2">Compartir Idea</label>
        </div>
      </div>

<!-- enviar !-->
      <button class="btn waves-effect waves-light " type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>

