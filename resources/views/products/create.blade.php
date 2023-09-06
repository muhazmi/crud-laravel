@extends('layouts.app')

@section('content')
  <h1>{{ $page_title }}</h1>

  @if (session()->has('success'))
    <p>
      {{ session()->get('success') }}
    </p>
  @endif

  @if ($errors->any())
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
      @endforeach
  @endif

  <form action="{{ route('product.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input class="form-control" id="category" name="category">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
      <label for="qty" class="form-label">Qty</label>
      <input class="form-control" id="qty" name="qty">
    </div>
    <div class="mb-3">
      <label for="qty" class="form-label">Publish?</label>
      <input type="radio" name="is_publish" id="is_publish" value="1"> Yes
      <input type="radio" name="is_publish" id="is_publish" value="0"> No
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
    <button class="btn btn-danger" type="reset">Reset</button>
  </form>
@endsection
