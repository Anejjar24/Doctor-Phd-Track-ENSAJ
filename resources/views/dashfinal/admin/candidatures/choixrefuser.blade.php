@extends('dashfinal.admin.candidatures.layoutcand')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Refuser la candidature</h4>
                </div>
            </div>
        </div>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="p-4 bg-white card-header text-center d-flex justify-content-between align-items-center">
                        <h4 class="mb-0"><span class="ti-pencil text-info"><span class="text-muted"> Ajouter le motif de refus</span></span></h4>
                        <a href={{route('motif',['id' => $user->id])}}> <button type="button" class="btn btn-info btn-lg"> Ajouter Motif</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="p-4 bg-white card-header text-center d-flex justify-content-between align-items-center">
                        <h4 class="mb-0"><span class="ti-alert text-danger"><span class="text-muted"> Refuser définitivement la candidature</span></span></h4>
                        <button type="button" class="btn btn-danger btn-lg">Refuser </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
