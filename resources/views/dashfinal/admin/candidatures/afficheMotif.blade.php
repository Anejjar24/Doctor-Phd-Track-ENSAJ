@extends('dashfinal.admin.candidatures.layoutcand')
@section('content')
<div class="content-body">
    <!-- row -->

    @include('sweetalert::alert')
    
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4><span class="ti-clipboard" style="font-size: 18px;"> </span>Motif de Refus </h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 text-right">
                <a href="{{route('candidature.refusee')}}"  class="btn btn-outline-light">Retour</a>
            </div>
        </div>
       



       

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-muted">
                    <div class="card-body text-center">
                        {{$user->motif_de_refus}}
                    </div>
                </div>
            </div>
        </div>     
    </div>
</div>
@endsection
