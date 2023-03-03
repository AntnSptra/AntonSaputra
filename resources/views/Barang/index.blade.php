@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Barang<p>
        <p style="margin-left: 5px;">/ Index</p>
    </div>
<table class="table" style="margin-top: 5%">
    <thead>
      <tr>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang </th>
        <th scope="col">Brand</th>
        <th scope="col">UOM</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
  </table>
@endsection