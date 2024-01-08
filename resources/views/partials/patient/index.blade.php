@extends('layouts.app')

@section('content')
<p class="mb-4">
    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"
        target="_blank">AJOUTER</a>
</p>
<!-- Export Datatable start -->
<div class="card-box mb-30" style="overflow-x: auto;">
    <div class="pd-20">
        <h4 class="text-blue h4">LISTE DES PATIENTS</h4>
    </div>

    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">##</th>
                    <th class="table-plus datatable-nosort">MATRICULE</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>SITUATION</th>
                    <th>NOM_PERE</th>
                    <th>NOM_MERE</th>
                    <th>TEL_PREVENIR</th>
                    <th>PROVENANCE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $ide=1;
                @endphp
                @foreach ($patients as $patient)
                <tr>
                    <td>{{$ide}}</td>
                    <td class="table-plus">{{$patient->user->matricule}}</td>
                    <td>{{$patient->user->name}}</td>
                    <td>{{$patient->user->prenom}}</td>
                    <td>{{$patient->situation_familiale}}</td>
                    <td>{{$patient->nom_pere}}</td>
                    <td>{{$patient->nom_mere}}</td>
                    <td>{{$patient->tel_prevenir}} </td>
                    <td>{{$patient->provenance->province}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a  href="#" data-toggle="modal" data-target="#confirmation-modal{{$patient->id}}" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                        </div>
                    </td>
                </tr>
                @include("partials.patient.delete")
                @php
                    $ide+=1;
                @endphp
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<!-- Export Datatable End -->
@include('partials.patient.create')

@endsection