@extends('backend.layouts.master')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
	<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
		<div class="wrapper">
			<div class="main">
				<main class="content">
					<div class="row">
						<!-- Show Data Start -->
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Sales</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">2.382</h1>
												<div class="mb-0">
													<span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Visitors</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">14.212</h1>
												<div class="mb-0">
													<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Earnings</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">$21.300</h1>
												<div class="mb-0">
													<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Orders</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="shopping-cart"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">64</h1>
												<div class="mb-0">
													<span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Show Data  End -->
						

						<!-- Recent Movement Start -->
						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="float-end">
										<form class="row g-2">
											<div class="col-auto">
												<select class="form-select form-select-sm bg-light border-0">
													<option>Jan</option>
													<option value="1">Feb</option>
													<option value="2">Mar</option>
													<option value="3">Apr</option>
												</select>
											</div>
											<div class="col-auto">
												<input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
													placeholder="Search..">
											</div>
										</form>
									</div>
									<h5 class="card-title mb-0">Recent Movement</h5>
								</div>
								<div class="card-body pt-2 pb-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- Recent Movement End -->
					</div>


					<div class="row">
						<!-- Browser Start -->
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown position-relative">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-horizontal"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Browser Usage</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td><i class="fas fa-circle text-primary fa-fw"></i> Chrome <span
															class="badge badge-success-light">+12%</span></td>
													<td class="text-end">4306</td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-warning fa-fw"></i> Firefox <span
															class="badge badge-danger-light">-3%</span></td>
													<td class="text-end">3801</td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-danger fa-fw"></i> Edge</td>
													<td class="text-end">1689</td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-dark fa-fw"></i> Other</td>
													<td class="text-end">3251</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- Browser End -->

						
						<!-- Calender Start -->
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown position-relative">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-horizontal"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Calender End -->

					</div>
				</div>
			</main>
		</div>
	</div>

</body>
</html>
@endsection