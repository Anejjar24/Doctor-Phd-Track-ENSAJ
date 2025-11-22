@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form>

                    <div class="mb-3 row">
                        <label  class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="username">
                                <option value="" disabled selected>choose option</option>
                               
                              </select>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label  class="col-sm-2 col-form-label">Etat</label>
                        <div class="col-sm-10">
                          <input type="number" name="etat" placeholder="0" class="form-control">
                        </div>
                      </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
