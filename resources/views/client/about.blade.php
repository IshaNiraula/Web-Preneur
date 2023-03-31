@extends('client.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">About Us</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">About</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container bg-secondary p-0">
        <center>
            <h3 class="mb-4 pt-3">Welcome To <span class="text-success">THE TAX ADVISER</span></h3>
        </center>
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column p-2">
                    <div class="d-flex">
                        <div class="ps-1">
                            <h3 class="text-gray">At The TAX ADVISER, we offer a complete range of accounting and
                                taxation services, including.</h3>
                            <ul style="text-align: justify">
                                <li>
                                    Preparation of tax returns accurately & efficiently for a reasonable tax deductible
                                    fee.
                                </li>
                                <li>
                                    Accounting and Book keeping services for Individuals, Partnerships, Companies, Trusts
                                    & Self Managed Superfunds.
                                </li>
                                <li>
                                    Completing Activity Statements (BAS/IAS), Business tax returns, financial statements,
                                    and all necessary paperwork to the ATO
                                </li>
                                <li>
                                    Tax planning advice.
                                </li>
                                <li>
                                    Recommending appropriate accounting software, setting up your system and training
                                    your staff.
                                </li>
                                <li>
                                    Formation of Business Structures such as Companies, Discretionary Trusts.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/tax.png') }}" alt="why choose us" class="w-100">
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div id="team" class="container py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h3 class="display-5 mb-0">Our Team Members</h3>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-3">
            <div class="col-lg-3">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img w-100" src="img/t1.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h5 class="text-white">Full Name</h5>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img w-100" src="img/t2.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h5 class="text-white">Full Name</h5>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img w-100" src="img/t3.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h5 class="text-white">Full Name</h5>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img w-100" src="img/t4.jpg" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h5 class="text-white">Full Name</h5>
                        <p class="text-white text-uppercase mb-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
