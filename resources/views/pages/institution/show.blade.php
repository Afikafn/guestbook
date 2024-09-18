@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Nama Institusi</h3>

        <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <td><strong>#{{ $institutions->id }}</strong></td>
            </tr>
            <tr>
                <td>Institution Name</td>
                <td>{{ $institutions->name }}</td>
            </tr>
            <tr>
                <td>Created AT</td>
                <td>{{ Carbon\Carbon::parse($institutions->created_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <td>Update AT</td>
                <td>{{ Carbon\Carbon::parse($institutions->update_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
        </table>
    </div>
@endsection