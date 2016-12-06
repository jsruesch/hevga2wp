<?php
/*
 Template Name: Membership
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">
      <!-- Membership Info -->
      <div class="row pad15 bg-red">
        <h2 class="text-white">HEVGA Membership</h2>
      </div>
      <div class="row bg-lgrey pad15 mar20-bot">
        <h3 class="text-center mar30-bot mar15-top">Membership dues are temporarily waived.<br /> Join us now! Benefits include:</h3>
        <p>
          <strong>Events</strong> - Participate in annual meetings and other Alliance events<br />
          <strong>Networking</strong> - Network with other professionals through Alliance events, meetings, discussion boards, and more<br />
          <strong>Thought Leadership</strong> - Participate in dialogue on focus areas such as tenure and promotion, diversity, standards/vetting and more<br />
          <strong>Early Access to Internal Reports</strong> - Be the first to receive information on industry trends, federal and foundation funding opportunities<br />
          <strong>Inclusion in Issue Education</strong> - Connect with key contacts in the federal Legislative and Executive branches on Alliance outreach interests, Capitol Hill days, Congressional Caucus briefings, and exhibition fairs<br />
          <strong>Internship Information</strong> - Access information about industry internship opportunities<br />
          <strong>Participation in Awards Program</strong> - Get involved in or nominate candidates for Alliance awards<br />
          <strong>Represent</strong> - Represent the Alliance at conferences, conventions, and other events
        </p>
      </div><!-- /Membership Info -->


      <!-- Categories of Membership -->
      <div class="row pad15 bg-black">
        <h2 class="text-white">Categories of Membership</h2>
      </div>
      <div class="row bg-lgrey pad15 mar20-bot">
        <!-- Voting Members -->
        <div class="row pad15 bg-lblue">
          <h3 class="text-white">Voting Members</h3>
        </div>
        <div class="row bg-white pad15 mar20-bot">
          <p>
            Voting membership is available to individuals holding faculty or administration positions at higher education institutions. Voting members are eligible to hold office and serve on and lead committees, and are entitled to cast one (1) vote on all matters that require action or approval by the members.
          </p>
        </div><!-- /Voting Members -->
        <!-- Student Members -->
        <div class="row pad15 bg-green">
          <h3 class="text-white">Student Members</h3>
        </div>
        <div class="row bg-white pad15 mar20-bot">
          <p>
            Student membership is available to any individual enrolled as an undergraduate or graduate student at an accredited higher education institution. Student members are entitled to specific services as designated by the Board of Directors and may be eligible to serve as an advisor on committees or appointed groups, but cannot vote or hold elected office.
          </p>
        </div><!-- /Student Members -->
        <!-- Affiliates -->
        <div class="row pad15 bg-yellow">
          <h3 class="text-white">Affiliates</h3>
        </div>
        <div class="row bg-white pad15">
          <p>
            Affiliate status is available to individuals who are not currently enrolled or employed by an institution of higher education but were formerly enrolled or employed at such an institution or are currently affiliated with a trust, estate, partnership, association, company, or corporation associated with video game programs in higher education and approved by a majority of Directors then in office. Affiliates are entitled to specific services as designated by the Board of Directors and may be eligible to serve as advisors on committees or appointed groups, but cannot vote or hold elected office.
          </p>
        </div><!-- /Affiliates -->
      </div><!-- /Categories of Membership -->

      <!-- Categories of Membership -->
      <div class="row pad15 bg-lblue">
        <h2 class="text-white">Apply</h2>
      </div>
      <div class="row bg-lgrey pad15 mar20-bot">
        <div class="col-sm-6 col-sm-offset-3">
          <?php echo do_shortcode("[ultimatemember form_id=21]"); ?>
        </div>
      </div>

    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
