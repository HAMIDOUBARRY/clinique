@extends("layouts.app")

@section("content")
<div class="btn-list-end d-flex justify-content-end mb-20">
    <a href="{{route('chambre.index')}}" class="btn btn-primary btn-lg col-md-2  ">
        LIST CHAMBRE
    </a>
</div>
<!-- Checkbox select Datatable start -->
<div class="card-box mb-30"  id="tableContainer">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table with Checckbox select</h4>
    </div>
    <div class="btn-list-end d-flex justify-content-first mb-30">
        <a href="#" onclick="showForm()"  class="btn btn-primary btn-lg   ">
            AJOUTER 
        </a>
    </div>
    <div class="pb-20">
        <table class="checkbox-datatable table nowrap">
            <thead>
                <tr>
                    <th>
                        <div class="dt-checkbox">
                            <input type="checkbox" name="select_all" value="1" id="example-select-all" />
                            <span class="dt-checkbox-label"></span>
                        </div>
                    </th>
                    <th>ID</th>
                    <th>Chambre</th>
                    <th>Hospitalisation</th>
                    <th>Date Attribution</th>
                    <th>Date Libération</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chambres as $chambre)
                @foreach($chambre->hospitalisations as $hospitalisation)
                    <tr>
                        <td></td>
                        <td>{{ $chambre->id }}</td>
                        <td>{{ $chambre->no_chambre }}</td>
                        <td>{{ $hospitalisation->patient->user->name}}</td>
                        <td>{{ $hospitalisation->pivot->date_attrib }}</td>
                        <td>{{ $hospitalisation->pivot->date_liberation }}</td>
                        <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Checkbox select Datatable End -->
@include("partials.chambre_hosp.create")



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