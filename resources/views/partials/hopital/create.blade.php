


<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myLargeModalLabel">
                        HOPITALS
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('hopital.store')}}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="nom">NOM</label>
                                    <input type="text" name="nom" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="adresse">adresse</label>
                                    <input type="text" name="adresse" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="rue">rue</label>
                                    <input type="text" name="rue" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <label for="service_id">service</label>
                                <div class="form-group">
                                    <select id="service_id"
                                        class="form-control @error('service_id') is-invalid @enderror" name="service_id"
                                        required>
                                        <option value="#">VEUILLEZ CHOISIR UN PROVENANVE</option>
                                        @foreach ($services as $service)
                                        <option value="{{$service->id}}">{{$service->nom}}</option>
                                        @endforeach

                                    </select>

                                    @error('service_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="email">EMAIL</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="telephone">telephone</label>
                                    <input type="text" name="telephone" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
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