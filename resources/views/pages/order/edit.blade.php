@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Pemesanan</strong>
      {{-- <small>{{ $pegawai->id }} - {{ $pegawai->nama }}</small> --}}
   </div>
   <div class="card-body card-block">
      <form action="{{ route('order.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf
         <div class="form-group">
            <label for="id_driver" class="form-control-label">Id driver</label>
            <select name="id_driver" id="id_driver" class="form-control @error('id_driver') is-invalid @enderror">
               @foreach ($drivers as $driver)
                  <option value="{{ $driver->id }}">{{ $driver->id }} - {{$driver->nama}}</option>
               @endforeach
            </select>
            @error('id_driver') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Vehicle --}}
         <div class="form-group">
            <label for="id_vehicle" class="form-control-label">Id vehicle</label>
            <select name="id_vehicle" id="id_vehicle" class="form-control @error('id_vehicle') is-invalid @enderror">
               @foreach ($vehicles as $vehicle)
                  <option value="{{ $vehicle->id }}">{{ $vehicle->id_vehicle }} - {{$vehicle->nama}}</option>
               @endforeach
            </select>
            @error('id_vehicle') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Status --}}
         <div class="form-group">
            <label for="status" class="form-control-label">Status</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
               <option value="Diproses">Diproses</option>
               <option value="Diterima">Diterima</option>
               <option value="Ditolak">Ditolak</option>
            </select>
            @error('status') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Edit Pemesanan
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()