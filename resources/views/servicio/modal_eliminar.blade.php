  <!-- Modal -->
  <div class="modal fade" id="modalEliminarServicio-{{ $servicio_publico->sp_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel-{{ $servicio_publico->sp_id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('servicio.eliminar', $servicio_publico->sp_id) }}">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <h3>Confirmar eliminacion del servicio {{ $servicio_publico->sp_nom }}</h3>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
