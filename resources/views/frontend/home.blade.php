@extends('frontend._layout')
@section('content')
    <section class="search d-flex justify-content-center py-2">
        <form action="" method="get" class="input-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" name="search" placeholder="Search here..." />
            <button type="submit" class="button">Search</button>
        </form>
    </section>
    <section class="popular-course d-flex justify-content-center py-4">
        <div class="container text-center">
            <h2 class="section-title py-4">Popular courses</h2>
            <div class="row">
                <div class="col-md-4 py-2">
                    <div class="card">
                        <div class="bookmark">
                            <div class="bookmark-background"></div>
                            <div class="bookmark-background-hover"></div>
                            <a href="#">
                                <svg title="Bookmark course" xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0"
                                    stroke-linecap="round" stroke-linejoin="round" class="bookmark-icon">
                                    <path d="M4 5v16l8-8 8 8V5H4z"></path>
                                </svg>
                            </a>
                        </div>
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <a href="#" class="btn btn-outline-dark enroll-btn my-4">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <div class="bookmark">
                            <div class="bookmark-background"></div>
                            <div class="bookmark-background-hover"></div>
                            <!-- New hover background element -->
                            <a href="#">
                                <svg title="Bookmark course" xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0"
                                    stroke-linecap="round" stroke-linejoin="round" class="bookmark-icon">
                                    <path d="M4 5v16l8-8 8 8V5H4z"></path>
                                </svg>
                            </a>
                        </div>
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <a href="#" class="btn btn-outline-dark enroll-btn my-4">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <div class="bookmark">
                            <div class="bookmark-background"></div>
                            <div class="bookmark-background-hover"></div>
                            <!-- New hover background element -->
                            <a href="#">
                                <svg title="Bookmark course" xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0"
                                    stroke-linecap="round" stroke-linejoin="round" class="bookmark-icon">
                                    <path d="M4 5v16l8-8 8 8V5H4z"></path>
                                </svg>
                            </a>
                        </div>
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <a href="#" class="btn btn-outline-dark enroll-btn my-4">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-course d-flex justify-content-center py-4">
        <div class="container">
            <h2 class="section-title py-4 text-center">Blogs</h2>
            <div class="row">
                <div class="col-md-4 py-2">
                    <div class="card">
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="date">Date: 10-02-2023</span>
                                <a href="" class="category">Category</a>
                            </div>
                            <h2 class="card-title py-3 fw-bold">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <p class="py-2 blog-list-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Odio, similique. Soluta
                                doloremque illum magnam voluptate, obcaecati
                                facere reiciendis, consequatur, aut odio
                                tenetur blanditiis! Doloribus deleniti
                                voluptatibus reiciendis dolores atque dicta.
                            </p>
                            <a href="#" class="my-4 read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="date">Date: 10-02-2023</span>
                                <a href="" class="category">Category</a>
                            </div>
                            <h2 class="card-title py-3 fw-bold">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <p class="py-2 blog-list-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Odio, similique. Soluta
                                doloremque illum magnam voluptate, obcaecati
                                facere reiciendis, consequatur, aut odio
                                tenetur blanditiis! Doloribus deleniti
                                voluptatibus reiciendis dolores atque dicta.
                            </p>
                            <a href="#" class="my-4 read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="date">Date: 10-02-2023</span>
                                <a href="" class="category">Category</a>
                            </div>
                            <h2 class="card-title py-3 fw-bold">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <p class="py-2 blog-list-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Odio, similique. Soluta
                                doloremque illum magnam voluptate, obcaecati
                                facere reiciendis, consequatur, aut odio
                                tenetur blanditiis! Doloribus deleniti
                                voluptatibus reiciendis dolores atque dicta.
                            </p>
                            <a href="#" class="my-4 read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="date">Date: 10-02-2023</span>
                                <a href="" class="category">Category</a>
                            </div>
                            <h2 class="card-title py-3 fw-bold">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <p class="py-2 blog-list-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Odio, similique. Soluta
                                doloremque illum magnam voluptate, obcaecati
                                facere reiciendis, consequatur, aut odio
                                tenetur blanditiis! Doloribus deleniti
                                voluptatibus reiciendis dolores atque dicta.
                            </p>
                            <a href="#" class="my-4 read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="date">Date: 10-02-2023</span>
                                <a href="" class="category">Category</a>
                            </div>
                            <h2 class="card-title py-3 fw-bold">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <p class="py-2 blog-list-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Odio, similique. Soluta
                                doloremque illum magnam voluptate, obcaecati
                                facere reiciendis, consequatur, aut odio
                                tenetur blanditiis! Doloribus deleniti
                                voluptatibus reiciendis dolores atque dicta.
                            </p>
                            <a href="#" class="my-4 read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <div class="card">
                        <img src="{{ asset('frontend/images') }}/1.png" width="100%" class="card-img-top"
                            alt="Placeholder Image" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="date">Date: 10-02-2023</span>
                                <a href="" class="category">Category</a>
                            </div>
                            <h2 class="card-title py-3 fw-bold">
                                <a href="#">কুরআন ও সালাত অনুধাবন কোর্স</a>
                            </h2>
                            <p class="py-2 blog-list-text">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Odio, similique. Soluta
                                doloremque illum magnam voluptate, obcaecati
                                facere reiciendis, consequatur, aut odio
                                tenetur blanditiis! Doloribus deleniti
                                voluptatibus reiciendis dolores atque dicta.
                            </p>
                            <a href="#" class="my-4 read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <ul class="pagination pagination-md justify-content-end mt-4">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="counter-up d-flex justify-content-center py-4">
        <div class="container text-center py-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="counter-content">
                        <h2 class="mb-3">
                            <span class="counter">5,000</span>
                        </h2>
                        <h3 class="mb-3">Students</h3>
                        <i class="fa fa-users mb-3"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-content">
                        <h2 class="mb-3">
                            <span class="counter">900</span>
                        </h2>
                        <h3 class="mb-3">Teacher</h3>
                        <i class="fa fa-users mb-3"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-content">
                        <h2 class="mb-3">
                            <span class="counter">50</span>
                        </h2>
                        <h3 class="mb-3">Course</h3>
                        <i class="fa fa-users mb-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
