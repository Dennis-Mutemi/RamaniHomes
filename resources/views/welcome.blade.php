
@include('includes/header')

<section class="osahan-slider">
         <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#osahanslider" data-slide-to="0" class="active"></li>
               <li data-target="#osahanslider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active slider-one">
                  <div class="overlay"></div>
               </div>
               <div class="carousel-item slider-two">
                  <div class="overlay"></div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#osahanslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#osahanslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="slider-form">
            <div class="container">
               <h2 class="text-left mb-5">Find Your Dream Home</h2>
               <form>
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">For Sale</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">For Rent</a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row no-gutters">
                           <div class="col-md-4">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                 <input class="form-control" placeholder="Enter Location, Project or Landmark" type="text">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-google-maps"></i></div>
                                 <select class="form-control select2 no-radius">
                                    <option value="">Locations</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                                 <select class="form-control select2 no-radius">
                                    <option value="">Property Type</option>
                                    <option value="">House/Villa</option>
                                    <option value="">Flat</option>
                                    <option value="">Plot/Land</option>
                                    <option value="">Office Space</option>
                                    <option value="">Shop/Showroom</option>
                                    <option value="">Commercial Land</option>
                                    <option value="">Warehouse/ Godown</option>
                                    <option value="">Industrial Building</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">  
                              <button type="submit" class="btn btn-secondary btn-block no-radius font-weight-bold">SEARCH</button>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row no-gutters">
                           <div class="col-md-7">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                                 <input class="form-control" placeholder="Enter Landmark, Location or Society" type="text">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="input-group">
                                 <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                                 <select class="form-control select2 no-radius">
                                    <option value="">Property Type</option>
                                    <option value="">House/Villa</option>
                                    <option value="">Flat</option>
                                    <option value="">Plot/Land</option>
                                    <option value="">Office Space</option>
                                    <option value="">Shop/Showroom</option>
                                    <option value="">Commercial Land</option>
                                    <option value="">Warehouse/ Godown</option>
                                    <option value="">Industrial Building</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">  
                              <button type="submit" class="btn btn-secondary btn-block no-radius font-weight-bold">SEARCH</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
               <div class="top-search">
                  <strong><i class="mdi mdi-keyboard"></i> Top Search</strong>
                  <a href="#">Flat</a>
                  <a href="#">Plot/Land</a>
                  <a href="#">Office Space</a>
                  <a href="#">Shop/Showroom</a>
                  <a href="#">Commercial Land</a>
                  <a href="#">Warehouse/ Godown</a>
                  <a href="#">Industrial Building</a>
               </div>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->
      <section class="section-padding">
         <div class="section-title text-center mb-5">
            <h2>Latest Properties</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 12</div>
                           <span class="badge badge-primary">For Sale</span>
                           <img class="card-img-top" src="assets/img/list/1.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                              $130,000 <small>/Per Month</small>
                           </h2>
                           <h5 class="card-title mb-2">House in Kent Street</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> 127 Kent Sreet, Sydny, NEW 2000</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>3</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>2</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>587 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 60</div>
                           <span class="badge badge-secondary">For Rent</span>
                           <img class="card-img-top" src="assets/img/list/2.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                              $127,000 <small>/month</small>
                           </h2>
                           <h5 class="card-title mb-2">Family House in Hudson</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Hoboken, NJ, USA</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>5</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>3</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>300 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 03</div>
                           <span class="badge badge-success">For Sale</span>
                           <img class="card-img-top" src="assets/img/list/3.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                              $55,000 <small>/month</small>
                           </h2>
                           <h5 class="card-title mb-2">Loft Above The City</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Hope Street (Stop P), London SW11, UK</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>2</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>1</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>100 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 18</div>
                           <span class="badge badge-danger">For Sale</span>
                           <img class="card-img-top" src="assets/img/list/4.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                              $25,000 <small>/month</small>
                           </h2>
                           <h5 class="card-title mb-2">Store Space Greenville</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> 250-260 3rd St, Hoboken, NJ 07030, USA</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>6</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>4</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>987 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 04</div>
                           <span class="badge badge-warning">For Rent</span>
                           <img class="card-img-top" src="assets/img/list/5.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                              $12,000 <small>/month</small>
                           </h2>
                           <h5 class="card-title mb-2">Villa in Melbourne</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> NJ 07305, USA</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>8</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>4</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>120 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="#">
                        <div class="card-img">
                           <div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
                           <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 45</div>
                           <span class="badge badge-info">For Rent</span>
                           <img class="card-img-top" src="assets/img/list/6.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                           <h2 class="text-primary mb-2 mt-0">
                              $356, 000 <small>/month</small>
                           </h2>
                           <h5 class="card-title mb-2">Villa on Hollywood Boulev</h5>
                           <h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> The Village, Jersey City, NJ 07302, USA</h6>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-sofa"></i> Beds : <strong>1</strong></span>
                           <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>3</strong></span>
                           <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>187 sq ft</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-12 text-center">
                  <button class="btn btn-secondary font-weight-bold btn-lg" type="submit">VIEW ALL</button>
               </div>
            </div>
         </div>
      </section>
      <!-- End Properties List -->
      <!-- Properties by City -->
      <section class="section-padding bg-white">
         <div class="section-title text-center mb-5">
            <h2>Property By City</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="assets/img/overlay/1.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">New York</h3>
                           <p class="card-text text-white">16 Properties</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="assets/img/overlay/2.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">Los Angeles</h3>
                           <p class="card-text text-white">265 Properties</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="assets/img/overlay/3.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">Chicago</h3>
                           <p class="card-text text-white">620 Properties</p>
                        </div>
                     </a>
                     .    
                  </div>
               </div>
               <div class="col-lg-8 col-md-8">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="assets/img/overlay/4.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">Philadelphia</h3>
                           <p class="card-text text-white">28 Properties</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Properties by City -->
      <!-- Trusted Agents -->
      <section class="section-padding">
         <div class="section-title text-center mb-5">
            <h2>Trusted Agents</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="assets/img/user/1.jpg" alt="">
                     <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                     <h6 class="mb-0 text-primary">- Stave Martin
                        <span class="star-rating">
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star-half text-warning"></i>
                        </span>
                     </h6>
                     <small>Buying Agent</small>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="assets/img/user/2.jpg" alt="">
                     <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                     <h6 class="mb-0 text-primary">- Mark Smith
                        <span class="star-rating">
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star-half text-warning"></i>
                        </span>
                     </h6>
                     <small>Selling Agent</small>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="agents-card text-center">
                     <img class="img-fluid mb-4" src="assets/img/user/3.jpg" alt="">
                     <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                     <h6 class="mb-0 text-primary">- Ryan Printz 
                        <span class="star-rating">
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star text-warning"></i>
                        <i class="mdi mdi-star-half text-warning"></i>
                        </span>
                     </h6>
                     <small>Real Estate Broker</small>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Trusted Agents -->
      <!-- Blog -->
      <section class="section-padding border-top">
         <div class="section-title text-center mb-5">
            <h2>Blogs We Wrote For You</h2>
            <p>Lorem ipsum dolor sit amet.</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card blog-card">
                     <a href="#">
                        <img class="card-img-top" src="assets/img/blog/1.png" alt="Card image cap">
                        <div class="card-body">
                           <span class="badge badge-success">House/Villa</span>
                           <h6>Possimus aut mollitia eum ipsum</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                        </div>
                        <div class="card-footer">
                           <p class="mb-0"><img class="rounded-circle" src="assets/img/user/3.jpg" alt="Card image cap"> <strong>Rahul Yadav</strong> On October 03, 2018</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card blog-card">
                     <a href="#">
                        <img class="card-img-top" src="assets/img/blog/2.png" alt="Card image cap">
                        <div class="card-body">
                           <span class="badge badge-danger">Shop/Showroom</span>
                           <h6>Consectetur adipisicing elit</h6>
                           <p class="mb-0">Cnsectetur ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                        </div>
                        <div class="card-footer">
                           <p class="mb-0"><img class="rounded-circle" src="assets/img/user/2.jpg" alt="Card image cap"> <strong>Rahul Yadav</strong> On October 05, 2018</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card blog-card">
                     <a href="#">
                        <img class="card-img-top" src="assets/img/blog/3.png" alt="Card image cap">
                        <div class="card-body">
                           <span class="badge badge-info">Industrial Building</span>
                           <h6>Fugiat odio officiis odit</h6>
                           <p class="mb-0">Mollitia ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                        </div>
                        <div class="card-footer">
                           <p class="mb-0"><img class="rounded-circle" src="assets/img/user/1.jpg" alt="Card image cap"> <strong>Rahul Yadav</strong> On October 06, 2018</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Blog -->
      <!-- Join Team -->
      <section class="section-padding bg-white text-center">
         <h2 class="mt-0">Join our professional team & agents<br>to start selling your house</h2>
         <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         <button type="button" class="btn btn-primary">Contact Us</button> <button type="button" class="btn btn-outline-primary">Read More</button>
      </section>
      <!-- End Join Team -->
    @include('includes/footer')