@if (Auth::guard('Admin'))
    @extends('dashboard.dashboard_layouts.master')


    @section('title', 'Show Admins')

    @section('css')
        <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    @endsection

    @section('title_page1')
        Admins
    @endsection

    @section('title_page2')
        Admins list
    @endsection

    @section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- Add a link to create a new admin user -->
                                <a class="btn btn-primary btn-sm float-left" href="{{ route('admins.create') }}">
                                    <i class="fas fa-user-shield nav-icon"></i> Add New Admin
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive" style="overflow-x: auto;">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First_name</th>
                                                <th>Last_name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Date_of_birth</th>
                                                <th>Position</th>
                                                <th>Linkedin</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($Admin as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->First_name }}</td>
                                                    <td>{{ $item->Last_name }}</td>
                                                    <td>{{ $item->Email }}</td>
                                                    <td>{{ $item->Phone }}</td>
                                                    <td>{{ $item->Gender }}</td>
                                                    <td>{{ $item->Date_of_birth }}</td>
                                                    <td>{{ $item->position }}</td>
                                                    <td>{{ $item->linkedin }}</td>
                                                    <td>
                                                        @if ($item->img)
                                                            <img src="{{ asset($item->img) }}" alt="Admin Image"
                                                                width="50" height="50">
                                                            {{-- sara error --}}
                                                        @else
                                                            No Image Available
                                                        @endif
                                                    </td>


                                                    <td class="project-actions">
                                                        <a class="btn btn-info btn-sm"
                                                            href="{{ route('admins.edit', $item->id) }}">
                                                            <i class="fas fa-pencil-alt"></i> Edit
                                                        </a>
                                                        <form action="{{ route('admins.destroy', $item->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this Admin?')">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </td>

                                                </tr>
                                                @php
                                                    $i++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
        <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
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
@endif
