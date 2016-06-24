

  <div class="row container">
    <form class="col s12" method="POST" action="<?php echo base_url() ?>usuarios/registrar">

      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Ingrese nombre de usuario" id="user_name" type="text" class="validate" name="username">
          <label for="user_name">Nombre Usuario</label>
        </div>
        
         
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="Ingrese contraseña" type="password" class="validate" name="password">
          <label for="password">Contraseña</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
