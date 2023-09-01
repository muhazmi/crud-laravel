@extends('layouts.app')

@section('content')
  <h1>{{$page_title}}</h1>

  <p>
    <a href="{{ url('product/create') }}" class="btn btn-primary">
      <i class="fa-solid fa-plus"></i> Tambah Produk
    </a>
  </p>

  <div class="content">
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Product Name</td>
          <td>Description</td>
          <td>Category</td>
          <td>Qty</td>
          <td>Price</td>
          <td>Image</td>
          <td>#</td>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
@endsection