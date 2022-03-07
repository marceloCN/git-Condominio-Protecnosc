  <!-- Modal -->
  <div class="modal fade" id="modalEliminarUsuario-{{ $usuario->u_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel-{{ $usuario->u_id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('usuario.eliminarResidente', $usuario->u_id) }}">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <h3>Confirmar eliminacion del usuario {{ $usuario->u_nom }} {{ $usuario->u_app }}</h3>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
