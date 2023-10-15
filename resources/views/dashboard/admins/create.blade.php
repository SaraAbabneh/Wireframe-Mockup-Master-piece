@if (Auth::guard('Admin'))
    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Create New Admin')


    @section('css')
    @endsection

    @section('title_page1')
        Admins
    @endsection

    @section('title_page2')
        Create New Admin
    @endsection

    @section('content')


        <form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('admins.store') }}"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="First_name">First Name:</label>
                <input type="text" name="First_name" class="form-control" id="First_name" placeholder="Enter First Name">
                @error('First_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Last_name">Last Name:</label>
                <input type="text" name="Last_name" class="form-control" id="Last_name" placeholder="Enter Last Name">
                @error('Last_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" name="Email" class="form-control" id="Email" placeholder="Enter Email">
                @error('Email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>


            <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="text" name="Phone" class="form-control" id="Phone" placeholder="Enter Phone">
                @error('Phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div>
                    <input type="radio" id="female" name="Gender" value="Female">
                    <label for="female">Female</label>
                </div>

                <div>
                    <input type="radio" id="male" name="Gender" value="Male">
                    <label for="male">Male</label>
                </div>
                @error('Gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Date_of_birth">Date of Birth:</label>
                @php
                    $currentDate = now()->format('Y-m-d'); // Get the current date in 'YYYY-MM-DD' format
                @endphp
                <input type="date" name="Date_of_birth" class="form-control" id="Date_of_birth"
                    max="{{ $currentDate }}">
                @error('Date_of_birth')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="position">Position:</label>
                <select name="position" class="form-control" id="position">
                    <option value="manager">Manager</option>
                    <option value="technical">Technical</option>
                    <option value="technical">Leader</option>
                    <option value="job_coach">Job coach</option>
                    <option value="logistic">Logistic</option>
                </select>
                @error('position')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" name="img" class="form-control" id="img" required>
                @error('img')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="linkedin">LinkedIn:</label>
                <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Enter LinkedIn">
                @error('linkedin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <br>
            <input type="submit" value="Add Admin" class="btn btn-success"><br>
        </form>







    @endsection

    @section('scripts')

    @endsection
@endif
