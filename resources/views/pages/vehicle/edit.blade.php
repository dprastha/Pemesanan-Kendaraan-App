@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Kendaraan</strong>
      <small>{{ $item->nama }}</small>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('vehicle.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf
         {{-- Id --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama Kendaraan</label>
            <input type="text" 
            name="nama" 
            id="nama" 
            value="{{ old('nama') ? old('nama') : $item->nama }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Jumlah --}}
         <div class="form-group">
            <label for="jumlah" class="form-control-label">Jumlah Kendaraan</label>
            <input type="number" 
            name="jumlah" 
            id="jumlah" 
            value="{{ old('jumlah') ? old('jumlah') : $item->jumlah }}" class="form-control @error('jumlah') is-invalid @enderror">
            @error('jumlah') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Edit Kendaraan
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()