@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>Edit Institution
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.institution.update', $institutions->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" value="{{ $institutions->name }}" class="form-control" />       
                    </div>
        
            </div>
        </div>        
    </section>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">Simpan</button>
                    <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-secondary mb-3">Kembali</a>
                </form> 
</div> 
@endsection