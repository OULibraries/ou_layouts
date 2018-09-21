<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 <div id="fullpage">
  <div class="container-fluid section" id="section0">

	  <div class="row content-border with-margin-five">
		<div class="col-md-1 col-sm-1 col-xs-12">
			<?php print $content['top1']; ?>
		</div>
		
		<div class="col-md-11 col-sm-11 col-xs-12">
			<?php print $content['top2']; ?>
		</div>
	  </div>
  </div>

   <div class="section" id="section1">
<!--     <div class="fp-bg"></div>-->
     <div class="full-width-renegades">
       <div class="row content-border text-block"
         <div class="col-lg-12 col-md-12 ">
           <?php print $content['item1']; ?>
         </div>
       </div>
      </div>
<!--  </div>-->


  <div class="container-fluid section" id="section2">
      <div class="row content-border with-margin-five">
          <div class="col-md-1 col-sm-1 col-xs-12">
            <?php print $content['item2']; ?>
          </div>

          <div class="col-md-11 col-sm-11 col-xs-12">
            <?php print $content['item3']; ?>
          </div>
      </div>
  </div>


  <div class="container-fluid section" id="section3">
    <div class="row content-border with-margin-five">
      <div class="col-md-1 col-sm-1 col-xs-12">
        <?php print $content['item4']; ?>
      </div>

      <div class="col-md-11 col-sm-11 col-xs-12">
        <?php print $content['item5']; ?>
      </div>
    </div>
  </div>


  <div class="container-fluid section" id="section4">
    <div class="row content-border with-margin-five">
      <div class="col-md-1 col-sm-1 col-xs-12">
        <?php print $content['item6']; ?>
      </div>

      <div class="col-md-11 col-sm-11 col-xs-12">
        <?php print $content['item7']; ?>
      </div>
    </div>
  </div>


   <div class="footer img-center section fp-auto-height" id="section5">
     <div class="container-fluid">
       <div class="row" style="padding-top: 20px;">
         <div class="col-md-3 col-sm-4 col-xs-12" style="padding-bottom: 30px;">
           <img src="/sites/all/themes/oulib_renegades/img/footerlogo.png" alt="footerLogo" style="float: left; padding-right: 1em;"/>
           <a href="http://libraries.ou.edu" target="_blank">University
             Libraries</a><br/>
           401 W. Brooks St<br/>
           Norman, OK 73019<br/>
           (405) 325-4142
         </div>
         <div class="col-md-4 col-sm-8 col-xs-12">
                    <span style="width: 50%; float: left;">
                        <ul>
                            <li><a href="about.html"" alt="About link">About This Site</a></li>
                            <li><a href="http://www.ou.edu/publicaffairs/WebPolicies/accessstatement.html"
                                   alt="Accessibility link" target="_blank">Accessibility</a></li>
							<li><a href="https://libraries.ou.edu/jobs"
                     alt="Jobs link" target="_blank">Job Opportunities</a></li>
                        </ul>
                    </span>

           <div style="width: 50%; float: right;">
             <ul>
               <li>
                 <a href="http://www.ou.edu/content/publicaffairs/WebPolicies/copyright.html"
                    alt="Copyright link"
                    target="_blank">Copyright</a></li>
               <li>
                 <a href="http://www.ou.edu/content/web/landing/policy.html"
                    alt="Policies link" target="_blank">Policies</a>
               </li>
               <li>
                 <a href="http://www.ou.edu/content/web/landing/legalnotices.html"
                    alt="Legal Notice link" target="_blank">Legal
                   Notice</a></li>
             </ul>
           </div>
           <div style="clear: both; padding-bottom: 30px;"></div>
         </div>

         <div class="col-md-3 col-sm-12 col-xs-12">
           <div class="social">
             <ul>
               <!--                        <li><a href="https://www.facebook.com/oulibraries"-->
               <!--                               class="facebook" title="facebook"-->
               <!--                               target="_blank"><img src="/sites/all/themes/oulib_renegades/img/facebook.png"-->
               <!--                                                    alt="Facebook Icon"></a></li>-->
               <li><a href="https://twitter.com/OU_Libraries"
                      class="twitter" title="twitter"
                      target="_blank"><img src="/sites/all/themes/oulib_renegades/img/twitter.png"
                                           alt="Twitter Icon"></a></li>
               <li>
                 <a href="https://www.youtube.com/channel/UCvRR9Wy7ECUS0DQbOp2dnbg"
                    class="youtube" title="youtube"
                    target="_blank"><img src="/sites/all/themes/oulib_renegades/img/youtube.png"
                                         alt="YouTube Icon"></a></li>
               <li><a href="https://www.instagram.com/oulibraries/"
                      class="instagram" title="instagram"
                      target="_blank"><img src="/sites/all/themes/oulib_renegades/img/instagram.png"
                                           alt="Instagram Icon"></a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>

     <!-- footer -->


   </div>



</div>
	</div>





<script type="text/javascript">
  var myFullpage = new fullpage('#fullpage', {
    // sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
    // autoScrolling: true,
    fitToSection: true,
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    // parallax: true,
    // navigation: true,
    paddingTop: '35px',
    // fixedElements: '.footer',
  });
</script>
