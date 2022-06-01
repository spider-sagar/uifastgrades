<?php include('header.php'); ?>
    <!-- Inner Banner -->
    <section class="inner-banner abt-ib">
    	<img class="w-100" src="images/inner-banner.jpg" alt="">  
    	<div class="brd-crm">
    		<a href="#">FAQ</a>
    	</div>      	
    </section> 
    <!-- Breadcrum -->
             
	<!-- Contact-Content -->
<section class="about inner-faq py-5">
   <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="abt-head text-center"> 
          </div>
        </div> 
      </div>
      <div class="row"> 
        <div class="col-md-6">
          <div class="abt-img">
             <img class="w-100" src="https://images.pexels.com/photos/5428836/pexels-photo-5428836.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
          </div>
        </div>
        <div class="col-md-6">
          <div class="abt-para">
            <div class="accordion" id="faqExample">
              
                    <div class="card">
                    <div class="card-header p-2" id="heading1">
                        <h5 class="mb-0">
                            <button type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                              Q: How does this work?</button>
                          </h5>
                    </div>

                    <div id="collapse1" class="collapse  show " aria-labelledby="heading1" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> <p>It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.</p>
                        </div>
                    </div>
                </div>
                
                                    <div class="card">
                    <div class="card-header p-2" id="heading2">
                        <h5 class="mb-0">
                            <button class="" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                              Q: What is the question?</button>
                          </h5>
                    </div>

                    <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> <p>Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.</p>
                        </div>
                    </div>
                </div>
                
                                    <div class="card">
                    <div class="card-header p-2" id="heading3">
                        <h5 class="mb-0">
                            <button class="" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                              Q: What is another question?</button>
                          </h5>
                    </div>

                    <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> <p>The answer to the question can go here.</p>
                        </div>
                    </div>
                </div>
                
                                    <div class="card">
                    <div class="card-header p-2" id="heading4">
                        <h5 class="mb-0">
                            <button class="" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                              Q: What is the next question?</button>
                          </h5>
                    </div>

                    <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> <p>The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.</p>
                        </div>
                    </div>
                </div>
                
                    
                    
            </div>
          </div>
        </div>
        
      </div>
   </div>
</section>
<?php include('footer.php'); ?>