<div id="filter" class="d-flex justify-content-center my-3"> <!-- Add Bootstrap classes for alignment and spacing -->
    <select id="BackgroundFilter" class="form-select"> <!-- Add Bootstrap class for form-select -->
        <option value="all">All</option>
        @foreach ($Student as $item)
            <option value="{{ $item->Major }}">{{ $item->Major }}</option>
        @endforeach
    </select>
</div>


   <!-- filter Start -->
