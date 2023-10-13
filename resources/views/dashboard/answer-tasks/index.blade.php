@extends('dashboard.dashboard_layouts.master')

@section('title', 'Show Admins')


@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('title_page1')
    Answer Task
@endsection

@section('title_page2')
    Answer Task list
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session()->get('success') }}
                        @endif
                    </div>
                    <div class="card">

                        <div class="card-header">
                            <!-- Add a link to create a new user -->
                            @student()
                                <a class="btn btn-primary btn-sm float-left" href="{{ route('answer.create') }}">
                                    <i class="fas fa-user-shield nav-icon"></i> Add Answer
                                </a>
                            @endstudent
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        @admin()
                                            <th>Student Name</th>
                                        @endadmin
                                        <th> Dowenload File</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($Answer as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            @admin()
                                                @foreach ($Students as $Student)
                                                    @if ($item->student_id == $Student->student_id)
                                                        <td>{{ $Student->First_name . ' ' . $Student->Last_name }}</td>
                                                    @endif
                                                @endforeach
                                            @endadmin
                                            <td>{{ $item->File }}</td>
                                            <td>{{ $item->Comment }}</td>
                                            @if ($item->Status != null)
                                                <td>{{ $item->Status }}</td>
                                            @else
                                                <td> No Rating </td>
                                            @endif

                                            <td class="project-actions">
                                                {{-- @student() --}}
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('answer.edit', $item->id) }}">
                                                        <i class="fas fa-pencil-alt"></i>

                                                    </a>

                                                    <form action="{{ route('answer.destroy', $item->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this Admin?')">
                                                            <i class="fas fa-trash"></i> <!-- Add the delete icon here -->

                                                        </button>
                                                    </form>
                                                @endstudent

                                                {{-- <a class="btn btn-info btn-sm"
                                                    href="{{ route('answer.edit', $item->id) }}">
                                                    <i class="fas fa-user-shield nav-icon"></i>
                                                    Add Rating
                                                </a> --}}
                                                {{-- sara --}}
                                                @admin()
                                                    <form action="{{ route('answer.update', auth()->user()->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="form-group">
                                                            <label>Status:</label>
                                                            <select class="form-control" name="status">
                                                                <option value="null" selected>No Rating</option>
                                                                <option value="Fail">Fail</option>
                                                                <option value="Pass">Pass</option>
                                                            </select>

                                                            @error('status')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        {{-- sara --}}

                                                        <br>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                @endadmin


                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>

                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection














@section('scripts')
    {{-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

    {{-- <script src="../../plugins/jszip/jszip.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/jszip/jszip.min.js') }}"></script>

    {{-- <script src="../../plugins/pdfmake/pdfmake.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>

    {{-- <script src="../../plugins/pdfmake/vfs_fonts.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}">
    </script>


    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endsection
