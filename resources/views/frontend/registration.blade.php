@extends('frontend._layout')
@section('styles')
    <style>
        .default_hidden {
            display: none;
        }
    </style>
@endsection
@section('content')
    <section class="popular-course d-flex justify-content-center py-4">
        <div class="container">
            <h2 class="fw-bold text-center py-4">Registration</h2>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h3 class="text-center">Student</h3>
                    <form action="." method="post" id="submit-contact-form">
                        <div class="mb-4">
                            <label for="registration_type" class="form-label">Join as<span
                                    class="text-danger">(required)</span> </label>
                            <select class="form-select" aria-label="Default select example" id="registration_type">
                                <option selected>Select type</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                        <div class="mb-4 additional-fields default_hidden" id="facebook_field">
                            <label for="facebook_id" class="form-label">Facebook ID Link</label>
                            <input type="text" id="facebook_id" name="facebook_id" class="form-control">
                        </div>
                        <div class="mb-4 additional-fields default_hidden" id="whatsapp_field">
                            <label for="whatsapp_number" class="form-label">WhatsApp Number</label>
                            <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Name <span
                                    class="text-danger">(required)</span></label>
                            <input type="text" id="name" name="name" required class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Mobile <span
                                    class="text-danger">(required)</span></label>
                            <input type="text" id="mobile" name="mobile" required class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control"></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="registration-btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#registration_type').change(function() {
                var selectedOption = $(this).val();
                if (selectedOption === 'student') {
                    $('.additional-fields').removeClass('default_hidden');
                } else {
                    $('.additional-fields').addClass('default_hidden');
                    $('.additional-fields input').val('');
                }
            });
        });
    </script>
@endsection
