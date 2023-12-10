@extends("layouts.app")

@section("content")
<div class="btn-list-end d-flex justify-content-first mb-30">
    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
        ADD
    </a>

</div>
<!-- Export Datatable start -->
<div class="card-box mb-30" style="overflow-x: auto;">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table with Export Buttons</h4>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">ID</th>
                    <th class="table-plus datatable-nosort">PATIENT</th>
                    <th class="table-plus datatable-nosort">DATE</th>
                    <th>TYPE ADMISSION</th>
                    <th>MOTIF</th>
                    <th>NOM ACCOMPAGNON</th>
                    <th>LIEN PARENTE</th>
                    <th>DATE SORTIE</th>
                    <th>MOTIF SORTIE</th>
                    <th>RESULTAT SORTIE</th>
                    <th>DATE DECES</th>
                    <th>MOTIF DECES</th>
                    <th>CREATED_AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide=1
                @endphp
                @foreach ($hospitalisations as $hospitalisation)
                <tr>
                    <td>{{$ide}}</td>
                    <td class="table-plus">{{$hospitalisation->patient->user->name}}</td>
                    <td class="table-plus">{{$hospitalisation->date}}</td>
                    <td>{{$hospitalisation->type_admission}}</td>
                    <td>{{$hospitalisation->motif}}</td>
                    <td>{{$hospitalisation->name_acc}}</td>
                    <td>{{$hospitalisation->lien_parente}}</td>
                    <td>{{$hospitalisation->date_sortie}}</td>
                    <td>{{$hospitalisation->motif_sortie}}</td>
                    <td>{{$hospitalisation->resultat_sortie}}</td>
                    <td>{{$hospitalisation->date_deces}}</td>
                    <td>{{$hospitalisation->motif_deces}}</td>
                    <td>{{$hospitalisation->created_at->diffForHumans()}}</td>
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
                @php
                $ide+=1
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Export Datatable End -->
@include("partials.hospitalisation.create")
@endsection