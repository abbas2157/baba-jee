<form id="my-form">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating date" id="date3" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" id="datetime" name="datetime"
                    placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                <label for="datetime">Date & Time</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="select1" name="people">
                    <option value="1">People 1</option>
                    <option value="2">People 2</option>
                    <option value="3">People 3</option>
                </select>
                <label for="select1">No Of People</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Special Request" id="message" name="message" style="height: 100px"></textarea>
                <label for="message">Special Request</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" id="button" type="submit">Book Now</button>
        </div>
    </div>
</form>
<!-- Add a div to show the success message -->
<div id="success-message" style="display: none; color: green;">Table Booked successfully!</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<span id="output"></span>
<script>
    $(document).ready(function() {
        $('#my-form').submit(function(event) {
            event.preventDefault();

            var form = $('#my-form')[0];
            var formData = new FormData(form);

            $.ajax({
                type: 'POST',
                url: "{{ route('store') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    $("#output").text(data.res);
                    showSuccessMessage();
                    clearOutputAfterDelay();
                },
                error: function(e) {
                    $("#output").text(e.responseText);
                    clearOutputAfterDelay();
                }
            });
        });

        function showSuccessMessage() {
            // Show the success message
            $("#success-message").show();

            // Hide the success message after 5 seconds
            setTimeout(function() {
                $("#success-message").hide();
            }, 2000); // 5000 milliseconds = 5 seconds
        }

        function clearOutputAfterDelay() {
            setTimeout(function() {
                $("#output").text('');
            }, 2000); // 5000 milliseconds = 5 seconds
        }
    });

    $('#button').click(function() {
        $(this).css('background-color', 'green');
    }).mouseleave(function() {
        $(this).css('background-color', '');
    });
</script>
