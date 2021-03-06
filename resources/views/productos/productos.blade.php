@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de productos</h1>
        <a class="btn btn-primary" href="{{ Route ('pro.agregar')}}" role="button">Crear Producto</a>
        <a class="btn btn-primary" href="{{ Route ('productos.exportar')}}" role="button">Exportar</a>
        <span></span>
        <br>
        <p></p>

        <table  id="tbproductos" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Marca</th>
              <th scope="col">Descripcion</th>
              <th scope="col">imagen</th>
              <th scope="col">Descuento</th>
              <th scope="col">Garantia</th>
              <!--<th scope="col">Usuario</th>-->
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($productos as $pro)
            <tr>
              <th scope="row">{{$pro->id_producto}}</th>
              <td>{{$pro->nombre_producto}}</td>
              <td>{{$pro->cantidad_existente}}</td>
              <td>{{$pro->valor_actual}}</td>
              <td>{{$pro->marcas_id_marcas}}</td>
              <td>{{$pro->descripcion_producto}}</td>
              <td><img src=" <?php echo ($pro['imagen_producto']) ?> " width="120" alt="" ></td>
              <td>{{$pro->descuento}}</td>
              <td>{{$pro->garantia}}</td>
              <!--<td>{{$pro->users_id}}</td>-->
              <td>
                <a class="btn btn-success btn-sm" href="{{ Route ('pro.buscar', $pro->id_producto)}}" role="button">Editar</a>
                
              </td>
            </tr>


            @endforeach
          </tbody>
        </table>
      </div>
    </div> 
@stop

@section('css')

@stop

@section('js')
<script>
$(document).ready(function() {
    $('#tbproductos').DataTable();
} );
</script>
@stop
