@extends('layouts.app')

@section('content')
<p class="mb-4">
    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"
        target="_blank">AJOUTER</a>
</p>
<!-- Checkbox select Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table with Checckbox select</h4>
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
                    <th>DATE</th>
                    <th>MEDECIN</th>
                    <th>PATIENT</th>
                    <th>SERVICE</th>
                    <th>CREATED_AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rendezvouses as $rendezvous)
                <tr>
                    <td></td>
                    <td>{{$rendezvous->date}}</td>
                    <td>{{$rendezvous->medecin->user->name}}</td>
                    <td>{{$rendezvous->patient->user->name}}</td>
                    <td>{{$rendezvous->service->nom}}</td>
                    <td>{{$rendezvous->created_at}}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
              

                @endforeach
             
            </tbody>
        </table>
    </div>
</div>
<!-- Checkbox select Datatable End -->
@include('partials.rendezvous.create')


@endsection