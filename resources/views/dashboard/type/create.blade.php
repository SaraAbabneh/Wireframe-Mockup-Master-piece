@admin()
    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Create New Course')


    @section('css')
    @endsection

    @section('title_page1')
        Courses
    @endsection

    @section('title_page2')
        Create New Course
    @endsection

    @section('content')


        <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('courses_type.store') }}"
            enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="task_type">Course Type:</label>
                <select name="task_type" class="form-control" id="task_type">
                    <option value="daily_task">Daily Task</option>
                    <option value="project">Project</option>
                    <option value="masterpiece">Masterpiece</option>
                    <option value="correct_path">Correct Path</option>
                </select>
            </div>
        

            <br>
            <input type="submit" value="Add Category" class="btn btn-success"><br>
        </form>






    @endsection

    @section('scripts')

    @endsection
@endadmin
