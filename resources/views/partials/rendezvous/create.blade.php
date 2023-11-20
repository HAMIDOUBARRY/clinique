<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myLargeModalLabel">
                        RENDEZ VOUS
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('rendezvous.store')}}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date">date</label>
                                    <input type="date" name="date" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <label for="patient_id">PATIENT</label>
                                <div class="form-group">
                                    <select id="patient_id"
                                        class="form-control @error('patient_id') is-invalid @enderror" name="patient_id"
                                        required>
                                        <option value="#">VEUILLEZ CHOISIR UN PATIENT</option>
                                        @foreach ($patients as $patient)
                                        <option value="{{$patient->id}}">{{$patient->id}}</option>
                                        @endforeach

                                    </select>

                                    @error('patient_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              
                                <label>SERVICE</label>
                                <select class="custom-select2 form-control  @error('service_id') is-invalid @enderror" name="service_id"
                                required  style="width: 100%; height: 38px">
                                    <optgroup label="SEVICE">
                                        <option value="#">VEUILLEZ</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->nom }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                                @error('service_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="medecin_id">MEDECIN</label>
                                    <div class="form-group">
                                        <select id="medecin_id"
                                            class="form-control @error('medecin_id') is-invalid @enderror"
                                            name="medecin_id" required>
                                            <option value="#">VEUILLEZ CHOISIR UN MEDECIN</option>
                                            @foreach ($medecins as $medecin)
                                            <option value="{{$medecin->id}}">{{$medecin->id}}</option>
                                            @endforeach

                                        </select>

                                        @error('medecin_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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