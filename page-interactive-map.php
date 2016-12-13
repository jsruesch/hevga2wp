<?php
/*
 Template Name: Interactive Map
*/
?>


<?php get_header(); ?>



	<center><img src="<?php bloginfo('template_directory'); ?>/images/EsaInfographic.png"  />
	<img src="<?php bloginfo('template_directory'); ?>/images/ESA-infographic2.png" /></center>

</div>

<!-- Page Wrap -->

<!-- <div class="page_wrap">

    <div class="main_content">

<? include(dirname(__FILE__)."/map_includes/shell_all.php"); ?>
<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js?ver=4.2.2"></script>
	<script type="text/javascript" src="/wp-content/themes/hevga_theme/map_includes/scripts/jquery.browser.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.1/TweenMax.min.js"></script>
	<script type="text/javascript" language="JavaScript" src="/wp-content/themes/hevga_theme/map_includes/scripts/alasql.min.js"></script>
	<script type="text/javascript" src="//use.typekit.net/lyl4qho.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/hevga_theme/map_includes/scripts/site_css.php"/>

	<style>

		::-webkit-scrollbar {
			-webkit-appearance: none;
			width: 7px;
		}
		::-webkit-scrollbar-thumb {
			border-radius: 4px;
			background-color: rgba(0,0,0,.5);
			-webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
		}

		#the_detail_container{
			position: absolute;
			display: none;
			top: 0px;
			left: 0px;
			width: 215px;
			height: 215px;
			//border: 1px solid blue;
		}

		#the_detail_sub_container{
			position: absolute;
			top: 49px;
			left: 49px;
			width: 120px;
			height: 150px;
			//border: 1px solid green;
		}

		.the_detail_container_schools { background-image: url("/wp-content/themes/hevga_theme/map_includes/images/popup_yellow_v1.png"); }
		.the_detail_container_studios { background-image: url("/wp-content/themes/hevga_theme/map_includes/images/popup_blue_v1.png"); }

		#the_detail_title{
			position: absolute;
			width: 100%;
			height: 10px;
			top: 0px;
			left: 0px;
			font-size: 9px;
			line-height: 105%;
		}

		#the_detail{
			position: absolute;
			width: 120px;
			height: 90px;
			top: 12px;
			left: 0px;
			font-size: 9px;
			line-height: 105%;
			overflow-y: scroll;
			overflow: -moz-scrollbars-vertical;
			padding: 0px 5px 5px 0px;
			//border: 1px solid purple;
		}

		#the_detail_close{
			position: absolute;
			width: 100%;
			height: 10px;
			top: 117px;
			left: 0px;
			font-size: 9px;
			text-align: center;
		}
	</style>

	<script>
		var $mouseX = 0, $mouseY = 0;
		var $xp = 0, $yp =0;

		$(document).mousemove(function(e){
			$mouseX = e.pageX;
			$mouseY = e.pageY;
		});

		var sc;
		$(document).ready(function(){
			//constantly update the scroll position:
			sc=setInterval(scrollDown,200);

			//optional:stop the updating if it gets a click
			$('#the_detail').mousedown(function(e){
				clearInterval(sc);
			});
		});

		function scrollDown(){
			for(i=0;i<=$('#the_detail').length;i++){
				try{
				var g=$('#the_detail')[i];
				g.scrollTop+=1;
				g.scrollTop-=1;
				} catch(e){
				//eliminates errors when no scroll is needed
				}
			}
		}

	</script>
</head>

