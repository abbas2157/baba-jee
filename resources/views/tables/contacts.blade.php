<form id="my-form">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" id="button" type="submit">Send Message</button>
        </div>
    </div>
</form>
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
                url: "{{ route('stor') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    $("#output").text(data.res);
                },
                error: function(e) {
                    $("#output").text(e.responseText);
                }
            });
        });
    });
    $('#button').click(function() {
        $(this).css('background-color', 'red');
    }).mouseleave(function() {
        $(this).css('background-color', '');
    });
</script>
