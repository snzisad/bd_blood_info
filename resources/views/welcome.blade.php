@extends('layout/general')

@section('title',"The largest Online Blood directory in Bangladesh")

@section('content')

  @if ($errors->any())
    <div class="text-white bg-danger" style="text-align: center;padding: 5; font-size: 20;">
      @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    </div>
  @endif

  @if (session('message'))
    <p class="text-white bg-success" style="text-align: center;padding: 10; font-size: 20;">{{session('message')}}</p>
  @endif

    <!-- Start 1st Slide Show -->
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">BD BLOOD INFO</span>
                        <h1 class="mb-4">Largest Online Blood Bank</h1>
                        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Donor List</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_2.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">Largest Online Blood Bank</span>
                        <h1 class="mb-4">We Help to Save Your Life</h1>
                        <p><a href="/#donor_registration" class="btn btn-primary px-4 py-3 mt-3">Join With Us</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_3.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">BD BLOOD INFO</span>
                        <h1 class="mb-4">Largest Online Blood Bank</h1>
                        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Donor List</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_4.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">Largest Online Blood Bank</span>
                        <h1 class="mb-4">We Help to Save Your Life</h1>
                        <p><a href="/#donor_registration" class="btn btn-primary px-4 py-3 mt-3">Join With Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult" id="donor_registration">
        <div class="container">
            <div class="row d-flex no-gutters align-items-stretch	consult-wrap">
                <div class="col-md-5 wrap-about align-items-stretch d-flex">
                    <div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
                        <h2 class="heading-white mb-4">Donor Registration</h2>
                        <form action={{route('add_donor')}} class="appointment-form ftco-animate" method="POST">
                          @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Donor Name" required>
                        </div>
                        <div class="form-group">
                          <input type="phone" name="phone" class="form-control" placeholder="Mobile Number" required>
                      </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required>
                        </div>
                        <div class="form-group" required>
                          <select name="blood_group" id="blood_group" class="form-control" required>
                            <option value="" selected disabled>Blood Group</option>
                            @foreach ($blood_groups as $group)  
                              <option value={{$group}}>{{$group}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group" required>
                          <select name="district" id="district" class="form-control" required>
                            <option value="" selected disabled>District</option>
                            @foreach ($districts as $district)  
                              <option value={{$district}}>{{$district}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                        </div>
                    
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-secondary py-3 px-4">
                        </div>
                      </form>
                    </div>
                </div>
                <div class="col-md-7 wrap-about ftco-animate align-items-stretch d-flex">
                    <div class="bg-white p-5">
                        <h2 class="mb-4">Donor List <br>Give blood save life</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="services">
                                    <div class="icon mt-2 d-flex align-items-center"><span class="flaticon-collaboration"></span></div>
                                    <div class="text media-body">
                                        <h3>A+( Positive )</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-analysis"></span></div>
                                    <div class="text media-body">
                                        <h3>B+( Positive )</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-analysis"></span></div>
                                    <div class="text media-body">
                                        <h3>O+( Positive )</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-search-engine"></span></div>
                                    <div class="text media-body">
                                        <h3>A-( Negative )</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-handshake"></span></div>
                                    <div class="text media-body">
                                        <h3>B-( Negative ) </h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-handshake"></span></div>
                                    <div class="text media-body">
                                        <h3>O-( Negative ) </h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		
    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.png);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">About bd blood info  </h2>
          </div>
        </div>	
    	</div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
			<div class="container consult-wrap">
				<div class="row d-flex align-items-stretch">
					<div class="col-md-6 wrap-about align-items-stretch d-flex">
						<div class="img" style="background-image: url(images/bg_1.jpg);"></div>
					</div>
					<div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<span class="subheading">Welcome to bd blood info</span>
							<h2>The Smartest Thing To Do With Your Consulting Blood donation</h2>
						</div>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="tabulation-2 mt-4">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
							  </li>
							</ul>
							<div class="tab-content bg-light rounded mt-2">
							  <div class="tab-pane container p-0 active" id="home1">
							  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home3">
							  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							  </div>
							</div>
						</div>
    				<div class="row mt-5">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="1387">0</strong>
		                <span>Total Donors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="310">0</strong>
		                <span>Visitors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Request for blood</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters justify-content-center mb-5">
                    <div class="col-md-6 text-center heading-section ftco-animate">
                        <span class="subheading">Projects Done</span>
                        <h2 class="mb-4">About blood </h2>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        <p></p>
                    </div>
                </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/project-1.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Consulting</span>
        				<h3><a href="#">Consultacy Solutions</a></h3>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/project-2.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Marketing</span>
        				<h3><a href="#">Consultacy Solutions</a></h3>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/project-3.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Financing</span>
        				<h3><a href="#">Consultacy Solutions</a></h3>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/project-4.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Audit &amp; Taxes</span>
        				<h3><a href="#">Consultacy Solutions</a></h3>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/project-5.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Financing</span>
        				<h3><a href="#">Consultacy Solutions</a></h3>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="project">
        			<div class="img rounded mb-4" style="background-image: url(images/project-6.jpg);"></div>
        			<div class="text w-100 text-center">
        				<span class="cat">Real Estate</span>
        				<h3><a href="#">Consultacy Solutions</a></h3>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        			</div>
        		</div>
        	</div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Why With Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span> Blood Analysis</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>  Donor benifit</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> Give New life</a>
						  </li>
						
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(images/project-2.jpg);"></div>
						  	<h3><a href="#">Blood Analysis</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/project-3.jpg);"></div>
						  	<h3><a href="#">Donor benifit</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/project-4.jpg);"></div>
						  	<h3><a href="#">Give New lif</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(images/project-5.jpg);"></div>
						  	<h3><a href="#">Global Investigation</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(images/project-6.jpg);"></div>
						  	<h3><a href="#">Audit &amp; Evaluation</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/project-1.jpg);"></div>
						  	<h3><a href="#">Marketing Strategy</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">ad</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-4">ad</a></p>
          </div>
        </div>	
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Review</span>
            <h2 class="mb-4">Our Guest Says</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Blog Posts</span>
            <h2 class="mb-4">Bd blood info Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">15</span>
                  <span class="mos">Oct.</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">15</span>
                  <span class="mos">Oct.</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">15</span>
                  <span class="mos">Oct.</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text p-4">
                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

@endsection