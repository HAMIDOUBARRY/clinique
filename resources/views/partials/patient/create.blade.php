<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myLargeModalLabel">
                        UTILISATEUR
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('patient.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="situation_familiale">SITUATION</label>
                                    <input type="text" name="situation_familiale" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="nom_pere">NOM_PERE</label>
                                    <input type="text" name="nom_pere" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="nom_mere">nom_mere</label>
                                    <input type="text" name="nom_mere" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="tel_prevenir">tel_prevenir</label>
                                    <input type="text" name="tel_prevenir" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <label for="provenance_id">PROVENANCE</label>
                                <div class="form-group">
                                    <select id="provenance_id"
                                        class="form-control @error('provenance_id') is-invalid @enderror"
                                        name="provenance_id" required>
                                        <option value="#">VEUILLEZ CHOISIR UN PROVENANVE</option>
                                        @foreach ($provenances as $provenance)
                                        <option value="{{$provenance->id}}">{{$provenance->province}}</option>
                                        @endforeach

                                    </select>

                                    @error('provenance_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="matricule">matricule</label>
                                    <input type="text" name="matricule" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="prenom">prenom</label>
                                    <input type="text" name="prenom" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date_naissance">DATE_NAISSANCE</label>
                                    <input type="date" name="date_naissance" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="sexe">sexe</label>
                                    <select id="sexe" class="form-control @error('sexe') is-invalid @enderror"
                                        name="sexe" required>
                                        <option value="">VEUILLEZ CHOISIR SEXE</option>
                                        <option value="HOMME">HOMME</option>
                                        <option value="FEMME">FEMME</option>
                                    </select>

                                    @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="adresse">ADRESSE</label>
                                    <input type="text" name="adresse" class="form-control" required>
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
                                    <label for="password">PASSWORD</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="tel">TELEPHONE</label>
                                    <input type="text" name="tel" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="nationalite">NATIONALITE</label>
                                    <input type="text" name="nationalite" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="profession">PROFESSION</label>
                                    <input type="text" name="profession" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <label for="type">Type</label>

                                <div class="form-group">
                                    <select id="type" class="form-control @error('type') is-invalid @enderror"
                                        name="type" required>
                                        <option value="">VEUILLEZ CHOISIR UN TYPE</option>
                                        <option value="patient">Patient</option>
                                        <option value="medecin">Médecin</option>
                                    </select>

                                    @error('type')
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