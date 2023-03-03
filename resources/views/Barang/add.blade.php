@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="d-flex">
    <p style="margin-left: 2px; font-weight: bold;">Master Barang</p>
    <p style="margin-left: 5px;">/ Add Barang Baru</p>
</div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-md-5">
                    <div class="form-group">
                            <label for="nomor refrensi">Nomor refrensi</label>
                            <input type="nomor refrensi" name="nomor refrensi" value="" id="nip" class="form-control" placeholder="Nip...">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="namabarang">Nama Barang:</label>
                            <input type="namabarang" name="namabarang" value="" id="email" class="form-control" placeholder="Email...">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">Pleace select one</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input type="brand" name="brand" value="" id="jabatan" class="form-control" placeholder="Jabatan...">
                        </div>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                        <label for="uom">UOM</label>
                        <select name="uom" id="uom" class="form-control">
                            <option value="">Pleace select one</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" value="" id="password" class="form-control" placeholder="**">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" value="image" id="image" class="form-control" placeholder="+62...">
                        </div>
                    </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="status">status</label>
                                <input type="status" name="status" value="" id="alamat" class="form-control" placeholder="Alamat...">
                            </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                            <label for="status">Jumlah Stock</label>
                            <input type="status" name="status" value="" id="alamat" class="form-control" placeholder="Alamat...">
                        </div>
                  </div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-outline-Primary">
                            Simpan Stock
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection