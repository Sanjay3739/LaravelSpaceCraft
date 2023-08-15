@extends('user.app')
@section('title')
Dashboard
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
                    <img  src="{{ asset('images/avatar-1.png') }}" alt="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My
                            Profile</span></a>
                    <a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i>
                        <span>Settings</span></a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>My
                            Profile</span></a>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!--Sidebar-->
@include("user.layouts.sidebar")
<!-- End Sidebar-->


<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Dashboard</h1>
				<p></p>
			</div>

			<div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-inbox icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Revenue</p>
									<h5>$65</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Orders</p>
									<h5>3000</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Sales</p>
									<h5>5500</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-id-card  icon-home bg-warning text-light"></i>
								</div>
								<div class="col-8">
									<p>Employes</p>
									<h5>256</h5>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
						</div>
						<div class="card-body">
							<div id="columnchart"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h4>Recent Messages</h4>
						</div>
						<div class="card-body pb-4">
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="{{ asset('images/4.jpg') }}">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Hank Schrader</h5>
									<h6 class="text-muted mb-0">@johnducky</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
                                    <img src="{{ asset('images/5.jpg') }}">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Dean Winchester</h5>
									<h6 class="text-muted mb-0">@imdean</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
                                    <img src="{{ asset('images/1.jpg') }}">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">John Doe</h5>
									<h6 class="text-muted mb-0">@Doejohn</h6>
								</div>
							</div>
							<div class="px-4">
								<button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Start
									Conversation</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Latest Transaction</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Order Id</th>
											<th scope="col">Billing Name</th>
											<th scope="col">Date</th>
											<th scope="col">Total</th>
											<th scope="col">Payment Status</th>
											<th scope="col">Payment Method</th>
											<th scope="col">View Details</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">#SK2548 </th>
											<td>Neal Matthews</td>
											<td>07 Oct, 2022</td>
											<td>$400</td>
											<td><span class="text-success">Paid</span></td>
											<td>Mastercard</td>
											<td><button class="btn btn-primary">View Details</button></td>
										</tr>

										<tr>
											<th scope="row">#SK2548 </th>
											<td>Neal Matthews</td>
											<td>07 Oct, 2022</td>
											<td>$400</td>
											<td><span class="text-success">Paid</span></td>
											<td>Visa</td>
											<td><button class="btn btn-primary">View Details</button></td>
										</tr>

										<tr>
											<th scope="row">#SK2548 </th>
											<td>Neal Matthews</td>
											<td>07 Oct, 2022</td>
											<td>$400</td>
											<td><span class="text-danger">Chargeback</span></td>
											<td>Paypal</td>
											<td><button class="btn btn-primary">View Details</button></td>
										</tr>

										<tr>
											<th scope="row">#SK2548 </th>
											<td>Neal Matthews</td>
											<td>07 Oct, 2022</td>
											<td>$400</td>
											<td><span class="text-warning">Refund</span></td>
											<td>Visa</td>
											<td><button class="btn btn-primary">View Details</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    @include("user.layouts.loader")
    @include("user.layouts.footer")
    @endsection
