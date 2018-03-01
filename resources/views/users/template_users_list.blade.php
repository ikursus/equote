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

                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">
                            Delete
                          </button>
                          <form method="POST" action="/users/{{ $user->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">

                              <!-- Modal -->
                              <div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">{{ $user->nama }}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Adakah anda bersetuju untuk menghapuskan data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Ya! Setuju!</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                          </form>


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
