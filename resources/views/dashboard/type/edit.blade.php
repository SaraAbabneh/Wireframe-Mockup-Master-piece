@admin()
    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Edit Course')


    @section('css')
    @endsection

    @section('title_page1')
        Edit

    @endsection
    @section('title_page2')
        Edit 
    @endsection

    @section('content')

        <div class="container-fluid">
            <h2>Edit Course_type Information</h2>


            <form action="{{ route('courses_type.update', $courses_type->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="task_type">Course Type:</label>
                    <select name="task_type" class="form-control" id="task_type">
                        <option value="daily_task">Daily Task</option>
                        <option value="project">Project</option>
                        <option value="masterpiece">Masterpiece</option>
                        <option value="correct_path">Correct Path</option>
                        <option value="Report">Report</option>
                    </select>
                </div>
        
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>







        </div>




    @endsection

    @section('scripts')

    @endsection

@endadmin
