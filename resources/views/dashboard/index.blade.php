{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
            <div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Club</p>
					</div>
				
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">76</h2>
										<span>Appointment</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
											<path
												d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z"
												fill="#007A64" />
											<path
												d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z"
												fill="#007A64" />
											<path
												d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z"
												fill="#007A64" />
											<path
												d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z"
												fill="#007A64" />
										</g>
										<defs>
											<clipPath id="clip0">
												<rect width="40" height="40" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="progress rounded-0" style="height: 4px">
								<div class="
                      progress-bar
                      rounded-0
                      bg-secondary
                      progress-animated
                    " style="width: 50%; height: 4px" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">124,551</h2>
										<span>Total Customers</span>
									</div>
										<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 11.5 6 C 9.578125 6 8 7.578125 8 9.5 C 8 11.421875 9.578125 13 11.5 13 C 13.421875 13 15 11.421875 15 9.5 C 15 7.578125 13.421875 6 11.5 6 Z M 20.5 6 C 18.578125 6 17 7.578125 17 9.5 C 17 11.421875 18.578125 13 20.5 13 C 22.421875 13 24 11.421875 24 9.5 C 24 7.578125 22.421875 6 20.5 6 Z M 11.5 8 C 12.339844 8 13 8.660156 13 9.5 C 13 10.339844 12.339844 11 11.5 11 C 10.660156 11 10 10.339844 10 9.5 C 10 8.660156 10.660156 8 11.5 8 Z M 20.5 8 C 21.339844 8 22 8.660156 22 9.5 C 22 10.339844 21.339844 11 20.5 11 C 19.660156 11 19 10.339844 19 9.5 C 19 8.660156 19.660156 8 20.5 8 Z M 7 12 C 4.800781 12 3 13.800781 3 16 C 3 17.113281 3.476563 18.117188 4.21875 18.84375 C 2.886719 19.746094 2 21.28125 2 23 L 4 23 C 4 21.332031 5.332031 20 7 20 C 8.667969 20 10 21.332031 10 23 L 12 23 C 12 21.28125 11.113281 19.746094 9.78125 18.84375 C 10.523438 18.117188 11 17.113281 11 16 C 11 13.800781 9.199219 12 7 12 Z M 12 23 C 11.375 23.835938 11 24.886719 11 26 L 13 26 C 13 24.332031 14.332031 23 16 23 C 17.667969 23 19 24.332031 19 26 L 21 26 C 21 24.886719 20.625 23.835938 20 23 C 19.660156 22.546875 19.25 22.160156 18.78125 21.84375 C 19.523438 21.117188 20 20.113281 20 19 C 20 16.800781 18.199219 15 16 15 C 13.800781 15 12 16.800781 12 19 C 12 20.113281 12.476563 21.117188 13.21875 21.84375 C 12.75 22.160156 12.339844 22.546875 12 23 Z M 20 23 L 22 23 C 22 21.332031 23.332031 20 25 20 C 26.667969 20 28 21.332031 28 23 L 30 23 C 30 21.28125 29.113281 19.746094 27.78125 18.84375 C 28.523438 18.117188 29 17.113281 29 16 C 29 13.800781 27.199219 12 25 12 C 22.800781 12 21 13.800781 21 16 C 21 17.113281 21.476563 18.117188 22.21875 18.84375 C 20.886719 19.746094 20 21.28125 20 23 Z M 7 14 C 8.117188 14 9 14.882813 9 16 C 9 17.117188 8.117188 18 7 18 C 5.882813 18 5 17.117188 5 16 C 5 14.882813 5.882813 14 7 14 Z M 25 14 C 26.117188 14 27 14.882813 27 16 C 27 17.117188 26.117188 18 25 18 C 23.882813 18 23 17.117188 23 16 C 23 14.882813 23.882813 14 25 14 Z M 16 17 C 17.117188 17 18 17.882813 18 19 C 18 20.117188 17.117188 21 16 21 C 14.882813 21 14 20.117188 14 19 C 14 17.882813 14.882813 17 16 17 Z"  fill="#007A64"> </path></svg>
								</div>
							</div>
							<div class="progress rounded-0" style="height: 4px">
								<div class="
                      progress-bar
                      rounded-0
                      bg-secondary
                      progress-animated
                    " style="width: 90%; height: 4px" role="progressbar">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">442</h2>
										<span>Total Staff</span>
									</div>
								
								

									<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 16 4 C 12.144531 4 9 7.144531 9 11 C 9 13.378906 10.210938 15.484375 12.03125 16.75 C 7.925781 18.351563 5 22.351563 5 27 L 7 27 C 7 22.601563 10.191406 18.925781 14.375 18.15625 L 15 20 L 17 20 L 17.625 18.15625 C 21.808594 18.925781 25 22.601563 25 27 L 27 27 C 27 22.351563 24.074219 18.351563 19.96875 16.75 C 21.789063 15.484375 23 13.378906 23 11 C 23 7.144531 19.855469 4 16 4 Z M 16 6 C 18.773438 6 21 8.226563 21 11 C 21 13.773438 18.773438 16 16 16 C 13.226563 16 11 13.773438 11 11 C 11 8.226563 13.226563 6 16 6 Z M 15 21 L 14 27 L 18 27 L 17 21 Z" fill="#007A64"> </path></svg>
								
								
								
								</div>
							</div>
							<div class="progress rounded-0" style="height: 4px">
								<div class="
                      progress-bar
                      rounded-0
                      bg-secondary
                      progress-animated
                    " style="width: 30%; height: 4px" role="progressbar">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">$5,034</h2>
										<span>Total Earning</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M13.7 39.9993C15.8603 40.0123 18.0017 39.5921 20 38.763C21.9962 39.5991 24.139 40.0196 26.3 39.9993C32.861 39.9993 38 36.463 38 31.9467V24.4159C38 19.8996 32.861 16.3633 26.3 16.3633C25.9958 16.3633 25.697 16.3779 25.4 16.3943V7.87804C25.4 3.45448 20.261 0 13.7 0C7.139 0 2 3.45448 2 7.87804V32.1213C2 36.5448 7.139 39.9993 13.7 39.9993ZM34.4 31.9467C34.4 34.0358 31.0736 36.363 26.3 36.363C21.5264 36.363 18.2 34.0358 18.2 31.9467V30.2649C20.6376 31.7624 23.4476 32.5262 26.3 32.4667C29.1524 32.5262 31.9624 31.7624 34.4 30.2649V31.9467ZM26.3 19.9996C31.0736 19.9996 34.4 22.3269 34.4 24.4159C34.4 26.505 31.0736 28.8304 26.3 28.8304C21.5264 28.8304 18.2 26.5032 18.2 24.4159C18.2 22.3287 21.5264 19.9996 26.3 19.9996ZM13.7 3.6363C18.4736 3.6363 21.8 5.87262 21.8 7.87804C21.8 9.88346 18.4736 12.1216 13.7 12.1216C8.9264 12.1216 5.6 9.88528 5.6 7.87804C5.6 5.87081 8.9264 3.6363 13.7 3.6363ZM5.6 13.6034C8.04776 15.0717 10.8538 15.8181 13.7 15.7579C16.5462 15.8181 19.3522 15.0717 21.8 13.6034V16.9633C19.8383 17.4628 18.0392 18.4698 16.58 19.8851C15.6336 20.092 14.6683 20.198 13.7 20.2015C8.9264 20.2015 5.6 17.9651 5.6 15.9597V13.6034ZM5.6 21.6851C8.04828 23.1519 10.854 23.8976 13.7 23.8378C14.0204 23.8378 14.33 23.7978 14.645 23.7814C14.6182 23.9919 14.6032 24.2037 14.6 24.4159V28.2068C14.2976 28.225 14.006 28.2831 13.7 28.2831C8.9264 28.2831 5.6 26.0468 5.6 24.0396V21.6851ZM5.6 29.7649C8.04776 31.2332 10.8538 31.9796 13.7 31.9194C14.0024 31.9194 14.2994 31.8958 14.6 31.8813V31.9467C14.6258 33.4944 15.2146 34.9784 16.2542 36.1157C15.412 36.2763 14.5571 36.3591 13.7 36.363C8.9264 36.363 5.6 34.1267 5.6 32.1213V29.7649Z"
											fill="#007A64" />
									</svg>
								</div>
							</div>
							<div class="progress rounded-0" style="height: 4px">
								<div class="
                      progress-bar
                      rounded-0
                      bg-secondary
                      progress-animated
                    " style="width: 94%; height: 4px" role="progressbar">
									<span class="sr-only">94% Complete</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div class="mr-auto pr-3">
											<h4 class="text-black fs-20 mb-0">
												Customers Percentage
											</h4>
										</div>
										<div class="
                          card-action card-tabs
                          mt-3 mt-sm-0 mt-3
                          mb-sm-0 mb-3
                          mt-sm-0
                        ">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#Daily"
														role="tab">
														Daily
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Monthly" role="tab">
														Monthly
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Daily" role="tabpanel">
												<div class="
                              d-flex
                              flex-wrap
                              align-items-center
                              px-4
                              bg-light
                            ">
													<div class="mr-auto d-flex align-items-center py-3">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-users" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Customers</p>
															<span class="fs-26 text-primary font-w600">562,084</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/1.png" alt="" /></li>
														<li><img src="images/users/2.png" alt="" /></li>
														<li><img src="images/users/3.png" alt="" /></li>
														<li><img src="images/users/4.png" alt="" /></li>
														<li><img src="images/users/5.png" alt="" /></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C" />
																</svg>
																64%
															</span>
															<span>New Customers</span>
														</div>
														<div class="d-flex mb-4 align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84" />
																</svg>
																73%
															</span>
															<span>Charges Pending</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232" />
																</svg>
																48%
															</span>
															<span>Charged</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Weekly" role="tabpanel">
												<div class="
                              d-flex
                              flex-wrap
                              align-items-center
                              px-4
                              bg-light
                            ">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-users" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Customers</p>
															<span class="fs-26 text-primary font-w600">786,360</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt="" /></li>
														<li><img src="images/users/4.png" alt="" /></li>
														<li><img src="images/users/1.png" alt="" /></li>
														<li><img src="images/users/4.png" alt="" /></li>
														<li><img src="images/users/3.png" alt="" /></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar2"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C" />
																</svg>
																40%
															</span>
															<span>New Customers</span>
														</div>
														<div class="d-flex mb-4 align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84" />
																</svg>
																81%
															</span>
															<span>Charges Pending</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232" />
																</svg>
																50%
															</span>
															<span>Charged</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Monthly" role="tabpanel">
												<div class="
                              d-flex
                              flex-wrap
                              align-items-center
                              px-4
                              bg-light
                            ">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-users" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Customers</p>
															<span class="fs-26 text-primary font-w600">356,730</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt="" /></li>
														<li><img src="images/users/4.png" alt="" /></li>
														<li><img src="images/users/1.png" alt="" /></li>
														<li><img src="images/users/4.png" alt="" /></li>
														<li><img src="images/users/3.png" alt="" /></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar3"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C" />
																</svg>
																90%
															</span>
															<span>New Customers</span>
														</div>
														<div class="d-flex mb-4 align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84" />
																</svg>
																75%
															</span>
															<span>Charges Pending</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="
                                    mr-auto
                                    pr-3
                                    font-w500
                                    fs-30
                                    text-black
                                  ">
																<svg class="mr-3" width="8" height="30"
																	viewBox="0 0 8 30" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232" />
																</svg>
																30%
															</span>
															<span>Charged</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-6 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex mb-3">
											<h3 class="fs-20 text-black mb-0">Customers Overview</h3>
											<div class="dropdown ml-auto">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z"
															stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
														<path
															d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z"
															stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
														<path
															d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z"
															stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item text-black" href="javascript:;">Info</a>
													<a class="dropdown-item text-black" href="javascript:;">Details</a>
												</div>
											</div>
										</div>
										<div class="d-flex">
											<div class="d-flex mr-auto align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#BDA25C" />
												</svg>
												<div class="ml-2">
													<p class="mb-1">New</p>
													<span class="text-black font-w500">451</span>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#209F84" />
												</svg>
												<div class="ml-2">
													<p class="mb-1">Charges Pending</p>
													<span class="text-black font-w500">623</span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="chartTimeline"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Visitors</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z"
														stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z"
														stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z"
														stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round" />
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<ul class="users-sm mb-3">
											<li><img src="images/users/6.png" alt="" /></li>
											<li><img src="images/users/7.png" alt="" /></li>
											<li><img src="images/users/8.png" alt="" /></li>
											<li><img src="images/users/9.png" alt="" /></li>
											<li><img src="images/users/10.png" alt="" /></li>
										</ul>
										<div class="d-flex align-items-center">
											<svg class="mr-3" width="30" height="19" viewBox="0 0 30 19" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd"
													d="M28.8124 0.990788C29.6459 1.71558 29.734 2.97884 29.0092 3.81236L20.2578 13.8765C18.859 15.4851 16.4444 15.7141 14.7681 14.397L10.6176 11.1359L3.37074 17.9564C2.56639 18.7134 1.30064 18.6751 0.543606 17.8707C-0.213427 17.0664 -0.175071 15.8006 0.629276 15.0436L7.8761 8.22306C9.317 6.86692 11.5329 6.76809 13.0888 7.99059L17.2394 11.2517L25.9908 1.18764C26.7156 0.354128 27.9788 0.265993 28.8124 0.990788Z"
													fill="#007A64" />
											</svg>
											<div>
												<p class="fs-12 mb-0">Customers</p>
												<span class="fs-22 text-black font-w600">765 Person</span>
											</div>
										</div>
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
@endsection			