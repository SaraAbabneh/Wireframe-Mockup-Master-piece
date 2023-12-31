@extends('dashboard.dashboard_layouts.master')

@section('title', 'Show Students')


@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('title_page1')
    Students
@endsection

@section('title_page2')
    Students list
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
                            <a class="btn btn-primary btn-sm float-left" href="{{ route('students.create') }}">
                                <i class="fas fa-user-shield nav-icon"></i> Add New Student
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width: 20%">First_name</th>
                                        <th style="width: 20%">Last_name</th>
                                        <th style=>Email</th>
                                        <th style=>Phone</th>
                                        <th style=>Gender</th>
                                        <th style=>Date_of_birth</th>
                                        <th style=>Major</th>
                                        <th style=>Linkedin</th>
                                        <th style=>Github</th>
                                        <th style="width: 40%">Image</th>
                                        <th style="width: 40%">Status</th>
                                        <th style="width:30%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($Student as $item)
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->First_name }}</td>
                                            <td>{{ $item->Last_name }}</td>
                                            <td>{{ $item->Email }}</td>
                                            <td>{{ $item->Phone }}</td>
                                            <td>{{ $item->Gender }}</td>
                                            <td>{{ $item->Date_of_birth }}</td>
                                            <td>{{ $item->Major }}</td>
                                            <td>{{ $item->linkedin }}</td>
                                            <td>{{ $item->github }}</td>
                                            <td>{{ $item->img }}</td>
                                            <td>{{ $item->status }}</td>


                                            <td class="project-actions">
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('students.edit', $item->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('students.destroy', $item->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this Student?')">
                                                        <i class="fas fa-trash"></i> <!-- Add the delete icon here -->
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>

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
    <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

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
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

@endsection
