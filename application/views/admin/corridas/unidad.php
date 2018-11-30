<!-- Diseño del autobus -->
<div class="col-md-12">
  <div class="scroll">
    <div class="contenedor">
      <img src="<?= base_url() ?>assets/img/buss.png" width="700"><br><br><br>
      <!-- Asientos del lado del conductor -->
      <table class="asiento-front">
        <?php for ($i = 1; $i < 3; $i++) { ?>
          <tr>
            <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px"><?= $i ?></td>
          </tr>                          
        <?php } ?>
      </table>
      <!-- Asientos solos del lado de la puerta -->
      <table class="asiento-left">
        <tr>
          <?php for ($i= 1; $i < 4; $i++) {  ?>
          <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px"><?= $i ?></td>
          <?php } ?>
        </tr>
      </table>
      <!-- asientos en pares -->
      <table class="texto-encima">
        <?php for ($i = 1; $i < 3; $i++) { ?>
          <tr>
            <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
            <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px">2</td>
            <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px">3</td>
            <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px">4</td>
         </tr>                          
        <?php } ?>
      </table>
      <!-- asientos traseros 4 -->
      <table class="asiento-atras">
        <?php for ($i= 1; $i < 5; $i++) { ?>
          <tr>
            <td style="background: url('assets/img/asiento.jpg') no-repeat center center;background-size:50px"><?= $i ?></td>
          </tr>  
        <?php } ?>
      </table>

    </div>                    
  </div>
</div>