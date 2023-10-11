@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Answer')


@section('css')
@endsection

@section('title_page1')
    Answers
@endsection

@section('title_page2')
    Create New Answer
@endsection

@section('content')


    <form method="POST" style="width: 80%; margin: 50px auto;" action="{{ route('answer.store') }}"
        enctype="multipart/form-data">
        @csrf
        {{-- @admin
            <div class="form-group">
                <input type="radio" name="status" value="Pass" disabled>
                <input type="radio" name="status" value="Fail" disabled>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        @endadmin --}}
        {{-- sara --}}

        @student
            <input type="hidden" name="student_id" value="{{ auth()->user()->id }}">
            <div class="form-group">
                <label for="File">Add File:</label>
                <input type="file" name="File" class="form-control" id="File" required>
                @error('File')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Comment"> Comment:</label>
                <textarea name="Comment" class="form-control" id="Comment" placeholder="Enter Comment">write comment ....</textarea>
                @error('Comment')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        @endstudent

        <br>
        <input type="submit" value="Add Answer" class="btn btn-success"><br>
    </form>








@endsection

@section('scripts')

@endsection
