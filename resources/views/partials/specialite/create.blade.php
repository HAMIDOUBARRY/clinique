<!-- Medium modal -->
<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        SPECIALITE
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('specialite.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="type_specialite">TYPE_SPECIALITE</label>
                                    <input type="text" name="type_specialite" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                ANNULER
                            </button>
                            <button type="submit" class="btn btn-primary">
                                ENREGISTRER
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>