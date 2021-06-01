@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Pengemudi</strong>
      <small>{{ $item->nama }}</small>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('driver.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf
         {{-- Nama --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pengemudi</label>
            <input type="text" 
            name="nama" 
            id="nama" 
            value="{{ old('nama') ? old('nama') : $item->nama }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Edit pengemudi
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()