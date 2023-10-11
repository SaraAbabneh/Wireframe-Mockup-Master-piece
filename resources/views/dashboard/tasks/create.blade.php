@admin()
    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Create New Task')


@section('css')
@endsection

@section('title_page1')
    Taskes
@endsection

@section('title_page2')
    Create New Task
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('tasks.store') }}">

        @csrf
        @method('post')
        <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
        {{-- <input type="hidden" name="admin_id" value="1" /> --}}
        @foreach ($Typies as $item)
          <div class="form-group">
            <label for="task_type">Course Type:</label>
            <select name="type_id" class="form-control" id="task_type">
                <option value="{{$item->id}}">{{$item->task_type}}</option>
            </select>
        </div> {{-- sara --}}  
        @endforeach
        

        @foreach ($Technologies as $Technology )
           <div class="form-group">
            <label for="technology">Course Technology:</label>
            <select name="technology_id" class="form-control" id="technology">
                <option value="{{$item->id}}">{{$item->Technology}}</option>
            </select>
        </div> {{-- sara --}} 
        @endforeach
        



        <div class="form-group">
            <label for="Titel">Task Titel:</label>
            <input type="text" name="Titel" class="form-control" id="Titel" placeholder="Enter Task Titel">
            @error('Titel')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <div class="form-group">
            <label for="Description">Task Description:</label>
            <input type="text" name="Description" class="form-control" id="	Description"
                placeholder="Enter Task Description">
            @error('Description')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <div class="form-group">
            <label for="start_at">Task start_at:</label>
            <input type="date" name="start_at" class="form-control" id="start_at" placeholder="Enter Task start_at">
            @error('start_at')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <div class="form-group">
            <label for="end_at">Task end_at:</label>
            <input type="date" name="end_at" class="form-control" id="end_at" placeholder="Enter Task end_at">
            @error('end_at')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <select name="course_type" class="form-control" style="width:20%">
                @foreach ($courses_type as $item)
                    <option value="{{ $item->id }}">{{ $item->subject }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="student_id">Student:</label>
            <select name="student_id" id="student_id" class="form-control"style="width:25%">
                <option value="all" selected>All</option>
                @foreach ($Students as $item)
                    <option value="{{ $item->id }}">{{ $item->First_name . ' ' . $item->Last_name }}</option>
                @endforeach
            </select>
            @error('student_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <br>
        <input type="submit" value="Add Task" class="btn btn-success"><br>
    </form>






@endsection

@section('scripts')

@endsection
@endadmin
