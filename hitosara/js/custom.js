$(document).ready(function() {
	$(window).scroll(function(){
	    fixedheader();
	    scrolltotop();
	});

	$(window).resize(function(){
		
		if( $(".page.home").length ) {
			console.log("Homepage");
			//loadBarCharts();
		} else	{
			return false;
		} 

		if( $(".page.apply.confirm").length ) {
			$("header").addClass("apply");
			$('.canvas').hide(); 
			console.log("apply");
		} else	{
			return false;
		} 

		if( $(".page.apply").length ) {
			$("header").addClass("apply");
			$('.canvas').hide(); 
			console.log("apply");
		} else	{
			return false;
		} 
	});

	window.onbeforeunload = function() {
	    return 'Are you sure you want to leave?';
	};


	(function(){
	  $('#carousel123').carousel({ interval: 3000 });
	  $('#carouselmain').carousel({ interval: 3000 });
	}());

	(function(){
	  $('.carousel-main .item').each(function(){
	    var itemToClone = $(this);

	    for (var i=1;i<1;i++) {
	      itemToClone = itemToClone.next();

	      // wrap around if at end of item collection
	      if (!itemToClone.length) {
	        itemToClone = $(this).siblings(':first');
	      }

	      // grab item, clone, add marker class, add to collection
	      itemToClone.children(':first-child').clone()
	        .addClass("cloneditem-"+(i))
	        .appendTo($(this));
	    }
	  });


	  $('.carousel-staff .item').each(function(){
	    var itemToClone = $(this);

	    for (var i=1;i<3;i++) {
	      itemToClone = itemToClone.next();

	      // wrap around if at end of item collection
	      if (!itemToClone.length) {
	        itemToClone = $(this).siblings(':first');
	      }
	      // grab item, clone, add marker class, add to collection
	      itemToClone.children(':first-child').clone()
	        .addClass("cloneditem-"+(i))
	        .appendTo($(this));
	    }
	  });
	}());


    $('#appcheck').on('change', function(){
    	$('#sbmt-btn"]').attr('disabled','disabled');
        if ($(this).is(':checked')) {
            //チェックが入ったら、送信ボタンを押せる
            $('#sbmt-btn').prop('disabled', false);
        } else {
            //チェックが入っていなかったら、送信ボタンを押せない
            $('#sbmt-btn').prop('disabled', true);
        }
    });


    var check = function () {
     $("#addstorenum").prop("disabled", !$('#applymorestore').prop('checked'));
	};
	check();
	$("#applymorestore").change(check);


	var check2 = function () {
     $("#savorjapanoption").prop("disabled", !$('#savorjapan').prop('checked'));
	};
	check2();
	$("#savorjapan").change(check2);

	var check2 = function () {
     $("#sbmt-btn").prop("disabled", !$('#agreecheck').prop('checked'));
	};
	check2();
	$("#agreecheck").change(check2);



	function fixedheader(){
		var winScroll = $(window).scrollTop();
		
		if(winScroll >= 100){
			$("header").addClass("mobile");
		} else{
			$("header").removeClass("mobile");
		}
    }


    function scrolltotop() {
    	var header = $("header").outerHeight();
		var body = $("body").outerHeight();
		//console.log("header:" + header + ", body:" + body);
		var totalv = body - 650;
		if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 100px
	        $('#return-to-top').fadeIn(200); 
		        if($(this).scrollTop() < totalv) { // If page is scrolled outside the footer
		        	$('#return-to-top').css("bottom","95px"); 
		        }
		        else {
		        	$('#return-to-top').css("bottom","130px"); 
		        }
	    } else {
	        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
	    }
	}


	$('#return-to-top').click(function() { 
	     // When arrow is clicked
	    $('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 1500);
	});


	// ============================
	// 	  SCROLL NAV ON CLICK
	// ----------------------------
	  (function($) {
	  "use strict"; // Start of use strict

	  //Smooth scrolling using jQuery easing
	  $('a.scrollmenu[href*="#"]:not([href="#"])').click(function() {
	  	var header = $( 'header' ).outerHeight();
	  	console.log(header);
	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: (target.offset().top - header )
	        }, 1000, "easeInOutExpo");
	        return false;
	      }
	      if($(window).scrollTop() > target.offset().top){
		    $('html, body').animate( { scrollTop: target.offset().top }, {duration: 400 } );
		  }
	    }
	  });


	  // Closes responsive menu when a scroll trigger link is clicked
	  $('.scrollmenu').click(function() {
	    $('.navbar-collapse').collapse('hide');
	  });

	  // Activate scrollspy to add active class to navbar items on scroll
	  $('body').scrollspy({
	    target: '#mainNav',
	    offset: 54
	  });

	})(jQuery); // End of use strict


	$(".canvas").click(function(){
		var sidenavwidth = $(".sidenav").width();
		console.log(sidenavwidth);
		$(".apply .form-field .gray label:after").css("height", "0");
		$("#mySidenav").css("left", "20%");
		$(".closenav").show();
		//$("header").css("z-index", "0");
		$("html,body").css("overflow", "hidden");
	});

	$(".closenav").click(function(){
		var sidenavwidth = $(".sidenav").width();
		$(".apply .form-field .gray label:after").css("height", "20px");
		
		$("#mySidenav").css("left", '100%');
		$(".closenav").hide();
		$(".apply .form-field .gray label").css("position", "relative");
		$("html,body").css("overflow", "auto");
	});

	if( $(".page.home").length ) {
		console.log("Homepage");
		
	} else	{
		return false;
	} 


	$(function(){
	  $("#bars li .bar").each(function(key, bar){
	    var percentage = $(this).data('percentage');

	    $(this).animate({
	      'height':percentage+'%'
	    }, 1000);
	  })
	})


	// function loadCharts(e) {
	// 	var header = $("header").outerHeight();
	// 	var slider = $(".slider-header").outerHeight();
	// 	var sect1 = $(".sect1").outerHeight();
	// 	var sect2 = $(".sect2").outerHeight();
	// 	var sect3 = $(".sect3").outerHeight();
	// 	var sect4 = $(".sect4").outerHeight();
	// 	var total = header + slider + sect1 + sect2 + sect3 + sect4;
	// 	if ($(this).scrollTop() == total) {        // If page is scrolled more than 50px
	//          //loadBarCharts();
	//          e.stopPropagation();
	//     } 
	// }

	function loadBarCharts() {

		Highcharts.chart('donut1', {
		  chart: {
		  	height: 250,
            width: 250,
		    plotBackgroundColor: null,
		    plotBorderWidth: 0,
		    plotShadow: false
		  },
		  title: {
		    text: '',
		    align: 'center',
		    verticalAlign: 'middle',
		    y: 60
		  },
		  legend: {
		  	borderRadius: 0,
		  	labelFormat: '{label}'
		  },
		  tooltip: {
		    pointFormat: '<b>{point.percentage:.1f}%</b>'
		  },
		  plotOptions: {
		    pie: {
		      dataLabels: {
		      	labelFormat: '{percentage}',
		        enabled: true,
		        distance: -18,
		        style: {
		          color: 'white'
		        }
		      },
		      startAngle: -200,
		      endAngle: 200,
		      center: ['50%', '50%'],
		      size: '100%'
		    }
		  },
		  series: [{
		    type: 'pie',
		    name: '{name}',
		    showInLegend: true,
		    outerSize: '100%',
		    innerSize: '60%',
		    data: [{ indexlabel: "女性", label: "女性", name: "52%",  y: 52, color: "#811E00", indexLabelFontColor: "#fff" }, 
		           { indexlabel: "男性", label: "男性", name: "48%",  y: 48, color: "#C4BD97", indexLabelFontColor: "#000"}]
		    }]
		});

		Highcharts.chart('donut2', {
		  chart: {
		  	height: 250,
            width: 250,
		    plotBackgroundColor: null,
		    plotBorderWidth: 0,
		    plotShadow: false
		  },
		  title: {
		    text: '',
		    align: 'center',
		    verticalAlign: 'middle',
		    y: 60
		  },
		  legend: {
		  	borderRadius: 0,
		  	labelFormat: '{label}'
		  },
		  tooltip: {
		    pointFormat: '<b>{point.percentage:.1f}%</b>'
		  },
		  plotOptions: {
		    pie: {
		      dataLabels: {
		        enabled: true,
		        distance: -18,
		        style: {
		          fontWeight: 'bold',
		          color: 'white'
		        }
		      },
		      startAngle: -0,
		      endAngle: 360,
		      center: ['50%', '50%'],
		      size: '100%'
		    }
		  },
		  series: [{
		    type: 'pie',
		    name: '',
		    showInLegend: true,
		    outerSize: '100%',
		    innerSize: '60%',
		    data: [
		    	   { label: "20代", name:"10%", y: 10 , color: "#E6D2CC"},
		           { label: "30代", name:"21%", y: 21 , color: "#CDA599", indexLabelFontColor: "#fff" },
		           { label: "40代", name:"32%", y: 32 , color: "#B37866", indexLabelFontColor: "#fff" },
				   { label: "50代", name:"26%", y: 26 , color: "#811E00" , indexLabelFontColor: "#fff"},
				   { label: "60代", name:"12%", y: 12 , color: "#611E00", indexLabelFontColor: "#fff" }
		           ]
		    }]
		});

		Highcharts.chart('donut3', {
		  chart: {
		  	height: 250,
            width: 250,
		    plotBackgroundColor: null,
		    plotBorderWidth: 0,
		    plotShadow: false
		  },
		  title: {
		    text: '',
		    align: 'center',
		    verticalAlign: 'middle',
		    y: 60
		  },
		  legend: {
		  	borderRadius: 0,
		  	labelFormat: '{label}'
		  },
		  tooltip: {
		    pointFormat: '<b>{point.percentage:.1f}%</b>'
		  },
		  plotOptions: {
		    pie: {
		      dataLabels: {
		        enabled: true,
		        distance: -20,
		        style: {
		          fontWeight: 'bold',
		          color: 'white'
		        }
		      },
		      startAngle: -200,
		      endAngle: 200,
		      center: ['50%', '50%'],
		      size: '100%'
		    }
		  },
		  series: [{
		    type: 'pie',
		    name: '',
		    showInLegend: true,
		    outerSize: '100%',
		    innerSize: '60%',
		    data:[{ label: "400万未満", name:"17%",  y: 17, color: "#C4BD97"  },
		    	  { label: "400〜700万未満", name:"33%",  y: 33 , color: "#AC9E60" },
		    	  { label: "700万〜1000未満", name:"26%",  y: 26, color: "#B37866" , indexLabelFontColor: "#fff" },
			      { label: "1000万以上", name:"25%",  y: 25, color: "#811E00" , indexLabelFontColor: "#fff" }]
		    }]
		});

	
		// Highcharts.chart('bar1', {
		//   chart: { type: 'bar' },
		//   title: { text: '' },
		//   xAxis: {
		//     categories: ['ヒトサラ', 'G', 'H', 'T', 'I'],
		//     title: {
		//       text: null
		//     }
		//   },
		//   yAxis: {
		//     min: 0,
		//     categories: [5000, 10000, 15000, 20000, 25000],
		//     title: {
		//       text: '',
		//       align: 'high'
		//     },
		//     labels: {
		//     formatter: function () {
  //                   return "¥" + this.value ;
  //           	}
		//     }
		//   },
		//   plotOptions: {
		//     bar: {
		//       dataLabels: {
		//         enabled: true
		//       }
		//     }
		//   },
		//   legend: {
		//     layout: 'vertical',
		//     align: 'right',
		//     enabled: false,
		//     verticalAlign: 'top',
		//     x: -40,
		//     y: 80,
		//     floating: true,
		//     borderWidth: 1,
		//     backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
		//     shadow: true
		//   },
		//   credits: {
		//     enabled: false
		//   },
		//   series: [{
		//   	dataLabels: {
  //               enabled: true,
  //               inside: true
  //           },
		//   	name: "¥",
		//   	format: '¥{y}',
		//     data: [{ label: "ヒトサラ", y:21979, color:'#C0504D'}, 
		//            { label: "G", y:15073, color:'#C4BD97'}, 
		//            { label: "H", y:17105, color:'#C4BD97'}, 
		//            { label: "T", y:16346, color:'#C4BD97'},
		//            { label: "I", y:20321, color:'#C4BD97'}]
		//     }]
		    
		// });


		// Highcharts.chart('bar2', {
		//   chart: { type: 'bar' },
		//   title: { text: '外食頻度（月）' },
		//   xAxis: {
		//     categories: ['ヒトサラ', 'G', 'H', 'T', 'I'],
		//     title: {
		//       text: null
		//     }
		//   },
		//   yAxis: {
		//     min: 0,
		//     categories: [0, 1, 2, 3, 4, 5],
		//     title: {
		//       text: '',
		//       align: 'high'
		//     },
		//     labels: {
		//       overflow: 'justify'
		//     }
		//   },
		//   plotOptions: {
		//     bar: {
		//       dataLabels: {
		//         enabled: true
		//       }
		//     }
		//   },
		//   legend: {
		//     layout: 'horizontal',
		//     align: 'right',
		//     enabled: false,
		//     verticalAlign: 'top',
		//     x: -40,
		//     y: 80,
		//     floating: true,
		//     borderWidth: 1,
		//     backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
		//     shadow: true
		//   },
		//   credits: {
		//     enabled: false
		//   },
		//   series: [{
		//     data: [{ label: "ヒトサラ", y:5.2, color:'#C0504D'}, 
		//            { label: "G", y:4, color:'#C4BD97'}, 
		//            { label: "H", y:4, color:'#C4BD97'}, 
		//            { label: "T", y:4.2, color:'#C4BD97'},
		//            { label: "I", y:4.7, color:'#C4BD97'}]
		//     }]
		// });



		// Highcharts.chart('bar3', {
		//   chart: { type: 'bar' },
		//   title: { text: '気に入ったお店は何度も足を運ぶ' },
		//   xAxis: {
		//     categories: ['ヒトサラ', 'G', 'H', 'T', 'I'],
		//     title: {
		//       text: null
		//     }
		//   },
		//   yAxis: {
		//     categories: ["10", "15", "20", "25", "30", "35", "40"],

		//     title: {
		//       text: '',
		//       align: 'high'
		//     },
		//     labels: {
		//     formatter: function () {
  //                   return this.value + "%";
  //           	}
		//     }
		//   },
		//   plotOptions: {
		//     bar: {
		//       dataLabels: {
		//         enabled: true
		//       }
		//     }
		//   },
		//   legend: {
		//     layout: 'vertical',
		//     align: 'right',
		//     enabled: false,
		//     verticalAlign: 'top',
		//     x: -40,
		//     y: 80,
		//     floating: true,
		//     borderWidth: 1,
		//     backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
		//     shadow: true
		//   },
		//   credits: {
		//     enabled: false
		//   },
		//   series: [{
		//     data: [{ label: "ヒトサラ", name: "32%", y:32, color:'#C0504D'}, 
		//            { label: "G", name: '24%', y:24, color:'#C4BD97'}, 
		//            { label: "H", name: '28%', y:28, color:'#C4BD97'}, 
		//            { label: "T", name: '24%', y:24.5, color:'#C4BD97'},
		//            { label: "I", name: '18%', y:18, color:'#C4BD97'}]
		//     }]
		// });
	}

});