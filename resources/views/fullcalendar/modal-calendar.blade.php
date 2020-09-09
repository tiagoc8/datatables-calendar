<div class="modal fade" id="modalCalendar" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Título</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="message"></div>
        <form id="formEvent">
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Título</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="title" name="title">
                <input type="hidden" name="id">
                </div>
            </div>
            <div class="form-group row">
                <label for="start" class="col-sm-4 col-form-label">Data/hora de inicio</label>
                <div class="col-sm-8">
                <input type="text" class="form-control date-time" id="start" name="start">
                </div>
            </div>
            <div class="form-group row">
                <label for="end" class="col-sm-4 col-form-label">Data/hora de fim</label>
                <div class="col-sm-8">
                <input type="text" class="form-control date-time" id="end" name="end">
                </div>
            </div>
            <div class="form-group row">
                <label for="color" class="col-sm-4 col-form-label">Cor do Evento</label>
                <div class="col-sm-8">
                <input type="color" class="form-control" id="color" name="color">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-4 col-form-label">Descrição</label>
                <div class="col-sm-8">
                <textarea class="form-control" id="description" cols="40" rows="4" name="description"></textarea>
                </div>
            </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger deleteEvent">Apagar</button>
        <button type="button" class="btn btn-primary saveEvent">Guardar</button>
      </div>
    </div>
  </div>
</div>