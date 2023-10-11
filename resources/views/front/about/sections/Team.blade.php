<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="text-secondary text-uppercase">Our Team</h6>
            <h1 class="mb-5">Expert Team Members</h1>
        </div>
        <div class="row g-4">

            @foreach ($Admin as $item)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{ $item->img }}"
                                alt="{{ $item->First_name . ' ' . $item->Last_name }}">
                        </div>
                        <h5 class="mb-0"> {{ $item->First_name . ' ' . $item->Last_name }} </h5>
                        <p> {{ $item->position }} </p>
                        <div class="btn-slide mt-1">
                            <i class="fa fa-share"></i>
                            <span>
                                <a href=" {{ $item->linkedin }} "><i class="fab fa-linkedin" target="_blank"></i></a>
                                <a href="{{ route('Portfolio', $item->id) }}"><i class="fa fa-id-badge"
                                        target="_blank"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->
