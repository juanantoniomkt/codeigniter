
<div class="container">

<br>

<div class="row">
    <form action="" method="post" class="col s12">
    
    <?php foreach ($motos as $moto){ ?>

      <div class="row">
        <div class="input-field col s12">
          <input value="<?=$moto->modelo?>" name="modelo" type="text" class="validate">
          <label for="modelo">Modelo</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input value="<?=$moto->precio?>" placeholder="Placeholder" name="precio" type="number" class="validate">
          <label for="precio">Precio</label>
        </div>
        <div class="input-field col s6">
          <input value="<?=$moto->entrada?>" id="entrada" type="number" class="validate">
          <label for="entrada">Entrada</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input value="<?=$moto->descripcion?>" name="descripcion" type="text" class="validate">
          <label for="descripcion">Descripción</label>
        </div>
      </div>

      <?php } ?>


    <input type="submit" class="waves-effect waves-light btn-large" name="submit" value="Modificar">


    </form>
  </div>

</div>