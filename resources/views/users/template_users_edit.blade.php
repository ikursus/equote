@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Senarai Users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p><a href="/tambah-user" class="btn btn-primary">Tambah User</a></p>
                    <button type="button" class="btn btn-danger">Delete User</button>
                    <p>Rekod Senarai Users</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
