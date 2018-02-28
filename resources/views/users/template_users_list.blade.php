@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Senarai Users</div>

                <div class="card-body">

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
                      <tr>
                        <td>1</td>
                        <td>alibaba</td>
                        <td>Ali Baba</td>
                        <td>ali@baba.com</td>
                        <td>
                          <a href="/users/1/edit" class="btn btn-xs btn-info">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>ahmadalbab</td>
                        <td>Ahmad Albab</td>
                        <td>ahmad@albab.com</td>
                        <td>
                          <a href="/users/2/edit" class="btn btn-xs btn-info">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>upinipin</td>
                        <td>Upin Ipin</td>
                        <td>upin@ipin.com</td>
                        <td>
                          <a href="/users/3/edit" class="btn btn-xs btn-info">Edit</a>
                        </td>
                      </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
