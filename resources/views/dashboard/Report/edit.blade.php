@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Reports')


@section('css')
@endsection

@section('title_page1')
    Edit

@endsection
@section('title_page2')
    Edit Report
@endsection

@section('content')

    <div class="container-fluid">
        <h2>Edit Reports Information</h2>


        <form action="{{ route('Report.store', $Reports->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
            {{-- <input type="hidden" name="Admin-id" value="1" /> --}}
            {{-- sara --}}

     
            <div class="form-group">
                <label for="Titel">Report Titel:</label>
                <input type="text" name="Titel" class="form-control" id="Titel"
                    @error('Titel') is-invalid @enderror required value="{{ old('Titel', $Reports->Titel) }}">
                @error('Titel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            
            <div class="form-group">
                <label for="file">Report File:</label>
                <input type="file" name="file" class="form-control" id="file"
                    @error('file') is-invalid @enderror required value="{{ old('file', $Reports->file) }}">
                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


        {{-- ---------------------------------- --}}



    </div>




@endsection

@section('scripts')

@endsection
