<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade" id="confirmation-modal{{$hospitalisation->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h4 class="padding-top-30 mb-30 weight-500">
                        ETES-VOUS SÛR DE VOULOIR SUPPRIMER</h4>
                    <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                        <div class="col-6">
                            <button type="button" class="btn btn-danger border-radius-100 btn-block confirmation-btn"
                                data-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            NON
                        </div>
                        <div class="col-6">
                            <form id="delete-form" action="{{ route('hospitalisation.destroy', $hospitalisation->id) }}"
                                method="POST">

                                @csrf
                                
                                @method('DELETE')

                                <button type="submit"
                                    class="btn btn-success border-radius-100 btn-block confirmation-btn">
                                    <i class="fa fa-check"></i>
                                </button>
                                OUI
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>