


      <div class="row container">
        <div class="col s12">
<?php 
          foreach ($res as $row) {   

?>      
          <div class="card small">
            <div class="card-image">
              <img class="" src="<?php echo base_url() ?>material/fondo.jpg">
              <span class="card-title   teal-text text-darken-4">
              <?php echo $this->session->username ?>
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