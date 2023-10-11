@extends('dashboard.dashboard_layouts.master')

@section('title', 'Show Tasks')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('title_page1')

    Taskes
@endsection

@section('title_page2')
    Taskes list
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
                        @admin()
                            <div class="card-header">
                                <!-- Add a link to create a new user -->
                                <a class="btn btn-primary btn-sm float-left" href="{{ route('categories.create') }}">
                                    <i class="fas fa-th nav-icon"></i> Add New Task
                                </a>
                            </div>
                        @endadmin
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Task Titel</th>
                                        <th> Task Technology</th>
                                        <th> Task Description</th>
                                        <th> Start at</th>
                                        <th> End at</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($Tasks as $item)
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->Titel }}</td>
                                            <td>{{ $item->Technology }}</td>
                                            <td>{{ $item->Description }}</td>
                                            <td>{{ $item->start_at }}</td>
                                            <td>{{ $item->end_at }}</td>


                                            <td class="project-actions">

                                                <div style="margin-bottom: 5px; width: 100px;">
                                                    <!-- Adjust the width as needed -->
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('answer.index', $item->id) }}" style="width: 100%;">
                                                        <i class="fas fa-eye-alt"></i>
                                                    </a>
                                                </div>

                                                @admin()
                                                    @if (\Carbon\Carbon::now()->between($item->start_at, $item->end_at))
                                                        <div style="margin-bottom: 5px; width: 100px;">
                                                            <!-- Adjust the width as needed -->
                                                            <a class="btn btn-info btn-sm"
                                                                href="{{ route('tasks.edit', $item->id) }}"
                                                                style="width: 100%;">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </div>

                                                        <div style="margin-bottom: 5px; width: 100px;">
                                                            <!-- Adjust the width as needed -->
                                                            <form action="{{ route('tasks.destroy', $item->id) }}"
                                                                method="POST" style="display: inline;">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure you want to delete this Task?')"
                                                                    style="width: 100%;">
                                                                    <i class="fas fa-trash"></i>
                                                                    <!-- Add the delete icon here -->
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </td>
                                            @endadmin



                                            @student()
                                                @if (\Carbon\Carbon::now()->between($item->start_at, $item->end_at))
                                                    <td class="project-actions">
                                                        <div style="margin-bottom: 5px; width: 100px;">
                                                            <!-- Adjust the width as needed -->
                                                            <a class="btn btn-info btn-sm"
                                                                href="{{ route('answer.create', $item->id) }}"
                                                                style="width: 100%;">
                                                                <i class="fas fa-th nav-icon"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                @endif
                                            @endstudent






                                            @php
                                                $i++;
                                            @endphp

                                    </tr>
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
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

    {{-- <script src="../../plugins/jszip/jszip.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>

    {{-- <script src="../../plugins/pdfmake/pdfmake.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>

    {{-- <script src="../../plugins/pdfmake/vfs_fonts.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}">
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
