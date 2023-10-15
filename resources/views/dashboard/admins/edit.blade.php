@if (Auth::guard('Admin'))
    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Edit Admin')


    @section('css')
    @endsection

    @section('title_page1')
        Edit

    @endsection
    @section('title_page2')
        Edit Admin
    @endsection

    @section('content')

        <div class="container-fluid">
            <h2>Edit Admin Information</h2>

            <form action="{{ route('admins.update', $Admin->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="First_name"> First_name:</label>
                    <input type="text" name="First_name" id="First_name"
                        class="form-control @error('First_name') is-invalid @enderror " required
                        value="{{ old('First_name', $Admin->First_name) }}">
                    @error('First_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="Last_name"> Last_name:</label>
                    <input type="text" name="Last_name" id="Last_name"
                        class="form-control
                    @error('Last_name') is-invalid @enderror " required
                        value="{{ old('Last_name', $Admin->Last_name) }}">
                    @error('Last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="Email"> Email:</label>
                    <input type="Email" name="Email" id="Email"
                        class="form-control  @error('Email') is-invalid @enderror " required
                        value="{{ old('Email', $Admin->Email) }}">
                    @error('Email ')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password"> Password:</label>
                    <input type="password" name="password" class="form-control" id="password" required
                        value="{{ old('password', $Admin->password) }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Phone">Phone:</label>
                    <input type="text" name="Phone" class="form-control" id="Phone"
                        value="{{ old('password', $Admin->Phone) }}">
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
                    <label for="Date_of_birth"> Date_of_birth:</label>
                    <input type="date" name="Date_of_birth" class="form-control" id="Date_of_birth" required
                        value="{{ old('Date_of_birth', $Admin->Date_of_birth) }}">
                    @error('Date_of_birth')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="position">Position:</label>
                    <select name="position" class="form-control" id="position">
                        <option value="manager">Manager</option>
                        <option value="technical">Technical</option>
                        <option value="leader">Leader</option>
                        <option value="job_coach">Job coach</option>
                        <option value="logistic">Logistic</option>
                    </select>
                    @error('position')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <img src="{{ $Admin->img }} "width="100px" height="100px">
                </div>

                <div class="form-group">
                    <label for="img"> Image:</label>
                    <input type="file" name="img" class="form-control" id="img" required width="100px"
                        height="100px">
                    @error('img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="linkedin"> linkedin:</label>
                    <input type="text" name="linkedin" class="form-control" id="linkedin" required
                        value="{{ old('linkedin', $Admin->linkedin) }}">
                    @error('linkedin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>




            {{-- ***************************** --}}


        </div>




    @endsection

    @section('scripts')

    @endsection
@endif
