@if (Auth::guard('Admin'))

    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Create New Technology')


    @section('css')
    @endsection

    @section('title_page1')
        Technologys
    @endsection

    @section('title_page2')
        Create New Technology
    @endsection

    @section('content')


        <form method="POST" style="width: 80%; margin: 50px auto;" action="{{ route('Technology.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div class="form-group">
                <label for="Technology">Technology:</label>
                <select name="Technology" class="form-control" id="Technology">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="Bootstrap">Bootstrap</option>
                    <option value="JS">JS</option>
                    <option value="PHP">PHP</option>
                    <option value=".Net">.Net</option>
                    <option value="Laravel">Laravel</option>
                    <option value="React_js">React.js</option>
                    <option value="Angular">Angular</option>
                </select>
            </div>

            <div class="form-group">
                <label for="start_at">Technology start_at:</label>
                <input type="date" name="start_at" class="form-control" id="start_at"
                    placeholder="Enter Technology start_at">
                @error('start_at')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="end_at">Technology end_at:</label>
                <input type="date" name="end_at" class="form-control" id="end_at" placeholder="Enter Technology end_at">
                @error('end_at')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <br>
            <button type="submit" class="btn btn-success">Add Technology</button>
        </form>







    @endsection

    @section('scripts')

@endsection
@endif
