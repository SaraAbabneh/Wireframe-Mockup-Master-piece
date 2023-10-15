@if (Auth::guard('Admin'))

    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Edit Cohort')


    @section('css')
    @endsection

    @section('title_page1')
        Edit

    @endsection
    @section('title_page2')
        Edit Cohort
    @endsection

    @section('content')

        <div class="container-fluid">
            <h2>Edit Cohort Information</h2>

            <form action="{{ route('cohorts.store', $Cohorts->id) }}" method="POST">
                @csrf
                @method('PUT')


                {{-- sara --}}
                <div class="form-group">
                    <label for="number">Cohort Number:</label>
                    <input type="number" name="number" class="form-control" id="number" required
                        value="{{ old('number', $Cohorts->number) }}">
                    @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="start_date">Cohort start_date:</label>
                    <input type="date" name="start_date" class="form-control" id="start_date" required
                        value="{{ old('start_date', $Cohorts->start_date) }}">
                    @error('start_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="end_date">Cohort end_date:</label>
                    <input type="date" name="end_date" class="form-control" id="end_date" required
                        value="{{ old('end_date', $Cohorts->end_date) }}">
                    @error('end_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="unmber_students">Cohort's Students Nnmber:</label>
                    <input type="number" name="unmber_students" class="form-control" id="unmber_students" required
                        value="{{ old('unmber_students', $Cohorts->unmber_students) }}">
                    @error('unmber_students')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                @if (now() >= $Cohorts->end_date)
                    <div class="form-group">
                        <label for="number_full_stack">The Count of Students enrolled in the full-stack:</label>
                        <input type="number" name="number_full_stack" class="form-control" id="number_full_stack" required
                            value="{{ old('number_full_stack', $Cohorts->number_full_stack) }}">
                        @error('number_full_stack')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="number_front_end">The Count of Students enrolled in the front_end:</label>
                        <input type="number" name="number_front_end" class="form-control" id="number_front_end" required
                            value="{{ old('number_front_end', $Cohorts->number_front_end) }}">
                        @error('number_front_end')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="number_back_end">The Count of Students enrolled in the back_end:</label>
                        <input type="number" name="number_back_end" class="form-control" id="number_back_end" required
                            value="{{ old('number_back_end', $Cohorts->number_back_end) }}">
                        @error('number_back_end')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for="number_employment">The Count of Students Employment:</label>
                    <input type="number" name="number_employment" class="form-control" id="number_employment" required
                        value="{{ old('number_employment', $Cohorts->number_employment) }}">
                    @error('number_employment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>


        <br>
        <input type="submit" value="Add Cohort" class="btn btn-success"><br>
        </form>



        {{-- ........................................ --}}


        <form action="{{ route('tasks.store', $Cohorts->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="admin-id" value="1" />
            {{-- sara --}}

            <div class="form-group">
                <label for="Titel">Task Titel:</label>
                <input type="text" name="Titel" class="form-control" id="Titel"
                    @error('subject') is-invalid @enderror required value="{{ old('Titel', $Cohorts->Titel) }}">
                @error('Titel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="Description">Task Description:</label>
                <input type="text" name="Description" class="form-control" id="	Description" required
                    value="{{ old('Description', $Cohorts->Description) }}">
                @error('Description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="start_at">Task start_at:</label>
                <input type="date" name="start_at" class="form-control" id="start_at" required
                    value="{{ old('start_at', $Cohorts->start_at) }}">
                @error('start_at')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="end_at">Task end_at:</label>
                <input type="date" name="end_at" class="form-control" id="end_at" required
                    value="{{ old('end_at', $Cohorts->end_at) }}">
                @error('end_at')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <select>
                    @foreach ($Cohorts as $item)
                        <option value="{{ $item->id }}"{{ $item->subject }}>
                    @endforeach
                </select>

            </div>

            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>



        {{-- ---------------------------------- --}}



        </div>




    @endsection

    @section('scripts')

    @endsection
@endif
