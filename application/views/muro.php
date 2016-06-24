      <div class="row container">
        <div class="col s12">
<?php 
          foreach ($res as $row) {   

?>      
          <div class="card small">
            <div class="card-image">
              <img class="" src="<?php echo base_url() ?>material/fondo.jpg">
              <span class="card-title grey-text darken-3"><b>Posteado por: </b><?php echo $row['username'] ; ?>
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