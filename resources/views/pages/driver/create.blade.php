@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Tambah Pengemudi</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('driver.store') }}" method="POST">
         @csrf
         {{-- Nama --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pengemudi</label>
            <input type="text" 
            name="nama" 
            id="nama" 
            value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Tambah Pengemudi
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()