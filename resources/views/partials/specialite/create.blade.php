<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
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
                    <form action="{{route('specialite.store')}}" method="POST">

                        @csrf


                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label" for="type_specialite">SPECIALITE</label>
                            <input type="text" name="type_specialite" class="form-control" required>


                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>