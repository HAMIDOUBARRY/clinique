<div class="pd-20 card-box mb-30"  id="formContainer" style="display:none;" >
    <div class="clearfix">
        <div class="pull-left">
            <h1 class="text-blue h4">AJOUTER UNE CHAMBRE </h1>
            
            <h3 class="mb-30">Remplissez les informations ci-dessous</h3>
        </div>
    </div>
    <form action="{{route('chambre.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="etage" class="form-label">ETAGE</label>
                    <input type="text" name="etage" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="no_chambre" class="form-label">N°CHAMBRE</label>
                    <input type="text" name="no_chambre" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="prix_chambre">PRIX</label>
                    <input type="number" name="prix_chambre" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="type_chambre">TYPE CHAMBRE</label>
                    <select id="type_chambre" class="form-control @error('type_chambre') is-invalid @enderror"
                    name="type_chambre" required>
                    <option value="">VEUILLEZ CHOISIR UN TYPE CHAMBRE</option>
                    <option value="chambre climatise">CHAMBRE CLIMATISE</option>
                    <option value="chambre vip">CHAMBRE VIP</option>
                    <option value="chambre simple">CHAMBRE SIMPLE</option>
                </select>

                @error('type_chambre')
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

							