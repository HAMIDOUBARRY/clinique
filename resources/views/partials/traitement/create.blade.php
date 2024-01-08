<!-- Large modal -->
<div class="col-md-4 col-sm-12 mb-30">
    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        TRAITEMENT
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route("traitement.store")}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="date">DATE</label>
                                    <input type="date" name="date" id="date" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="prix">PRIX</label>
                                    <input type="number" name="prix" id="prix" class="form-control" required/>
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>CLINIQUE</label>
                                    <select name="hopital_id" id="hopital_id"
                                        class="form-control @error('hopital_id') is-invalid @enderror">
                                        <option value="">VEUILLEZ CHOISIR VOTRE HOPITAL</option>
                                        @foreach ($hopitals as $hopital)
                                        <option value="{{$hopital->id}}">{{$hopital->nom}}</option>

                                        @endforeach
                                        @error('hopital_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>HOSPITALISATION</label>
                                <select name="hospitalisation_id" id="hospitalisation_id"
                                    class="form-control @error('hospitalisation_id') is-invalid @enderror">
                                    <option value="">VEUILLEZ CHOISIR VOTRE HOSPITALISATION</option>
                                    @foreach ($hospitalisations as $hospitalisation)
                                    <option value="{{$hospitalisation->id}}">{{$hospitalisation->patient->user->matricule}}
                                    </option>

                                    @endforeach
                                    @error('hospitalisation_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="type_examen">TYPE EXAMEN</label>
                                    <select name="type_examen" id="type_examen"
                                        class="form-control @error('type_examen') is-invalid @enderror">
                                        <option value="">VEUILLEZ SELECTIONNER EXAMEN</option>
                                        <option value="examen_biologie">Examen de biologie</option>
                                        <option value="examen_radiologie">Examen de radiologie</option>
                                        <option value="chirurgie">Chirurgie</option>
                                    </select>
                                </div>
                                <div class="form-group" id="champs_examen_biologie" style="display: none;">

                                    <label for="groupe_sanguin">Groupe sanguin :</label>
                                    <input type="text" name="groupe_sanguin" id="groupe_sanguin" class="form-control" optional>
                                    <label for="litre_sang">Litre de sang :</label>
                                    <input type="text" name="litre_sang" id="litre_sang" class="form-control" optional>
                                    <!-- Ajoutez d'autres champs spécifiques à l'examen de biologie ici -->

                                </div>
                                <div class="form-group" id="champs_examen_radiologie" style="display: none;">

                                    <label for="resultat_radiologie">Résultat de l'examen de radiologie :</label>
                                    <input type="text" name="resultat_radiologie" id="resultat_radiologie"
                                        class="form-control" optional>
                                    <label for="image_radiologie">Image de radiologie :</label>
                                    <input type="text" name="image_radiologie" id="image_radiologie"
                                        class="form-control" optional>
                                    <!-- Ajoutez d'autres champs spécifiques à l'examen de radiologie ici -->

                                </div>

                                <div class="form-group">
                                    <div id="champs_chirurgie" style="display: none;">
                                        <label for="anesthesie">Type d'anesthésie :</label>
                                        <input type="text" name="anesthesie" id="anesthesie" class="form-control" optional>
                                        <!-- Ajoutez d'autres champs spécifiques à la chirurgie ici -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                ANNULLER
                            </button>
                            <button type="submit" class="btn btn-primary">
                                ENREGISTER
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>