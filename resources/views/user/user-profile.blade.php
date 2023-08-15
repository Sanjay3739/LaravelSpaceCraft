@extends('user.app')
@section('title')
Profile Page
@endsection
@section('userBody')

<!--Topbar -->
<div class="topbar transition">

    <div class="menu">
        <ul>
            <li class="nav-item dropdown dropdown-list-toggle">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell size-icon-1"></i><span class="badge bg-danger notif">4</span>
                </a>
                <div class="dropdown-menu dropdown-list">
                    <div class="dropdown-header">Notifications</div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <div class="custome-list-notif">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-icon bg-primary text-white">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    The Atrana template has the latest update!
                                    <div class="time text-primary">3 Min Ago</div>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Sri asks you for friendship!
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-danger text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Storage has been cleared, now you can get back to work!
                                    <div class="time">20 Hours Ago</div>
                                </div>
                            </a>


                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Welcome to Atrana Template, I hope you enjoy using this template!
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="dropdown-footer text-center">
                        <a href="#">View All</a>
                    </div>


            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/avatar-1.png') }}" alt="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>My Profile</span></a>
                </ul>
            </li>
        </ul>
    </div>
</div>

@include("user.layouts.sidebar")

<!--Content Start-->
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h4>Hi, Sanjay!</h4>
            <p>Change information about yourself on this page</p>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center  ">

                        <img src="{{ asset('images/avatar-1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100px" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary text-white me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" accept="my-profile.html">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input class="form-control" type="text" id="firstName" name="firstName" value="" placeholder="Enter Your First Name." autofocus />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" value="" placeholder="Enter Your Last Name." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email" value="" placeholder="Sanjay@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="" placeholder="Enter Your Phone Number." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="Birth" class="form-label">Birth Date</label>
                                <input type="date" class="form-control" id="Birth" name="birtdate" value="" placeholder="Enter Your Birtdate..." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Organization</label>
                                <input type="text" class="form-control" id="organization" name="organization" value="" placeholder="Enter Your Organization Name." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="Address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="Address" name="address" value="" placeholder="Enter Your Address." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="habbit" class="form-label">What You Like...?</label>
                                <input type="text" class="form-control" id="habbit" name="what_you_like" value=""   placeholder="Enter Your Choise." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" value="" placeholder="Enter Your Country Name." />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="" placeholder="Enter Your City Name." />
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <h5 class="card-header">Delete Account</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                </div>
                <form method="POST" accept="my-profile.html">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                        <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                </form>
            </div>
        </div>
    </div>
</div>


</div> <!-- End Container -->
</div><!-- End Content -->


<!-- Footer -->
@include("user.layouts.footer")


<!-- Loader -->
@include("user.layouts.loader")


@endsection
