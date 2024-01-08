@extends("layouts.app")

@section("content")

<div class="card-box mb-40">
    <div class="pd-20">
        <h4 class="text-green h2">UTILISATEUR</h4>
        <p class="mb-0">
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"
                target="_blank">AJOUTER</a>
        </p>
    </div>
    <div class="pb-20" style="overflow-x: auto;">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">##</th>
                    <th class="table-plus datatable-nosort">MATRICULE</th>
                    <th>NAME</th>
                    <th>PRENOM</th>
                    <th>DATE_NAISSANCE</th>
                    <th> ADRESSE</th>
                    <th> EMAIL</th>
                    <th> CREATED_AT</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide=1;
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td class="table-plus">{{$ide}}</td>
                    <td class="table-plus">{{$user->matricule}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->date_naissance}}</td>
                    <td
                        style="display: inline-block;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;max-width: 10ch;">
                        {{$user->adresse}}</td>
                    <td style="display: inline-block;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    max-width: 10ch;">{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>

                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="{{route('user.destroy', $user->id)}}" onclick="return confirm('voulez-vous vraiment supprimer ?')"><i class="dw dw-delete-4"></i> Delete</a>
                            </div>
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

@include("partials.user.create")

@endsection