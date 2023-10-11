@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Report')


@section('css')
@endsection

@section('title_page1')
    Reports
@endsection

@section('title_page2')
    Create New Report
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('report.store') }}">

        @csrf
        @method('post')
        <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
        {{-- sara --}}

        <div class="form-group">
            <label for="Titel"> Report Titel:</label>
            <input type="text" name="Titel" class="form-control" id="Titel" placeholder="Enter Report Titel">
            @error('Titel')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        
        <div class="form-group">
            <label for="file">Report File:</label>
            <input type="file" name="file" class="form-control" id="file"
                @error('file') is-invalid @enderror required >
            @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <br>
        <input type="submit" value="Add Report" class="btn btn-success"><br>
    </form>


@endsection

@section('scripts')

@endsection
