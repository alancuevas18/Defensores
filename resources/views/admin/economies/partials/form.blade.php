<div class="form-group">

    {{ Form::label('name', 'Categorias') }}
    <select name="name" class="form-control">
        <option value="Dolar Venta">Dolar Venta</option>
        <option value="Dolar Compra">Dolar Compra</option>
        <option value="Euro Venta">Euro Venta</option>
        <option value="Euro Compra">Euro Compra</option>
        <option value="Gasolina Premiun">Gasolina Premiun</option>
        <option value="Gasolina Regular">Gasolina Regular</option>
        <option value="Diesel Premiun">Diesel Premiun</option>
        <option value="Diesel Regular">Diesel Regular</option>
        <option value="Gas Propano">Gas Propano</option>
        <option value="Gas Natural">Gas Natural</option>
    </select>
</div>
<div class="form-group">
    {{ Form::label('Precio', 'Precio') }}
   <input type="text" name="price" class="form-control">
</div>
<div class="form-group">
    {{ Form::label('estatus', 'Categorias') }}
    <select name="estatus" class="form-control">
        <option value="sube">Aumento de Precio</option>
        <option value="baja">Disminuyo su precio</option>
        <option value="igual">Precio queda igual</option>
    </select>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
