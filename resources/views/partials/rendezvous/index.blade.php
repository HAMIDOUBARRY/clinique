@extends('layouts.app')

@section('content')
<p class="mb-4">
    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"
        target="_blank">AJOUTER</a>
</p>
<!-- Checkbox select Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">LISTES DES RDV</h4>
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
                    <th>DATE</th>
                    <th>MEDECIN</th>
                    <th>PATIENT</th>
                    <th>SERVICE</th>
                    <th>CREATED_AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide=1;
                @endphp
                @foreach ($rendezvouses as $rendezvous)
                <tr>
                    <td></td>
                    <td>{{$ide}}</td>
                    <td>{{$rendezvous->date}}</td>
                    <td>{{$rendezvous->medecin->user->name}}</td>
                    <td>{{$rendezvous->patient->user->name}}</td>
                    <td>{{$rendezvous->service->nom}}</td>
                    <td>{{$rendezvous->created_at->diffForHumans()}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#34a853"><i class="icon-copy dw dw-eye"></i></a>
                            <a href="#" data-toggle="modal" data-target="#confirmation-modal{{$rendezvous->id}}"
                                data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @include("partials.rendezvous.delete")
                @php
                $ide+=1;
                @endphp

                @endforeach

            </tbody>
        </table>
    </div>
</div>
<!-- Checkbox select Datatable End -->
@include('partials.rendezvous.create')


@endsection