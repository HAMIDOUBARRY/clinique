<div class="pd-20 card-box mb-30" id="formContainer" style="display:none;">
    <div class="clearfix">
        <div class="pull-left">
            <h1 class="text-blue h4">AJOUTER UNE MEDECIN </h1>

            <h3 class="mb-30">Remplissez les informations ci-dessous</h3>
        </div>
    </div>
    <form action="{{route('medecin.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="matricule" class="form-label">matricule</label>
                    <input type="text" name="matricule" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="date_naissance" class="form-label">date_naissance</label>
                    <input type="date" name="date_naissance" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="prenom" class="form-label">prenom</label>
                    <input type="text" name="prenom" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="adresse" class="form-label">ADRESSE</label>
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
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="tel">tel</label>
                    <input type="tel" name="tel" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="nationalite">nationalite</label>
                    <input type="text" name="nationalite" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="profession">profession</label>
                    <input type="text" name="profession" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="sexe">SEXE </label>
                    <select id="sexe" class="form-control @error('sexe') is-invalid @enderror" name="sexe" required>
                        <option value="">VEUILLEZ CHOISIR UN SEXE</option>
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
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="service_id">SERVICE </label>
                    <select id="service_id" class="form-control @error('service_id') is-invalid @enderror" name="service_id" required>
                        <option value="">VEUILLEZ CHOISIR UN SERVICE</option>
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
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="type">TYPE </label>
                    <select id="type" class="form-control @error('type') is-invalid @enderror" name="type" required>
                        <option value="">VEUILLEZ CHOISIR UN TYPE CHAMBRE</option>
                        <option value="PATIENT">PATIENT</option>
                        <option value="MEDECIN">MEDECIN</option>
                    </select>

                    @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="specialite_id">SPECIALITE </label>
                    <select id="specialite_id" class="form-control @error('specialite_id') is-invalid @enderror" name="specialite_id" required>
                        <option value="">VEUILLEZ CHOISIR UN SPECIALITE</option>
                        @foreach ($specialites as $specialite)
                        <option value="{{$specialite->id}}">{{$specialite->type_specialite}}</option>
                        @endforeach
                    </select>

                    @error('specialite_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="footer">
            <button type="button" onclick="showTable()" class="btn btn-danger" data-dismiss="modal">
                Close
            </button>
            <button type="submit" class="btn btn-primary">
                Save changes
            </button>
        </div>
    </form>
</div>