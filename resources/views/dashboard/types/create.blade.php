@admin()
@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Course Type')

@section('css')
@endsection

@section('title_page1')
    Course Types
@endsection

@section('title_page2')
    Create New Course Type
@endsection

@section('content')

<form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('types.store') }}" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="form-group">
        <label for="task_type">Course Type:</label>
        <div>
            <select name="task_type" class="form-control" id="task_type">
                <option value="daily_task">Daily Task</option>
                <option value="project">Project</option>
                <option value="masterpiece">Masterpiece</option>
                <option value="correct_path">Correct Path</option>
                <option value="correct_path">Reports</option>
            </select>
        </div>
        
        <div>
            <input type="text" name="task_type" class="form-control mt-2" placeholder="Add Custom Course Type">
        </div>
    </div>

    <br>
    <input type="submit" value="Add Course Type" class="btn btn-success"><br>
</form>

@endsection

@section('scripts')
@endsection
@endadmin
