    <!--Members Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

                <h1 class="mb-5">Cohort {{ $id }}</h1>
            </div>
            <div class="row g-4">

                @foreach ($Student as $item)
                    <div class="col-lg-3 col-md-6 " data-major="{{ $item->major }}">
                        <div class="team-item p-4" data-Major="{{ $item->Major }}">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid"
                                    src="{{ !empty($item->img) ? asset($item->img) : asset('frontend/img/default-profile-icon.jpg') }}"
                                    alt="{{ $item->First_Name . ' ' . $item->Last_name }}">
                            </div>
                            @if (isset($item->First_Name) && isset($item->Last_name))
                                <h5>{{ $item->First_Name . ' ' . $item->Last_name }}</h5>
                            @else
                                <p>Name not available.</p>
                            @endif
                            <p class="mb-2">{{ $item->status }}</p>

                            <div class="btn-slide mt-1">
                                <i class="fa fa-share"></i>
                                <span>
                                    <a href="{{ route('Portfolio', $item->id) }}">
                                        <i class="fa fa-id-badge" target="_blank"></i>
                                    </a>
                                    <a href="{{ $item->linkedin }}">
                                        <i class="fab fa-linkedin" target="_blank"></i>
                                    </a>
                                    <a href="{{ $item->github }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 496 512">
                                            <path fill="#ffff" d="M244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                                        </svg>
                                    </a>
                                </span>
                                
                                
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
    <!--Members End  -->
    <!-- Add this JavaScript code within your HTML or in a separate JS file -->
    @section('js-page')
        <script>
            // Function to filter students based on selected major
            function filterStudents() {
                var selectedMajor = document.getElementById('BackgroundFilter').value;
                var students = document.querySelectorAll('.team-item');

                students.forEach(function(student) {
                    var major = student.getAttribute('data-Major');

                    if (selectedMajor === 'all' || major === selectedMajor) {
                        student.style.visibility = 'visible';
                    } else {
                        student.style.visibility = 'hidden';
                    }
                });
            }

            // Attach an event listener to the dropdown to trigger the filter
            document.getElementById('BackgroundFilter').addEventListener('change', filterStudents);

            // Initialize the filter on page load
            window.onload = filterStudents;
        </script>
        <style>
            .team-item {
                /* Set initial visibility and transition properties */
                visibility: visible;
                opacity: 1;
                transition: opacity 0.1s ease-in-out;
                /* Adjust the duration and timing function as needed */
            }

            .team-item.hidden {
                /* Set visibility to hidden and opacity to 0 for hidden elements */
                visibility: hidden;
                opacity: 0;
            }
        </style>
    @endsection
