@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kemaskini Produk: {{ $product->nama }}</div>

                <div class="card-body">

                  @include('alerts')

                  <form method="POST" action="">
                      @csrf

                      <div class="form-group row">
                          <label for="nama" class="col-sm-4 col-form-label text-md-right">Nama</label>

                          <div class="col-md-6">
                              <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $product->nama }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="kos" class="col-sm-4 col-form-label text-md-right">Kos</label>

                          <div class="col-md-6">
                              <input id="kos" type="text" class="form-control{{ $errors->has('kos') ? ' is-invalid' : '' }}" name="kos" value="{{ $product->kos }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="margin" class="col-sm-4 col-form-label text-md-right">Margin</label>

                          <div class="col-md-6">
                              <input id="margin" type="text" class="form-control{{ $errors->has('margin') ? ' is-invalid' : '' }}" name="margin" value="{{ $product->margin }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="margin" class="col-sm-4 col-form-label text-md-right">Aktif</label>

                          <div class="col-md-6">
                              <select name="active" class="form-control">
                                <option value="1"{{ ($product->active == true) ? ' selected=selected' : false }}>AKTIF</option>
                                <option value="0"{{ ($product->active == false) ? ' selected=selected' : false }}>TIDAK AKTIF</option>
                              </select>
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
