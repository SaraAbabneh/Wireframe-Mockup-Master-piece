@if (Auth::guard('Admin'))

    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Edit Technology')


    @section('css')
    @endsection

    @section('title_page1')
        Edit

    @endsection
    @section('title_page2')
        Edit Technology
    @endsection

    @section('content')

        <div class="container-fluid">
            <h2>Edit Technology </h2>


            <form action="{{ route('Technology.update', $Map->id) }}" method="POST">
                @csrf
                @method('PUT')

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
                    required value="{{ old('start_at', $Map->start_at) }}">
                    @error('start_at')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="end_at">Technology end_at:</label>
                    <input type="date" name="end_at" class="form-control" id="end_at"  required value="{{ old('end_at', $Map->end_at) }}">
                    @error('end_at')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
        
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
                
            </form>







        </div>




    @endsection

    @section('scripts')

    @endsection

@endif
