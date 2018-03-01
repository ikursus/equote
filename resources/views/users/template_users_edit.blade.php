@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Borang Edit User ID: {{ $user->id }}</div>

                <div class="card-body">

                  @include('alerts')

                  <form method="POST" action="">
                      @csrf

                      {{-- Comment Laravel --}}

                      <input type="hidden" name="_method" value="PATCH">

                      <div class="form-group row">
                          <label for="nama" class="col-sm-4 col-form-label text-md-right">Nama</label>

                          <div class="col-md-6">
                              <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $user->nama }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="username" class="col-sm-4 col-form-label text-md-right">Username</label>

                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="telefon" class="col-sm-4 col-form-label text-md-right">Telefon</label>

                          <div class="col-md-6">
                              <input id="telefon" type="text" class="form-control" name="telefon" value="{{ $user->telefon }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Save
                              </button>
                          </div>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
