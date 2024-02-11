@extends('frontend._layout')
@section('content')
    <section class="popular-course d-flex justify-content-center py-4 vh-100">
        <div class="container">
            <h2 class="fw-bold text-center py-4">Contact Form</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="leading-relaxed text-xl text-gray-900">
                        We're here to assist you! If you have any questions or need assistance, please feel free to
                        reach out to us.
                        <br><br>
                        You can also email us. Click here to reveal email address
                        <a href="https://veilmail.io/e/FkKh7o"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">https://veilmail.io/e/FkKh7o</a>
                    </p>

                </div>
                <div class="col-md-6 mt-10">
                    <form action="." method="post" id="submit-contact-form">
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" required=""
                                class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="mobile" class="form-label">
                                Mobile</label>
                            <input type="mobile" id="mobile" name="mobile" required=""
                                class="form-control">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">
                                Message</label>
                            <textarea id="message" name="message" required=""
                                class="form-control"></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit"
                                class="registration-btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
