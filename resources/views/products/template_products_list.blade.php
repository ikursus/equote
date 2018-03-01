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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $produk->id }}">
                          Delete
                        </button>
                        <form method="POST" action="/produk/{{ $produk->id }}">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">

                            <!-- Modal -->
                            <div class="modal fade" id="modal-delete-{{ $produk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $produk->nama }}</h5>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
