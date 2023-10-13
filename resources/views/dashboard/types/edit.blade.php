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


            <form action="{{ route('types.update', $Courses_type->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="task_type">Course Type:</label>
                    <select name="task_type" class="form-control" id="task_type">
                        @foreach ($Courses_type as $item)
                            
                        <option value="{{$item->id}}">{{$item->task_type}}</option>
                        @endforeach
                        
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
