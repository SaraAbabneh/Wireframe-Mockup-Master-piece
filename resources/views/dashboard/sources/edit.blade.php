@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Sources')

@section('css')
    <link href="/node_modules/summernote/dist/summernote.css" rel="stylesheet">
@endsection

@section('title_page1')
    Edit
@endsection

@section('title_page2')
    Edit Source
@endsection

@section('content')
    <div class="container-fluid">
        <h2>Edit Sources Information</h2>

        <form action="{{ route('sources.update', $Sources->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="Admin_id" value="{{ auth()->admin->id }}" />

            <div class="form-group">
                <label for="technology_id">Course technology</label>
                <select name="technology_id" class="form-control" id="technology_id">
                    @foreach ($Technologies as $item)
                        <option value="{{ $item->id }}">{{ $item->technology_id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Titel">Source Title:</label>
                <input type="text" name="Titel" class="form-control" id="Titel"
                    @error('Titel') is-invalid @enderror required value="{{ old('Titel', $Sources->Titel) }}">
                @error('Titel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="source_1">Source_1:</label>
                <textarea name="source_1" class="form-control summernote" id="source_1" required>{{ old('source_1') }}</textarea>
                @error('source_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="source_2">Source_2:</label>
                <textarea name="source_2" class="form-control summernote" id="source_2" required>{{ old('source_2') }}</textarea>
                @error('source_2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection
