<img src="imgs/degradado.png"  style="opacity: 0.4;" alt="" width="102%" height="20">
      <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
        <table class="text-white" style="border-spacing: 30px;">
          <td>
            <img src="imgs/logoAzul.png"  style="opacity: 0.5;  padding: 15px;" alt="" width="100" height="100">
          </td>
          <td>
            <h1 class="font-family: cursive;">
              <i>
                <font color="orange"> 
                  <big><big>
                     Poli-Waiter            
                  </big> </big> 
                </font>  
              </i>
            </h1>
          </td>
          </table>
      </div>
    <img src="imgs/degradado.png"  style="opacity: 0.4;" alt="" width="102%" height="20">
    <br>
    <br>
    <h1 class="font-family: cursive;">
      <font color="orange"> 
    
          Ingredientes
    
    </font> 
    </h1>
    <br>
    <br>

<table class=" table text-center text-white" id="hey"
style=" border-spacing: 8px; border: 1px solid rgb(221, 84, 5);margin-left: auto;
margin-right: auto; background-color:rgba(224, 122, 26, 0.664); opacity:0.4;">
    <tr>
        <th scope="col" style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">ID</th>
        <th scope="col" style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">Descripcion</th>
        <th scope="col" style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">Precio de Venta</th>
        <th scope="col" style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">Ingrediente Extra</th>
        <th scope="col" style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">Disponibilidad</th>
    </tr>
    @foreach($consultaIngredientes as $ingrediente)
        <tr>
            <td scope="row" style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">{{$ingrediente->id}}</td>
            <td style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">{{$ingrediente->descripcion}}</td>
            <td style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">{{$ingrediente->precioVenta}}</td>

            @if($ingrediente->ingredienteExtra == 1)
                <td style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">Si</td>
            @endif
            @if($ingrediente->ingredienteExtra == 0)
                <td style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">No</td>
            @endif
            @if($ingrediente->disponibilidad == 1)
            <td style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">Si</td>
        @endif
        @if($ingrediente->disponibilidad == 0)
            <td style="padding: 4px;  border: 1px solid rgb(221, 84, 5);">No</td>
        @endif


        </tr>
    @endforeach



</table>
<br>
<br>
<br>
<br>
<br>
<footer>
  <p class="font-family: cursive;" style="text-align: right">
    <i>
      <font color="orange" >
        <big>
            Poli-Waiter  CopyRight®
        </big>  
      </font>
    </i>

  </p>
</footer>