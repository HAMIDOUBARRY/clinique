<!-- Large modal -->
<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="myLargeModalLabel">
                        HOSPITALISATION
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('hospitalisation.store')}}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="type_admission">TYPE ADMISSION</label>
                                    <select name="type_admission" id="type_admission"
                                        class="form-control @error('type_admission') is-invalid @enderror" required>
                                        <option value="">VEUILLEZ CHOISIR LE TYPE ADMISSION</option>
                                        <option value="ADMISSION PROGRAMME">ADMISSION PROGRAMME</option>
                                        <option value="ADMISSION URGENCE">ADMISSION URGENCE</option>
                                        <option value="ADMISSION AMBULATOIRE">ADMISSION AMBULATOIRE</option>
                                        <option value="ADMISSION OBSERVATION MEDICALE">ADMISSION OBSERVATION MEDICALE
                                        </option>
                                        <option value="ADMISSION SOIN INTENSIF">ADMISSION SOIN INTENSIF</option>
                                        <option value="ADMISSION GERIATRIQUE">ADMISSION GERIATRIQUE</option>
                                        <option value="ADMISSION PSYSCHIATRIE">ADMISSION PSYSCHIATRIE</option>
                                        <option value="ADMISSION OBSTETRIQUE">ADMISSION OBSTETRIQUE</option>
                                        <option value="ADMISSION PEDIATRIQUE">ADMISSION PEDIATRIQUE</option>
                                        <option value="ADMISSION CHURURGIE MAJEURE">ADMISSION CHURURGIE MAJEURE</option>
                                        <option value="AUTRE ADMISSION"> AUTRE ADMISSION</option>

                                        @error('type_admission')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date">DATE ADMISSION</label>
                                    <input type="date" name="date" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="name_acc">NOM ACCOMPAGNON</label>
                                    <input type="text" name="name_acc" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="patient_id">PATIENT</label>
                                    <select name="patient_id" id="patient_id"
                                        class="form-control @error('patient_id') is-invalid @enderror" required>
                                        <option value="">VEUILLEZ SELECTIONNER VOTRE PATIENT</option>
                                        @foreach ($patients as $patient)
                                        <option value="{{$patient->id}}">{{$patient->user->name}}</option> @endforeach
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
                                    <label for="medecin_id">MEDECIN</label>
                                    <select name="medecin_id" id="medecin_id"
                                        class="form-control @error('medecin_id') is-invalid @enderror" required>
                                        <option value="">VEUILLEZ SELECTIONNER VOTRE MEDECIN</option>
                                        @foreach ($medecins as $medecin)
                                        <option value="{{$medecin->id}}">{{$medecin->user->name}}</option>
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
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="lien_parente">LIEN PARENTE</label>
                                    <input type="text" name="lien_parente" class="form-control" required />
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="motif">MOTIF</label>
                                    <input type="textarea" name="motif" required class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="date_sortie">DATE SORTIE</label>
                                    <input type="date" name="date_sortie" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="motif_sortie">MOTIF SORTIE</label>
                                    <input type="text" name="motif_sortie" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="resultat_sortie">RESULTAT SORTIE</label>
                                    <input type="text" name="resultat_sortie" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="date_deces">DATE DECES</label>
                                    <input type="date" name="date_deces"  class="form-control" optional />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="motif_deces">MOTIF DECES</label>
                                    <input type="text" name="motif_deces"  class="form-control" optional />
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