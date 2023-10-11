<div class="bg-light p-4">

    @if (Session::has('success'))
        <div class="alert alert-success text-center" dir="rtl">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger text-center" dir="rtl">
            {{ Session::get('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
        {{ csrf_field() }}
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}">
                    <label for="name">Your Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" value="{{ old('email') }}">
                    <label for="email">Your Email</label>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                    <label for="subject">Subject</label>
                    @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                    <label for="message">Message</label>
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div>
