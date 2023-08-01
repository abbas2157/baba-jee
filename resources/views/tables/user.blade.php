<form action="{{ route('booking_store') }}" method="POST" >
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" required>
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" required>
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input @error('datetime') is-invalid @enderror" id="datetime" name="datetime"
                    placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" required />
                <label for="datetime">Date & Time</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select @error('people') is-invalid @enderror" id="select1" name="people" required>
                    <option value="1">People 1</option>
                    <option value="2">People 2</option>
                    <option value="3">People 3</option>
                </select>
                <label for="select1">No Of People</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Special Request" id="message" name="message" style="height: 100px" required></textarea>
                <label for="message">Special Request</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" id="button" type="submit">Book Now</button>
        </div>
    </div>
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

