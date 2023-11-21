@extends('layout.app')
@section('content')

    <body>
        <div class="hero page-inner overlay"
            style="background-image: url('https://i.ibb.co/DR3sCwr/Tahura-Lapak-Jaru-1024x768.jpg')">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 text-center mt-5">
                        <h1 class="heading" data-aos="fade-up">Login</h1>
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                            <ol class="breadcrumb text-center justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">
                                    Login Admin
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-sm ">
            <div class="row style="margin-top:30px;"">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5 py-5">
                    <div class=" border-0 shadow rounded-3 my-5 mt-5">
                        <div class="card-body p-sm-5 mt-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Login Admin</h5>
                            <form>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Remember password
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                        type="submit">Login</button>
                                </div>

                                <hr class="my-4">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
