@extends("layouts.app")

@section("content")
<!-- Export Datatable start -->
<div class="btn-list-end d-flex justify-content-first mb-30">
    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
        AJOUTER
    </a>

</div>
<div class="card-box mb-30">
    <div class="pd-20">
        <h2 class="text-blue h2">LISTES DES CONSULTATIONS </h2>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">#</th>
                    <th class="table-plus datatable-nosort">DATE</th>
                    <th>DEBUT</th>
                    <th>FIN</th>
                    <th>PATIENT</th>
                    <th>MEDECIN</th>
                    <th>TYPE CONSULTATION</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide=1
                @endphp
                @foreach ($consultations as $consultation)
                <tr>
                    <td>{{$ide}}</td>
                    <td class="table-plus">{{ \Carbon\Carbon::parse($consultation->date)->isoFormat('DD MMMM YYYY') }}
                    </td>
                    <td>{{$consultation->debut}}</td>
                    <td>{{$consultation->fin}}</td>
                    <td>{{$consultation->patient->user->matricule}}</td>
                    <td>{{$consultation->medecin->user->matricule}}</td>
                    <td>{{$consultation->typeconsultation->type_consultation}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                            <a href="#" data-color="#34a853"><i class="icon-copy dw dw-eye"></i></a>
                            <a href="#" data-toggle="modal" data-target="#confirmation-modal{{$consultation->id}}" data-color="#e95959"><i
                                    class="icon-copy dw dw-delete-3"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @include("partials.consultation.delete")

                @php
                $ide+=1;
                @endphp
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<!-- Export Datatable End -->

@include("partials.consultation.create")
<script>
    // Fonction pour obtenir l'heure actuelle au format HH:mm
    function getCurrentTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        return `${hours}:${minutes}`;
    }

    // Met à jour la valeur du champ de temps avec l'heure actuelle
    document.addEventListener('DOMContentLoaded', function () {
        const debutInput = document.getElementById('debut');
        if (debutInput) {
            debutInput.value = getCurrentTime();
        }
    });
</script>
@endsection