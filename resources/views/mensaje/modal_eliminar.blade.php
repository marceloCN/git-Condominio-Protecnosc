  <!-- Modal -->
  <div class="modal fade" id="modalEliminarMensaje-{{ $mensaje->m_id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel-{{ $mensaje->m_id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('mensaje.eliminar', $mensaje->m_id) }}">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <h3>Confirmar eliminacion del mensaje</h3>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>
