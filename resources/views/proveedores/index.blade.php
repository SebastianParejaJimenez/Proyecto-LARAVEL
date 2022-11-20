@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Proveedores</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-info" href="{{ route('proveedores.create') }}">Agregar Nuevo Proveedor</a>

                            <table class="table table-stripped mt-2">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                @foreach($proveedores as $proveedor)
                                    <tr>
                                        <td>{{$proveedor->id}}</td>
                                        <td>{{$proveedor->nombre}}</td>
                                        <td>{{$proveedor->telefono}}</td>
                                        <td>{{$proveedor->direccion}}</td>

                                        <td>
                                        <a href="{{ route('proveedores.edit',$proveedor->id) }}" class="btn btn-info" >Editar</a>
                                        <form action="{{ route('proveedores.destroy',$proveedor->id) }}" method="POST" class="formulario-eliminar" style="display: inline;">
                                                @can('editar-proveedor')
                                                @endcan
                                                @csrf

                                                @method('DELETE')
                                                @can('borrar-proveedor')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                                @endcan

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $proveedores->links() !!}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>

@if(session('eliminado')== "ok")
<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Eliminado con Exito!',
  showConfirmButton: false,
  timer: 900
})

</script>
@endif

    <script>

$('.formulario-eliminar').submit(function(e){
e.preventDefault();

Swal.fire({
  title: 'Estas Seguro de Eliminar el Proveedor?',
  text: "No podras recuperarlo si lo eliminas.",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Confirmar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
}) 

        });

    </script>

@endsection