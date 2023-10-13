@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Report')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('title_page1')
    Reports
@endsection

@section('title_page2')
    Create New Report
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('Report.store') }}">

        @csrf
        @method('post')
        <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
        {{-- sara --}}



        @foreach ($Typies as $item)
        <div class="form-group">
          <label for="task_type">Course Type:</label>
          <select name="type_id" class="form-control" id="task_type">
              <option value="{{$item->id}}">{{$item->task_type}}</option>
          </select>
      </div> {{-- sara --}}  
      @endforeach

      

        <div class="form-group">
            <label for="Titel"> Report Titel:</label>
            <input type="text" name="Titel" class="form-control" id="Titel" placeholder="Enter Report Titel">
            @error('Titel')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <label for="file">Report File:</label>
            <textarea name="file" class="form-control summernote" id="file" required></textarea>

            @error('file')
                is-invalid
            @enderror required >
            @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <br>
        <input type="submit" value="Add Report" class="btn btn-success"><br>
    </form>


@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection
