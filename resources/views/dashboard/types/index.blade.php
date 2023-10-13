@admin()
  @extends('dashboard.dashboard_layouts.master')

  @section('title','Show Coursees')


  @section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  @endsection

  @section('title_page1')

   Courses
  @endsection

  @section('title_page2')
   Courses list
  @endsection

  @section('content')
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div> @if(session()->has('success'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
              {{session()->get('success') }}
              @endif
            </div>
            <div class="card">
              <div class="card-header">
                  <!-- Add a link to create a new user -->
                  <a class="btn btn-primary btn-sm float-left" href="{{ route('types.create') }}">
                      <i class="fas fa-th nav-icon"></i> Add New Course
                  </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th> #</th>
                      <th> Task Type</th>
                      <th> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @php
                      $i=1;
                    @endphp
                    @foreach ($Courses_type as $item)
                    <td>{{ $i }}</td>
                    <td>{{ $item->task_type }}</td>

                    <td class="project-actions">
                      <div style="margin-bottom: 5px; width: 100px;"> <!-- Adjust the width as needed -->
                          <a class="btn btn-info btn-sm" href="{{ route('courses_type.edit', $item->id) }}" style="width: 100%;">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                      </div>
                  
                      <div style="margin-bottom: 5px; width: 100px;"> <!-- Adjust the width as needed -->
                          <form action="{{ route('courses_type.destroy', $item->id) }}" method="POST" style="display: inline;">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Course?')" style="width: 100%;">
                                  <i class="fas fa-trash"></i> <!-- Add the delete icon here -->
                                  Delete
                              </button>
                          </form>
                      </div>
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
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

  {{-- <script src="../../plugins/jszip/jszip.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/jszip/jszip.min.js') }}"></script>

  {{-- <script src="../../plugins/pdfmake/pdfmake.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>

  {{-- <script src="../../plugins/pdfmake/vfs_fonts.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

  {{-- <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

  {{-- <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
  <script type="text/javascript" src="{{ URL::asset('backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


  <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
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
@endadmin