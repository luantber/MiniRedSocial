

      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="<?php echo base_url() ?>material/foto.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                <!-- mensaje !-->
  <div class="row container" >
    <form class="col s12" method="POST" action="<?php  echo base_url() ?>muro/postear">
      <div class="row">
        <div class="input-field col s11">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="texto"></textarea>
          <label for="icon_prefix2" class="lobster" >Compartir Idea</label>
        </div>
      </div>

<!-- enviar !-->
      <button class="btn waves-effect waves-light " type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>

              </span>
            </div>
          </div>
        </div>
      </div>




      <div class="row container">
        <div class="col s12">
<?php 
          foreach ($res as $row) {   

?>      
          <div class="card small">
            <div class="card-image pacifico">
              <img class="" src="<?php echo base_url() ?>material/fondo.jpg">
              <span class="card-title   teal-text text-darken-4">
              <b> Posteado por: </b><?php echo $row['username'] ; ?> 
              </span>
            </div>
            <div class="card-content">
              <p><?php echo $row['texto'] ; ?></p>
            </div>
          </div>
<?php
      //print_r($row);
    }

 ?>

        </div>
      </div>

