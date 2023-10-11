@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Student')


@section('css')
@endsection

@section('title_page1')
    Edit

@endsection
@section('title_page2')
    Edit Student
@endsection

@section('content')

    <div class="container-fluid">
        <h2>Edit Student Information</h2>

        <form action="{{ route('admins.update', $Student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="First_name"> First_name:</label>
                <input type="text" name="First_name" id="First_name"
                    class="form-control @error('First_name') is-invalid @enderror " required
                    value="{{ old('First_name', $Student->First_name) }}">
                @error('First_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="Last_name"> Last_name:</label>
                <input type="text" name="Last_name" id="Last_name"
                    class="form-control
                    @error('Last_name') is-invalid @enderror " required
                    value="{{ old('Last_name', $Student->Last_name) }}">
                @error('Last_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="Email"> Email:</label>
                <input type="Email" name="Email" id="Email"
                    class="form-control  @error('Email') is-invalid @enderror " required
                    value="{{ old('Email', $Student->Email) }}">
                @error('Email ')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password"> Password:</label>
                <input type="password" name="password" class="form-control" id="password" required
                    value="{{ old('password', $Student->password) }}">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="radio" name="Gender" value="Femail"required>

                <input type="radio" name="Gender" value="Mail" required>

                @error('Gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                <label for="Date_of_birth"> Date_of_birth:</label>
                <input type="date" name="Date_of_birth" class="form-control" id="Date_of_birth" required
                    value="{{ old('Date_of_birth', $Student->Date_of_birth) }}">
                @error('Date_of_birth')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <div class="form-group">
                <img src="{{ $Student->img }} "width="100px" height="100px">
            </div>

            <div class="form-group">
                <label for="Major">Major:</label>
                <select name="Major" class="form-control" id="Major">
                    <option value="IT background">IT background</option>
                    <option value="Not IT background">Not IT background</option>
                    <option value="Engineering">Engineering</option>
                </select>
                @error('Major')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
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
                    value="{{ old('linkedin', $Student->linkedin) }}">
                @error('linkedin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="github"> Github:</label>
                <input type="text" name="github" class="form-control" id="github" required
                    value="{{ old('github', $Student->github) }}">
                @error('github')
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
