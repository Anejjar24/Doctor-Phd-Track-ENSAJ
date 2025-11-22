@extends('dashfinal.admin.candidatures.layoutcand')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Candidatures</h4>
                   
                </div>
            </div>
           
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display table" style="width:100%">
                                <thead style="text-align: center">
                                    <tr>
                                        <th>ID</th>
                                        
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>CIN</th>
                                        <th>Détails</th>
                                        <th>Accépter</th>
                                        <th>Refuser</th>
                                        
                                    </tr>s
                                </thead>
                                <tbody style="text-align: center">
                                    @foreach ($users as $user)
                                    <tr class="text-muted text-center">

                                       
                                        <td>{{$user->id}}</td>
                                       
                                        <td>{{$user->nom}}</td>
                                        <td>{{$user->prenom}}</td>
                                        <td>{{$user->CIN}}</td>
                                        
                                        <td><a href={{route('doctorants.details',['id' => $user->id])}}><span class="badge badge-info"> Détails</span></a></td>
                                        <td><a href="#" onclick="showConfirmation('{{ route('accepter',['id' => $user->id]) }}')"><span class="badge badge-success">accépter</span></a></td>

                                        <td><a href={{route('motif',['id' => $user->id])}}><span class="badge badge-warning"> refuser</span></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Inclure SweetAlert -->
<!-- Inclure SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script JavaScript pour afficher la SweetAlert de confirmation -->
<script>
    function showConfirmation(link) {
        // Afficher la SweetAlert de confirmation
        Swal.fire({
            title: 'Êtes-vous sûr de vouloir accepter la candidature?',
            html: 'Il est important de vérifier premiérement les détails de la candidature du doctorant avant d\'accepter.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmer'
        }).then((result) => {
            // Si l'utilisateur clique sur "Confirmer"
            if (result.isConfirmed) {
                // Rediriger l'utilisateur vers le lien
                window.location.href = link;
            }
        });
    }
</script>



@endsection
