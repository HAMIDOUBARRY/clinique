@extends("layouts.app")

@section("content")

<div class="btn-list-end d-flex justify-content-end mb-30">
    <a href="{{route('specialite.index')}}" class="btn btn-primary btn-lg col-md-2  ">
       SPECIALITE
    </a>
  
</div>

<!-- Checkbox select Datatable start -->
<div class="card-box mb-30" id="tableContainer">
    <div class="pd-20">
        <h4 class="text-blue h4">LISTES DES MEDECINS</h4>
    </div>
    <div class="btn-list-end d-flex justify-content-first mb-30">
        <a href="#" onclick="showForm()" class="btn btn-primary btn-lg   ">
            AJOUTER UN MEDECIN
        </a>
    </div>
    <div class="pb-20">
        <table class="checkbox-datatable table nowrap" id="maTable">
            <thead>
                <tr>
                    <th>
                        <div class="dt-checkbox">
                            <input type="checkbox" name="select_all" value="1" id="example-select-all" />
                            <span class="dt-checkbox-label"></span>
                        </div>
                    </th>
                    <th>MATRICULE</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>SERVICE</th>
                    <th>SPECIALITE</th>
                    <th>TELEPHONE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($medecins as $medecin)
            <tr>
                <td></td>
                <td>{{$medecin->user->matricule}}</td>
                <td>{{$medecin->user->name}}</td>
                <td>{{$medecin->user->prenom}}</td>
                <td>{{$medecin->user->email}}</td>
                <td>{{$medecin->service->nom}}</td>
                <td>{{$medecin->specialite->type_specialite}}</td>
                <td>{{$medecin->user->tel}}</td>
                <td>
                    <div class="table-actions">
                        <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                        <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                    </div>
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Checkbox select Datatable End -->
@include("partials.medecin.create")

<script>
    // Fonction pour cacher la table et afficher le formulaire
    function showForm() {
        document.getElementById('tableContainer').style.display = 'none';
        document.getElementById('formContainer').style.display = 'block';
    }

    // Fonction pour afficher la table et cacher le formulaire
    function showTable() {
        document.getElementById('tableContainer').style.display = 'block';
        document.getElementById('formContainer').style.display = 'none';
    }
</script>
@endsection