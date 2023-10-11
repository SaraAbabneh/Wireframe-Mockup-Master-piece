@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Answer')


@section('css')
@endsection

@section('title_page1')
    Edit

@endsection
@section('title_page2')
    Edit Answer
@endsection

@section('content')

    <div class="container-fluid">
        <h2>Edit Answer </h2>

        <form action="{{ route('answer.update', $Admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="student_id" value="{{ auth()->student->id }}" />


            @admin
                <div class="form-group">

                    <input type="radio" name="status" value="Pass" disabled>
                    <input type="radio" name="status" value="Fail" disabled>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            @endadmin
            {{-- sara --}}

            @student
                <div class="form-group">
                    <label for="File"> Upload File:</label>
                    <input type="file" name="file" class="form-control" id="File" required>
                    @error('File')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Comment"> Comment:</label>
                    <textarea name="comment" class="form-control" id="Comment" placeholder="Enter Comment">write comment ....</textarea>
                    @error('Comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @endstudent

            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        {{-- ***************************** --}}




    </div>




@endsection

@section('scripts')

@endsection



