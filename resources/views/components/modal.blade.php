<div class="modal fade" id="save" tabindex="-1" aria-labelledby="saveLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @if (isset($task))
                    <h1 class="modal-title fs-5" id="saveLabel">Editar tarefa</h1>
                @else
                    <h1 class="modal-title fs-5" id="saveLabel">Nova tarefa</h1>
                @endif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @yield('form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
