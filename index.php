<!-- JULIOROBALVA -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f7e67d00d0.js" crossorigin="anonymous"></script>
<!-- Bootswatch cnd Cyborg , -->




<!-- Nav -->

<div class="jumbotron">
  <h1 align="center" class="display-3">Big 5</h1>
  <p align="center" class="lead">Diseñado para ingresar 5 numeros y ordenarlos de  <a href="#">Mayor a Menor</a> junto a su  <a href="#">Promedio</a> </p>
  <hr class="my-4">
  <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p align="center">Puedes ingresar los numeros que quieras en <strong>caja de texto</strong> y darle al<strong>boton</strong> para obtener los numeros de mayor a menor  .</p>
</div>



<!-- Inicio de Procesos -->
<form method="POST" action="ordenar.php">

<table class="table table-hover">
  <thead>
  <tr class="table-light">
      <th scope="col">Numero 1</th>
      <th scope="col">Numero 2</th>
      <th scope="col">Numero 3</th>
      <th scope="col">Numero 4</th>
      <th scope="col">Numero 5</th>
    </tr>
  </thead>

  <tbody>
    <tr class="table-active">
      <td><input type="number" min="0" class="form-control"type="text" name="numero1" id="numero1"></td>
      <td><input type="number" min="0"class="form-control" type="text" name="numero2" id="numero2"></td>
      <td><input type="number" min="0" class="form-control" type="text" name="numero3" id="numero3"></td>
      <td><input type="number" min="0" class="form-control" type="text" name="numero4" id="numero4"></td>
      <td><input type="number" min="0" class="form-control" type="text" name="numero5" id="numero5"></td>
    </tr>
  </tbody>
</table>
<button type="submit"  class="btn btn-primary btn-lg btn-block" >Ejecutar </button>

</form>

<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Atencion!</h4>
  <p class="mb-0">Solo puedes ingresar <a href="#" class="alert-link">NUMEROS</a> ya que otra forma de caracter no se podra ingresar.</p>
</div>