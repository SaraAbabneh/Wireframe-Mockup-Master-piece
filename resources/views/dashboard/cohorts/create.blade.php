@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Cohort')


@section('css')
@endsection

@section('title_page1')
    Cohorts
@endsection

@section('title_page2')
    Create New Cohort
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('cohorts.store') }}">
       
        @csrf
        @method('post')
        {{-- sara --}}
        <div class="form-group">
            <label for="number">Cohort Number:</label>
            <input type="number" name="number" class="form-control" id="number" placeholder="Enter Cohort number">
            @error('number')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <label for="start_date">Cohort start_date:</label>
            <input type="date" name="start_date" class="form-control" id="start_date" placeholder="Enter Cohort start_date">
            @error('start_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <div class="form-group">
            <label for="end_date">Cohort end_date:</label>
            <input type="date" name="end_date" class="form-control" id="end_date" placeholder="Enter Cohort end_date">
            @error('end_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <label for="unmber_students">Cohort's Students Nnmber:</label>
            <input type="number" name="unmber_students" class="form-control" id="unmber_students" placeholder="Enter Cohort's Students Nnmber">
            @error('unmber_students')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <br>
        <input type="submit" value="Add Cohort" class="btn btn-success"><br>
    </form>

@endsection

@section('scripts')

@endsection
