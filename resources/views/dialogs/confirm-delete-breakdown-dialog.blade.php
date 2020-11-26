<!-- Logout Modal-->
<div class="modal fade" id="deleteBreakdownModal{{ $breakdown->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar registro de avarias?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">O registo da avaria <b>'{{ $breakdown->reason }}'</b> será deletado, confirma?.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <span>
                    <a class="btn btn-primary" href="/breakdowns/{{ $breakdown->id }}"
                       onclick="event.preventDefault();document.getElementById('delete-breakdown-form').submit();"
                    >
                        Confirmo
                    </a>
                    <form id="delete-breakdown-form" action="/breakdowns/{{ $breakdown->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </span>
            </div>
        </div>
    </div>
</div>
