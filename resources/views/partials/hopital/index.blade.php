@extends('layouts.app')

@section('content')
<style>
    .custom-table th,
    .custom-table td {
        font-size: 100%;
    }
</style>
<p class="mb-4">
    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"
        target="_blank">AJOUTER</a>
</p>
<div class="card-box w-100" style="overflow-x: auto;">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table with Export Buttons</h4>
    </div>

    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap custom-table " >
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort ">NOM</th>
                    <th>ADRESSE</th>
                    <th>RUE</th>
                    <th>TELEPHONE</th>
                    <th>EMAIL</th>
                    <th>SERVICE</th>
                    <th>CREATED_AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hopitals as $hopital)
                <tr>
                    <td class="table-plus">{{$hopital->nom}}</td>
                    <td>{{$hopital->adresse}}</td>
                    <td>{{$hopital->rue}}</td>
                    <td>{{$hopital->telephone}}</td>
                    <td>{{$hopital->email}}</td>
                    <td>{{$hopital->service->nom}}</td>
                    <td>{{$hopital->created_at}}</td>

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
  @include('partials.hopital.create')
@endsection