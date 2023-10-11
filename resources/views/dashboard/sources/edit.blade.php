@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Sources')


@section('css')
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


        <form action="{{ route('sources.store', $Sources->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
            {{-- <input type="hidden" name="Admin-id" value="1" /> --}}
            {{-- sara --}}

            @foreach ($Technologies as $item)
                <div class="form-group">
                    <label for="type_id">Course type_id:</label>
                    <select name="type_id" class="form-control" id="type_id">
                        <option value="{{ $item->id }}">{{ $item->type_id }}</option>
                    </select>
                </div> {{-- sara --}}
                {{-- HTML,Css  --}}
            @endforeach

            <div class="form-group">
                <label for="Titel">Source Titel:</label>
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
                <input type="text" name="source_1" class="form-control" id="source_1"required
                    value="{{ old('source_1', $Sources->source_1) }}">
                @error('source_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <label for="source_2">Source_2:</label>
            <input type="text" name="source_2" class="form-control" id="source_2" required
                value="{{ old('source_2', $Sources->source_2) }}">
            @error('source_2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <div class="form-group">
                <select>
                    @foreach ($courses_type as $item)
                        <option value="{{ $item->id }}"{{ $item->subject }}>
                    @endforeach
                </select>

            </div>

            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


        {{-- ---------------------------------- --}}



    </div>




@endsection

@section('scripts')

@endsection
