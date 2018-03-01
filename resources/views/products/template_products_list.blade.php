@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Senarai Produk</div>

                <div class="card-body">
                  <p><a href="/produk/baru" class="btn btn-primary">Tambah Produk</a></p>

                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>KOS</th>
                        <th>MARGIN</th>
                        <th>STATUS</th>
                        <th>TINDAKAN</th>
                      </tr>
                    </thead>

                    @foreach( $senarai_produk as $produk )
                    <tr>
                      <td>{{ $produk->id }}</td>
                      <td>{{ $produk->nama }}</td>
                      <td>{{ $produk->kos }}</td>
                      <td>{{ $produk->margin }}</td>
                      <td>
                        @if( $produk->active == true )
                        AKTIF
                        @else
                        TIDAK AKTIF
                        @endif
                      </td>
                      <td>
                        <a href="/produk/{{ $produk->id }}/edit" class="btn btn-xs btn-info">Edit</a>
                      </td>
                    </tr>
                    @endforeach

                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
