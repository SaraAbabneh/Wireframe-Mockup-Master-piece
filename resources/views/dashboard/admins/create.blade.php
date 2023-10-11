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


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('admins.store') }}"
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
            <input type="radio" name="Gender" value="Femail">
            <input type="radio" name="Gender" value="Mail">
            @error('Gender')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="Date_of_birth"> Date_of_birth:</label>
            <input type="date" name="Date_of_birth" class="form-control" id="Date_of_birth"
                placeholder="Enter admin Date_of_birth ">
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
                <option value="job">Job</option>
                <option value="logistic">Logistic</option>
            </select>
            @error('position')
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
            <label for="linkedin"> linkedin:</label>
            <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Enter linkedin">
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
