<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yeni İş:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=base_url("Welcome/iskaydet")?>">
                    <div class="row">
                        <div class="form-group col-md-7">
                            <label for="recipient-name" class="col-form-label">Konu:</label>
                            <input type="text" name="konu" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="recipient-name" class="col-form-label">Başlık Renk:</label>
                            <input type="color" name="renk" value="#ecf0f1" class="form-control" id="recipient-name">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">İş Başlığı:</label>
                        <input type="text" name="isbaslik" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mesaj:</label>
                        <textarea class="form-control" name="mesaj" id="message-text"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">İşi Kaydet</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>