<body style='padding: 0px; margin: 0px;'>

	<div id='map_div_container'>
		<div id='loading_div' style='text-align: center; font-family: helvetica; font-size: 20px;'>
			<br/><br/><br/><br/><br/>LOADING . . .
		</div>
		<div id='map_div' style='width: 100%; height: 688px; display: none;'><? include(dirname(__FILE__)."/map_includes/usa_map_svg.php"); ?></div>
		<?/* remember that Michigan color ID has to be manually changed upon svg re-import */?>
	</div>
	<div id='the_detail_container'>
		<div id='the_detail_sub_container'>
			<div id='the_detail_title' style='font-size: 10px; font-weight: bold;'></div>
			<div id='the_detail'></div>
			<div id='the_detail_close'>[ <a href='javascript:r2($("#UT"),0,"off");' style='color:black; text-decoration: none;'>close</a> ]</div>
		</div>
	</div>

	<script>

		// GET STATE DATA
			var db = new alasql.Database();
			db.exec('CREATE TABLE usamap (usamap_state_code STRING, usamap_institution_code INT, usamap_institution_name STRING, usamap_institution_link_prefix STRING, usamap_institution_link STRING)');

		<?
			$sql_array = array(); //print_r($sql_array); die();
			$sql = "SELECT *
					FROM usamap
					ORDER BY usamap_state_code, usamap_institution_name"; //print($sql); die();
			$statement = $o_db->doSQL($o_db->database_core, $sql, $sql_array);
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
		?>
				db.exec('INSERT INTO usamap (usamap_state_code,usamap_institution_code,usamap_institution_name,usamap_institution_link_prefix,usamap_institution_link) VALUES ("<?= $row["usamap_state_code"] ?>","<?= $row["usamap_institution_code"] ?>","<?= htmlentities($row["usamap_institution_name"], ENT_QUOTES, "UTF-8") ?>","<?= $row["usamap_institution_link_prefix"] ?>","<?= $row["usamap_institution_link"] ?>")');
		<?	} ?>

		var stateCodes=["AK","AL","AR","AZ","CA","CO","CT","DE","FL","GA",
						"HI","IA","ID","IL","IN","KS","KY","LA","MA","MD",
						"ME","MI","MN","MO","MS","MT","NC","ND","NE","NH",
						"NJ","NM","NV","NY","OH","OK","OR","PA","RI","SC",
						"SD","TN","TX","UT","VA","VT","WA","WI","WV","WY","DC"];

		$( document ).ready(function() {

			$.each(stateCodes, function(index,value) {

				// populate data
				schoolVal=getStateCountInfo(value,1); if(schoolVal>0){ $("#"+value+"v1").html(schoolVal); } else { $("#"+value+"i1").detach(); }
				studioVal=getStateCountInfo(value,2); if(studioVal>0){ $("#"+value+"v2").html(studioVal); } else { $("#"+value+"i2").detach(); }

				// apply fill color
				studioValPercent=(studioVal*100/300)/100; // actual heat map range
				studioValPercent=(studioVal*100/50)/100; // altered heat map range
				if(studioValPercent>1){ studioValPercent=1; }

				$("#"+value+"c").attr("fill",getFillColor("#99d0ce","#588383",studioValPercent));
				if(studioValPercent<.70){
					$("#"+value+"v1").attr("fill","#000000"); $("#"+value+"v2").attr("fill","#000000");
				} else {
					$("#"+value+"v1").attr("fill","#FFFFFF"); $("#"+value+"v2").attr("fill","#FFFFFF");
				}

				// bind mouse events
				$("#"+value).bind("mouseover", function(){ r($("#"+value),1); } ); $("#"+value).bind("mouseleave", function(){ r($("#"+value),0); } );
				$("#"+value+"i1").bind("mouseenter", function(){ r2($("#"+value),1,"on"); } );
				$("#"+value+"i2").bind("mouseenter", function(){ r2($("#"+value),2,"on"); } );
			});

			$("#VTt").bind("mouseover", function(){ r($("#VT"),1); } ); $("#VTt").bind("mouseleave", function(){ r($("#VT"),0); } );
			$("#NHt").bind("mouseover", function(){ r($("#NH"),1); } ); $("#NHt").bind("mouseleave", function(){ r($("#NH"),0); } );
			$("#MAt").bind("mouseover", function(){ r($("#MA"),1); } ); $("#MAt").bind("mouseleave", function(){ r($("#MA"),0); } );
			$("#RIt").bind("mouseover", function(){ r($("#RI"),1); } ); $("#RIt").bind("mouseleave", function(){ r($("#RI"),0); } );
			$("#CTt").bind("mouseover", function(){ r($("#CT"),1); } ); $("#CTt").bind("mouseleave", function(){ r($("#CT"),0); } );
			$("#NJt").bind("mouseover", function(){ r($("#NJ"),1); } ); $("#VTt").bind("mouseleave", function(){ r($("#NJ"),0); } );
			$("#DEt").bind("mouseover", function(){ r($("#DE"),1); } ); $("#DEt").bind("mouseleave", function(){ r($("#DE"),0); } );
			$("#MDt").bind("mouseover", function(){ r($("#MD"),1); } ); $("#MDt").bind("mouseleave", function(){ r($("#MD"),0); } );
			$("#DCt").bind("mouseover", function(){ r($("#DC"),1); } ); $("#DCt").bind("mouseleave", function(){ r($("#DC"),0); } );
			console.log("ASDASDASDASDASDASDASDASD");
			$("#loading_div").detach();
			$("#map_div").show();
		});

		function getStateCountInfo(theState,theInstitutionCode){
			var theR=0;

			var sql = "SELECT COUNT(usamap_state_code) as the_count FROM usamap WHERE usamap_state_code='"+theState+"' AND usamap_institution_code='"+theInstitutionCode+"'";
			var res = db.exec(sql);

			if (res[0] !== undefined){ theR=res[0].the_count; }

			return theR;
		}

		function getStateDetailInfo(theState,theInstitutionCode){
			var theR="";

			var sql = "SELECT usamap_institution_name, usamap_institution_link_prefix, usamap_institution_link FROM usamap WHERE usamap_state_code='"+theState+"' AND usamap_institution_code='"+theInstitutionCode+"' ORDER BY usamap_institution_name";
			var res = db.exec(sql);

			if (res[0] !== undefined){
				for (i = 0; i < res.length; i++) {
					theR=theR+"<div style='margin-bottom: 1px; font-size: 9px;'><a href='"+res[i].usamap_institution_link_prefix+"://"+res[i].usamap_institution_link+"' target='_new'>"+res[i].usamap_institution_name+"</a></div>";
				}
			}
			return theR;
		}

		function getFillColor(c0,c1,p) {
			var f=parseInt(c0.slice(1),16),t=parseInt(c1.slice(1),16),R1=f>>16,G1=f>>8&0x00FF,B1=f&0x0000FF,R2=t>>16,G2=t>>8&0x00FF,B2=t&0x0000FF;
			return "#"+(0x1000000+(Math.round((R2-R1)*p)+R1)*0x10000+(Math.round((G2-G1)*p)+G1)*0x100+(Math.round((B2-B1)*p)+B1)).toString(16).slice(1);
		}

		r1_state=0; lastStateCode="";
		function r(theElement,onOrOff){
			$(theElement).detach(); $("#theUSA").append(theElement);

			state_code=theElement.attr("id");
			if(state_code!=lastStateCode){ r2(theElement,0,"off"); lastStateCode=state_code; }

			if($.browser.msie){ collapseAllStates(); r1_state=0; }

			if(onOrOff){
				r1_state=0;
				the_scale=1.25;

				if(state_code=="VT"){ the_scale=1.75; }
				if(state_code=="NH"){ the_scale=1.75; }
				if(state_code=="MA"){ the_scale=2; }
				if(state_code=="RI"){ the_scale=4; }
				if(state_code=="CT"){ the_scale=2; }
				if(state_code=="NJ"){ the_scale=1.75; }
				if(state_code=="DE"){ the_scale=3; }
				if(state_code=="MD"){ the_scale=2.25; }
				if(state_code=="DC"){ the_scale=20; }
				if(state_code=="HI"){ the_scale=1.70; }

				TweenMax.to(theElement, .25, { scale:the_scale, transformOrigin:"center center" });
				setTimeout(function() { r1_state=1; }, 200);
			} else {
				collapseAllStates();
				r1_state=0;
			}
		}

		function r2(theEelement,institutionCode,onOrOff){
			the_state_code=theEelement.attr("id");

			if(onOrOff=="on"){
				r_html=getStateDetailInfo(the_state_code,institutionCode);

				if(institutionCode==1){ the_detail_title=getFullStateName(the_state_code)+" - Schools"; }
				if(institutionCode==2){ the_detail_title=getFullStateName(the_state_code)+" - Studios"; }

				$("#the_detail_title").html(the_detail_title);

				$("#the_detail").html(r_html);

				if(institutionCode==1){
					$("#the_detail_container").removeClass("the_detail_container_studios");
					$("#the_detail_container").addClass("the_detail_container_schools");
				} else {
					$("#the_detail_container").removeClass("the_detail_container_schools");
					$("#the_detail_container").addClass("the_detail_container_studios");
				}

				$mouseX=$mouseX-120;
				if(	the_state_code=="WA" ||
					the_state_code=="MT" ||
					the_state_code=="ND" ||
					the_state_code=="MN" ||
					the_state_code=="NY" ||
					the_state_code=="VT" ||
					the_state_code=="NH" ||
					the_state_code=="ME" ) {

					$mouseY=$mouseY+15;
				}else {
					$mouseY=$mouseY-225;
				}

				$("#the_detail_container").css({left:$mouseX +'px', top:$mouseY +'px'});
				$("#the_detail_container").show(200);
			} else {
				$("#the_detail_container").hide(1000);
			}
		}

		function collapseAllStates(){
			$.each(stateCodes, function( index,value ) {
				TweenMax.to("#"+value, 1.5, { scale:1, transformOrigin:"center center" });
			});
		}

		function getFullStateName(theStateCode){
			theR="";

			if(theStateCode=="AL"){ theR="Alabama"; }
			if(theStateCode=="AK"){ theR="Alaska"; }
			if(theStateCode=="AZ"){ theR="Arizona"; }
			if(theStateCode=="AR"){ theR="Arkansas"; }
			if(theStateCode=="CA"){ theR="California"; }
			if(theStateCode=="CO"){ theR="Colorado"; }
			if(theStateCode=="CT"){ theR="Connecticut"; }
			if(theStateCode=="DE"){ theR="Delaware"; }
			if(theStateCode=="FL"){ theR="Florida"; }
			if(theStateCode=="GA"){ theR="Georgia"; }
			if(theStateCode=="HI"){ theR="Hawaii"; }
			if(theStateCode=="ID"){ theR="Idaho"; }
			if(theStateCode=="IL"){ theR="Illinois"; }
			if(theStateCode=="IN"){ theR="Indiana"; }
			if(theStateCode=="IA"){ theR="Iowa"; }
			if(theStateCode=="KS"){ theR="Kansas"; }
			if(theStateCode=="KY"){ theR="Kentucky"; }
			if(theStateCode=="LA"){ theR="Louisiana"; }
			if(theStateCode=="ME"){ theR="Maine"; }
			if(theStateCode=="MD"){ theR="Maryland"; }
			if(theStateCode=="MA"){ theR="Massachusetts"; }
			if(theStateCode=="MI"){ theR="Michigan"; }
			if(theStateCode=="MN"){ theR="Minnesota"; }
			if(theStateCode=="MS"){ theR="Mississippi"; }
			if(theStateCode=="MO"){ theR="Missouri"; }
			if(theStateCode=="MT"){ theR="Montana"; }
			if(theStateCode=="NE"){ theR="Nebraska"; }
			if(theStateCode=="NV"){ theR="Nevada"; }
			if(theStateCode=="NH"){ theR="N. Hampshire"; }
			if(theStateCode=="NJ"){ theR="New Jersey"; }
			if(theStateCode=="NM"){ theR="New Mexico"; }
			if(theStateCode=="NY"){ theR="New York"; }
			if(theStateCode=="NC"){ theR="North Carolina"; }
			if(theStateCode=="ND"){ theR="North Dakota"; }
			if(theStateCode=="OH"){ theR="Ohio"; }
			if(theStateCode=="OK"){ theR="Oklahoma"; }
			if(theStateCode=="OR"){ theR="Oregon"; }
			if(theStateCode=="PA"){ theR="Pennsylvania"; }
			if(theStateCode=="RI"){ theR="Rhode Island"; }
			if(theStateCode=="SC"){ theR="South Carolina"; }
			if(theStateCode=="SD"){ theR="South Dakota"; }
			if(theStateCode=="TN"){ theR="Tennessee"; }
			if(theStateCode=="TX"){ theR="Texas"; }
			if(theStateCode=="UT"){ theR="Utah"; }
			if(theStateCode=="VT"){ theR="Vermont"; }
			if(theStateCode=="VA"){ theR="Virginia"; }
			if(theStateCode=="WA"){ theR="Washington"; }
			if(theStateCode=="WV"){ theR="West Virginia"; }
			if(theStateCode=="WI"){ theR="Wisconsin"; }
			if(theStateCode=="WY"){ theR="Wyoming"; }
			if(theStateCode=="DC"){ theR="Wash. D.C."; }

			return theR;
		}

	</script>

    </div>--!><!-- End Main Content -->

</div><!-- End Page Wrap -->

<?php get_footer(); ?>
