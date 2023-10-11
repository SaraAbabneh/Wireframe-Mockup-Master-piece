@admin()
    @extends('dashboard.dashboard_layouts.master')

    @section('title', 'Edit Task')


    @section('css')
    @endsection

    @section('title_page1')
        Edit

    @endsection
    @section('title_page2')
        Edit Task
    @endsection

    @section('content')

        <div class="container-fluid">
            <h2>Edit Task Information</h2>


            <form action="{{ route('tasks.store', $Tasks->id) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="admin_id" value="{{ auth()->admin->id }}" />
                {{-- <input type="hidden" name="admin_id" value="1" /> --}}
                @foreach ($Typies as $item)
                  <div class="form-group">
                    <label for="task_type">Course Type:</label>
                    <select name="type_id" class="form-control" id="task_type">
                        <option value="{{$item->id}}">{{$item->task_type}}</option>
                    </select>
                </div> {{-- sara --}}  
                @endforeach
                
        
                @foreach ($Technologies as $Technology )
                   <div class="form-group">
                    <label for="technology">Course Technology:</label>
                    <select name="technology_id" class="form-control" id="technology">
                        <option value="{{$item->id}}">{{$item->Technology}}</option>
                    </select>
                </div> {{-- sara --}} 
                @endforeach
                

                <div class="form-group">
                    <label for="Titel">Task Titel:</label>
                    <input type="text" name="Titel" class="form-control" id="Titel" @error('subject') is-invalid @enderror
                        required value="{{ old('Titel', $Tasks->Titel) }}">
                    @error('Titel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="Description">Task Description:</label>
                    <input type="text" name="Description" class="form-control" id="	Description" required
                        value="{{ old('Description', $Tasks->Description) }}">
                    @error('Description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="start_at">Task start_at:</label>
                    <input type="date" name="start_at" class="form-control" id="start_at" required
                        value="{{ old('start_at', $Tasks->start_at) }}">
                    @error('start_at')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="end_at">Task end_at:</label>
                    <input type="date" name="end_at" class="form-control" id="end_at" required
                        value="{{ old('end_at', $Tasks->end_at) }}">
                    @error('end_at')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <select>
                        @foreach ($Tasks as $item)
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
@endadmin
