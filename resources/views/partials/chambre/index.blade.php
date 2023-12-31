@extends('layouts.app')

@section('content')
<div class="btn-list-end d-flex justify-content-end mb-30">
    <a href="{{route('chambrehospitalisation.index')}}" class="btn btn-primary btn-lg col-md-2  ">
       CHAMBRE_HOSPI
    </a>
   
</div>

<div class="card-box mb-30" id="tableContainer">
    <div class="pd-20">
        <h4 class="text-blue h2  ml-4 ">Data Table with multiple select row</h4>

        <button onclick="showForm()" class="btn btn-primary col-md-2 mb-4">AJOUTER</button>

    </div>
    <div class="pb-20">
        <table class="data-table table hover multiple-select-row nowrap" id="maTable">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">#</th>
                    <th class="table-plus datatable-nosort">N° CHAMBRE</th>
                    <th>ETAGE</th>
                    <th>TYPE CHAMBRE</th>
                    <th>PRIX</th>
                    <th>CREATED_AT Date</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide=1;
                @endphp
                @foreach ($chambres as $chambre)


                <tr>
                    <td>{{$ide}}</td>
                    <td class="table-plus">{{$chambre->no_chambre}}</td>
                    <td>{{$chambre->etage}}</td>
                    <td>{{$chambre->type_chambre}}</td>
                    <td>{{$chambre->prix_chambre}}</td>
                    <td>{{$chambre->created_at->diffForHumans()}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                @php
                $ide+=1;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('partials.chambre.create')
{{-- javascript --}}

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