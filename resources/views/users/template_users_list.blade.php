@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Senarai Users</div>

                <div class="card-body">

                  @include('alerts')

                    <p><a href="/users/new" class="btn btn-primary">Tambah User</a></p>

                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>USERNAME</th>
                          <th>NAMA</th>
                          <th>EMAIL</th>
                          <th>TINDAKAN</th>
                        </tr>
                      </thead>

                      @foreach( $senarai_users as $user )
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          <a href="/users/{{ $user->id }}/edit" class="btn btn-xs btn-info">Edit</a>
                        </td>
                      </tr>
                      @endforeach

                    </table>

                    {{ $senarai_users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
