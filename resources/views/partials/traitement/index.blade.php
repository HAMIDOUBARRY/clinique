@extends("layouts.app")

@section("content")
<div class="btn-list-end d-flex justify-content-first mb-30">
    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
        AJOUTER
    </a>

</div>
<!-- Export Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">LISTE DES TRAITEMENTS</h4>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">ID</th>
                    <th>DATE</th>
                    <th>HOPITAL</th>
                    <th>HOSPITALISATION</th>
                    <th>TYPE EXAMEN</th>
                    <th>PRIX</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide=1
                @endphp
                @foreach ($traitement as $traitement)
                <tr>
                    <td class="table-plus">{{$ide}}</td>
                    <td>{{ \Carbon\Carbon::parse($traitement->date)->isoFormat('DD MMMM YYYY') }}</td>
                    <td>{{$traitement->hopital->nom}}</td>
                    <td>{{$traitement->hospitalisation->patient->user->matricule}}</td>

                    <td>
                        @if ($traitement->type_examen === 'examen_biologie')
                        Biologie
                        @elseif ($traitement->type_examen === 'examen_radiologie')
                        Radiologie
                        @elseif ($traitement->type_examen === 'chirurgie')
                        Chirurgie
                        @endif
                    </td>
                    <td>{{ $traitement->prix }}</td>

                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#34a853"><i class="icon-copy dw dw-eye"></i></a>
                            <a href="#" data-toggle="modal" data-target="#confirmation-modal{{$traitement->id}}"
                                data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @include('partials.traitement.delete')
                @php
                $ide+=1;
                @endphp

                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Export Datatable End -->
@include("partials.traitement.create")
<script>
    $('#type_examen').change(function() {
        var selectedType = $(this).val();
        $('[id^="champs_"]').hide();
        $('#champs_' + selectedType).show();
    });
</script>


@endsection