@if (Auth::guard('Admin'))

    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Create New Source')

    @section('css')
        <link href="/node_modules/summernote/dist/summernote.css" rel="stylesheet">
        <script src="/node_modules/summernote/dist/summernote.js"></script>
    @endsection

    @section('title_page1')
        Sources
    @endsection

    @section('title_page2')
        Create New Source
    @endsection

    @section('content')
        <form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('sources.store') }}">
            @csrf

            <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />

            <div class="form-group">
                <label for="Titel">Source Title:</label>
                <input type="text" name="Titel" class="form-control" id="Titel" placeholder="Enter Source Title">
                @error('Titel')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="technology">Course Technology:</label>
                <select name="technology_id" class="form-control" id="technology">
                    @foreach ($Technologies as $Technology)
                        <option value="{{ $Technology->id }}">{{ $Technology->Technology }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="source_1">Source_1:</label>
                <textarea name="source_1" class="form-control summernote" id="source_1" required></textarea>
                @error('source_1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="source_2">Source_2:</label>
                <textarea name="source_2" class="form-control summernote" id="source_2" required></textarea>
                @error('source_2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <br>
            <input type="submit" value="Add Source" class="btn btn-success"><br>
        </form>
    @endsection

    @section('scripts')
        <script>
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>
    @endsection
@endif
