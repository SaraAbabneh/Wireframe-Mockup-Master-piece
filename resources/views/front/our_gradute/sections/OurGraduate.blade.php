    <!--Our Graduate Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="mb-5">Our Graduate</h1>
            </div>
            <div class="row g-4">

                @foreach ($Cohort as $item)
                    @if ($item->number != 3)
                         @php continue; @endphp
                    @else
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="price-item">
                                <div class="border-bottom p-4 mb-4">
                                    <h1 class="text-primary mb-1">Cohort {{ $item->number }}</h1>
                                    <h6 class="display-20 mb-0">
                                        {{ \Carbon\Carbon::parse($item->start_date)->format('d/m/Y') }} -
                                        {{ \Carbon\Carbon::parse($item->end_date)->format('d/m/Y') }}
                                    </h6>
                                    
                                </div>
                                <div class="p-4 pt-0">
                                    <p><i class="fa fa-check text-success me-3"></i> {{ $item->unmber_student }}35
                                        Student
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i> {{ $item->unmber_full }} Full Stack
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>{{ $item->unmber_front }} Front End
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>{{ $item->unmber_back }} Back End
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>{{ $item->unmber_empoly }} %
                                        Employment
                                    </p>
                                    <a class="btn-slide mt-2" href="{{ route('Cohort', $item->number) }}"><i
                                            class="fa fa-arrow-right"></i><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>
        </div>
    </div>
    <!-- Our Graduate End -->
