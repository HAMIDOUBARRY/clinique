@extends("layouts.app")

@section("content")
<div class="btn-list-end d-flex justify-content-end mb-20">
    <a href="{{route('medecin.index')}}" class="btn btn-primary btn-lg col-md-2  ">
       LISTE DES MEDECINS
    </a>
</div>
<!-- Checkbox select Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table with Checckbox select</h4>
    </div>
    <div class="btn-list-end d-flex justify-content-first mb-30">
        <a href="#" class="btn btn-primary btn-lg   " data-toggle="modal" data-target="#small-modal" type="button" >
            AJOUTER UN SPECIALITE
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
                    <th>TYPE SPECIALITE</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
               @php
                   $ide=1;
               @endphp
                @foreach ($specialites as $specialite)
                <tr>
                    <td></td>
                    <td>{{$ide}}</td>
                    <td>{{$specialite->type_specialite}}</td>
                    <td>{{$specialite->created_at->diffForHumans()}}</td>
                    <td>{{$specialite->updated_at->diffForHumans()}}</td>
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
<!-- Checkbox select Datatable End -->
@include("partials.specialite.create")
@endsection