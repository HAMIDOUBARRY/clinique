<!-- Large modal -->
<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="myLargeModalLabel">
                        CONSULTATION
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('consultation.store')}}" method="POST">
                        
                        @csrf

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date">DATE</label>
                                    <input type="date" name="date" id="date" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for=""> DEBUT </label>
                                    <input type="time" name="debut" id="debut" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for=""> FIN </label>
                                    <input type="time" name="fin" id="fin" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>PATIENT</label>
                                    <select name="patient_id" id="patient_id"
                                        class="form-control @error('patient_id') is-invalid @enderror">
                                        <option value="">VEUILLEZ CHOISIR VOTRE PATIENT</option>
                                        @foreach ($patients as $patient)
                                        <option value="{{$patient->id}}">{{$patient->user->matricule}}</option>

                                        @endforeach
                                        @error('patient_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>MEDECIN</label>
                                    <select name="medecin_id" id="medecin_id"
                                        class="form-control @error('medecin_id') is-invalid @enderror">
                                        <option value="">VEUILLEZ CHOISIR VOTRE MEDECIN</option>
                                        @foreach ($medecins as $medecin)
                                        <option value="{{$medecin->id}}">{{$medecin->user->matricule}}</option>

                                        @endforeach
                                        @error('medecin_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">SYNTHESE</label>
                                    <input type="text" name="synthese" id="synthese" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>TYPE CONSULTATION</label>
                                    <select name="typeconsultation_id" id="typeconsultation_id"
                                    class="form-control @error('typeconsultation_id') is-invalid @enderror">
                                    <option value="">VEUILLEZ CHOISIR VOTRE TYPE_CONSULTATION</option>
                                    @foreach ($typeconsultations as $typeconsultation)
                                    <option value="{{$typeconsultation->id}}">{{$typeconsultation->type_consultation}}</option>

                                    @endforeach
                                    @error('typeconsultation_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>                                </div>
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