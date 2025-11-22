@extends('dashfinal.admin.candidatures.layoutcand')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>En Cours</h4>
                   
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
                                    </tr>
                                </thead>
                                <tbody style="text-align: center">
                                    @foreach ($users as $user)
                                    <tr class="text-muted text-center">

                                       
                                        <td>{{$user->id}}</td>
                                       
                                        <td>{{$user->nom}}</td>
                                        <td>{{$user->prenom}}</td>
                                        <td>{{$user->CIN}}</td>
                                        
                                        <td><a href={{route('doctorants.details',['id' => $user->id])}}><span class="badge badge-info"> Détails</span></a></td>
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
@endsection
