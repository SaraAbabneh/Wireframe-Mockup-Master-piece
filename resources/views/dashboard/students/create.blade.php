@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New Student')


@section('css')
@endsection

@section('title_page1')
    Students
@endsection

@section('title_page2')
    Create New Admin
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('students.store') }}"
        enctype="multipart/form-data">>
        @csrf
        <div class="form-group">
            <label for="First_name"> First_name:</label>
            <input type="text" name="First_name" class="form-control" id="First_name" placeholder="Enter First_name">
            @error('First_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <label for="Last_name"> Last_name:</label>
            <input type="text" name="Last_name" class="form-control" id="Last_name" placeholder="Enter Last_name">
            @error('Last_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <label for="Email"> Email:</label>
            <input type="Email" name="Email" class="form-control" id="Email" placeholder="Enter Email  ">
            @error('Email ')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password"> Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter admin password ">
            @error('password')
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
            <label for="Date_of_birth">Date_of_birth:</label>
            @php
                $currentDate = now()->format('Y-m-d'); // Get the current date in 'YYYY-MM-DD' format
            @endphp
            <input type="date" name="Date_of_birth" class="form-control" id="Date_of_birth"
                placeholder="Enter admin Date_of_birth" max="{{ $currentDate }}">
            @error('Date_of_birth')
                <span class="text-danger">{{ $message }}</span>
            @enderror
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
            <input type="file" name="img" class="form-control" id="img" required width="100px" height="100px">
            @error('img')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="linkedin"> Linkedin:</label>
            <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Enter linkedin">
            @error('linkedin')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group">
            <label for="github"> Github:</label>
            <input type="text" name="github" class="form-control" id="github" placeholder="Enter github">
            @error('github')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <br>
        <input type="submit" value="Add Admin" class="btn btn-success"><br>
    </form>







@endsection

@section('scripts')

@endsection
