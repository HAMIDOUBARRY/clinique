<div class="pd-20 card-box mb-30" id="formContainer" style="display:none;">
    <div class="clearfix">
        <div class="pull-left">
            <h1 class="text-blue h4">AJOUTER  </h1>

            <h3 class="mb-30">Remplissez les informations ci-dessous</h3>
        </div>
    </div>
    <form action="{{route('chambrehospitalisation.store')}}" method="POST">
        @csrf

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="date_attrib" class="form-label">DATE ATTRIB</label>
                    <input type="date" name="date_attrib" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="date_liberation" class="form-label">DATE LIBERATION</label>
                    <input type="date" name="date_liberation" class="form-control" required>
                </div>
            </div>
       
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="hospitalisation_id">HOSPITALISATION </label>
                    <select id="hospitalisation_id" class="form-control @error('hospitalisation_id') is-invalid @enderror" name="hospitalisation_id" required>
                        <option value="">VEUILLEZ CHOISIR UN HOSPITALISATION</option>
                        @foreach ($hospitalisations as $hospitalisation)
                        <option value="{{$hospitalisation->id}}">{{$hospitalisation->patient->user->name}}</option>
                        @endforeach
                    </select>

                    @error('hospitalisation_id')
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
                    <label for="chambre_id">CHAMBRE </label>
                    <select id="chambre_id" class="form-control @error('chambre_id') is-invalid @enderror" name="chambre_id" required>
                        <option value="">VEUILLEZ CHOISIR UN CHAMBRE</option>
                        @foreach ($chambres as $chambre)
                        <option value="{{$chambre->id}}">{{$chambre->no_chambre}}</option>
                        @endforeach
                    </select>

                    @error('chambre_id')
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