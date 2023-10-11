@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Source')


@section('css')
@endsection

@section('title_page1')
    Sources
@endsection

@section('title_page2')
    Create New Source
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('sources.store') }}">

        @csrf
        @method('post')
        <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
        {{-- sara --}}

        <div class="form-group">
            <label for="Titel"> Source Titel:</label>
            <input type="text" name="Titel" class="form-control" id="Titel" placeholder="Enter Source Titel">
            @error('Titel')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        
        @foreach ($Technologies as $Technology)
            <div class="form-group">
                <label for="technology">Course Technology:</label>
                <select name="technology_id" class="form-control" id="technology">
                    <option value="{{ $item->id }}">{{ $item->Technology }}</option>
                </select>
            </div> {{-- sara --}}
        @endforeach

        <div class="form-group">
            <label for="source_1">Source_1:</label>
            <input type="text" name="source_1" class="form-control" id="source_1" placeholder="Enter Task source_1">
            @error('source_1')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <label for="source_2">Source_2:</label>
        <input type="text" name="source_2" class="form-control" id="source_2" placeholder="Enter Task source_2">
        @error('source_2')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        </div>

        <div class="form-group">
            <select>
                @foreach ($courses_type as $item)
                    <option value="{{ $item->id }}"{{ $item->subject }}>
                @endforeach
            </select>

        </div>

        <br>
        <input type="submit" value="Add Source" class="btn btn-success"><br>
    </form>


@endsection

@section('scripts')

@endsection
