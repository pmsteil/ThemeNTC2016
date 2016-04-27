jQuery(function(){

/* pmsteil: 
	- commented this out on 4/24/2013... not sure what this was here for... 
    - commented it out and didn't see anything obvious break... 
	- commented because it was breaking things on our /jobbank/add-job.html form
   
	clearFormFields({
		clearInputs: true,
		clearTextareas: true,
		passwordFieldText: true,
		addClassFocus: "focus",
		filterClass: "default"
	});
*/	
	initMobile();
	$('.tipsy').tipsy();
	$('.logo').tipsy();
	initGallery();
	initTabs();
	initPopup();
	initLightbox();
	initForward();
//	askVideo();

});

  $(function() {

    $('.tip').tipsy();
    $('.tipbottom').tipsy( {gravity: 'n'} ); //reversed these to make more sense...
    $('.tiptop').tipsy( {gravity: 's'} ); //reversed these to make more sense...
    $('.tipright').tipsy( {gravity: 'w'} ); //reversed these to make more sense...
    $('.tiprightwide').tipsy( {gravity: 'w'} ); //reversed these to make more sense...
    $('.tipleft').tipsy( {gravity: 'e'} ); //reversed these to make more sense...
    //header icons
    $('.icon-nav a').tipsy( {gravity: 'n'} ); //reversed these to make more sense...

    //footer icons
    $('.sub-footer a').tipsy( {gravity: 's'} ); //reversed these to make more sense...

  });
  
  
  function initMobile() {
  	var url = window.location.pathname;
  
	if(navigator.userAgent.toLowerCase().indexOf("iphone") > -1 || navigator.userAgent.toLowerCase().indexOf("ipad") > -1 || navigator.userAgent.toLowerCase().indexOf("android") > -1){

			$('footer .holder').css('width', '1100px');
			$('.f-nav .col ul li a').css('font-size', '11px');
			$('.f-nav .col').css('padding', '9px 0 5px 30px');
			
			$('.bishopaddress').css('float', 'left').css('margin-left', '10%');
			$('.northtexasaddress').css('margin-left', '5%');
			$('.footer-search').css('margin-right', '15%');
			
			$('.copyright').css('margin-right', '15%');
			
			$('.holder a').css('font-size', '10px');
			$('.holder p').css('font-size', '10px');

			

			

			
				if( url.toLowerCase().indexOf('north-central-district') > -1 ){
					$('#social').css('width', '23%');
				}
				
				if( url.toLowerCase().indexOf('east-district') > -1 ){
					$('#social').css('width', '23%');
				}
				
				if( url.toLowerCase().indexOf('metro-district') > -1 ){
					$('#social').css('width', '23%');
				}
				
				if( url.toLowerCase().indexOf('northwest-district') > -1 ){
					$('#social').css('width', '23%');
				}
		}
	
	


	};
  

function initForward (){
	var forward = $('a.btn-auto-forward');
	var windowUrl = window.location.href;
	if ($.cookie('windowUrlCookie')) {
		var index = windowUrl.indexOf('#index');
		var indexCookie = $.cookie('windowUrlCookie').indexOf('#index');
		if (($('#home-page').length != 0) && (windowUrl != $.cookie('windowUrlCookie')) && (index == -1)) {
			if (windowUrl != $.cookie('windowUrlCookie').substring(0,indexCookie)) window.location.href = $.cookie('windowUrlCookie');
		}
	}
	forward.bind('click', function (){
		$.cookie('windowUrlCookie', windowUrl);
		alert('This page is now your default home page for NorthTexasUMC.org (valid for this browser/computer).');
		return false;
	});
}

function askVideoOLD (){
	var checkbox = $('.show-video-form input[type=checkbox]');
	checkbox.bind('click', function (){
		checked();
	});
	function checked(){
		if (checkbox.is(':checked')) $.cookie('Hide', 'true', { expires: 60 }); //cookie expires in 60 days
		else $.cookie('Hide', 'false');
	}
	if ($.cookie('Hide')!= 'true') {
		$('a.btn-ask-video').trigger('click');
	} else {
		checkbox.attr('checked', 'checked');
	}
}

function askFeedback (){

	$('a.btn-feedback').trigger('click');
	
}

function ajaxSend() {
	
var $form = $('#feedback_form'); // set your form ID

var firstname = $("#FirstName").val();
var emailaddress = $("#EmailAddress").val(); 
var webaddress = $("#WebAddress").val();
var textmessage = $("#CAT_Custom_259629").val();

$form.fadeOut("slow");

var request = $.ajax({
	type: 'POST',
	url: $form.attr('action'),
	data: $form.serialize(), 
	success: function (msg) { 
		
	            var formResponse = eval(msg);      
				  
		        if (formResponse.FormProcessV2Response.success) {
						
						//$form.html(formResponse.FormProcessV2Response.message);
						$form.html("<table class='tabledefault'><tr><td id='title'><strong>Summary of web form submission:</strong><br/><!-- IP Address: 82.8.142.56 --></td></tr><tr><td id='name'><strong>Your Name</strong><br/>" + firstname + "</td></tr><tr><td id='email'><strong>Email Address</strong><br/>" + emailaddress + "</td></tr><tr><td id='cellphone'><strong>Web Address</strong><br/>" + webaddress + "</td></tr><tr><td id='customfields'><table class='tabledefault'><tr><td id='CAT_Custom_259629'><strong>Issue / Comments / Suggestions</strong><br />" + textmessage + "</td></tr></table></td></tr></table>");
						
						$form.fadeIn(1500);
							
                        }
                        else {
                        	alert("it didn't work");
                        }    
		},
				
	error: function (msg) {

							$form.html("<table class='tabledefault'><tr><td id='title'><strong>Summary of web form submission:</strong><br/><!-- IP Address: 82.8.142.56 --></td></tr><tr><td id='name'><strong>Your Name</strong><br/>" + firstname + "</td></tr><tr><td id='email'><strong>Email Address</strong><br/>" + emailaddress + "</td></tr><tr><td id='cellphone'><strong>Web Address</strong><br/>" + webaddress + "</td></tr><tr><td id='customfields'><table class='tabledefault'><tr><td id='CAT_Custom_259629'><strong>Issue / Comments / Suggestions</strong><br />" + textmessage + "</td></tr></table></td></tr></table>");
							
						  
						$form.fadeIn(1500);
							
                          

					//alert("Please use less than 200 words for the Issue area");
					console.log(arguments);
	                				
                }
     });
	 

		
}







function initGallery(){
	$('div.page-slider').slideshow();
    $('div.page-slider2').slideshow();
    
    $('.news-slideshow').slideshow(
    {
	    animSpeed : 700
    });
}

function initLightbox(){
	$('a.btn-feedback').modalPopup();
	$('a.btn-ask-video').modalPopup();
	$('a.feedback_close_button').click(function () { 
       	$('a.btn-feedback').modalPopup();
    });
}



//create jQuery plugin
$.fn.slideshow = function(options){return new slideshow(this, options);}

//constructor
function slideshow(obj, options){this.init(obj,options)}

//prototype
slideshow.prototype = {
	init:function(obj, options) {
		this.options = $.extend({
			slides:'div.slide',
			nextBtn:'a.next',
			prevBtn:'a.prev',
			pagingHolder:'ul.page-slider-list',
			pagingTag:'li',
			createPaging:false,
			autoPlay:true,
			dynamicLoad:false,
			imgAttr:'alt',
			effect:'fade',//fade, slideX, slideY,
			startSlide:false,
			switchTime:5000,
			animSpeed:700
		},options);
		
		this.mainHolder = $(obj);
		this.slides = $(this.options.slides,this.mainHolder);		
		this.nextBtn = $(this.options.nextBtn,this.mainHolder);
		this.prevBtn = $(this.options.prevBtn,this.mainHolder);
		this.dynamicLoad = this.options.dynamicLoad;
		this.imgAttr = this.options.imgAttr;
		this.animSpeed = this.options.animSpeed;
		this.switchTime = this.options.switchTime;
		this.effect = this.options.effect;
		this.autoPlay = this.options.autoPlay;
		this.previous = -1;
		this.loadingFrame = 1;
		this.busy = false;
		this.direction = 1;
		this.timer;
		this.pagingArray = new Array;
		this.loadArray = new Array;
		this.preloader = new Array;
		this.slidesParent = this.slides.eq(0).parent();
		this.slideW = this.slidesParent.width();
		this.slideH = this.slidesParent.height();
		
		(function(){
			if (this.options.startSlide) this.current = this.options.startSlide
			else {
				var active = -1;
				for(var i = 0; i< this.slides.length-1; i++) {
					if (this.slides.eq(i).hasClass('active')) {
						active = i;
						break;						
					}
				}
				if (active != -1) this.current = active;
				else this.current = 0;
			}
		}).apply(this);
		
		this.initPaging();
		this.setStyles();
		this.bindEvents();
		this.showSlide();
	},

	initPaging:function(){
		var obj = this;
		this.pagingHolder = $(this.options.pagingHolder,this.mainHolder);
		
		if (this.options.createPaging) {
			this.pagingHolder.each(function(i){
				var _this = $(this);
				_this.empty();
				var list = $('<ul>');
				for (var i = 0; i < obj.slides.length; i++) $('<li><a href="#">' + (i + 1) + '</a></li>').appendTo(list);
				_this.append(list);
			});
		}
		
		this.paging = $(this.options.pagingTag, this.pagingHolder);
		var ratio = Math.ceil(this.paging.length / this.slides.length);
		for (var i = 0; i < ratio; i++) {
			this.pagingArray.push(this.paging.slice(i*this.slides.length, (i*this.slides.length)+this.slides.length));
		}
	},
	
	setStyles:function(){
		//loader
		if (this.dynamicLoad) {
			this.loader = $('<div class="loader">');
			this.loaderDiv = $('<div>').appendTo(this.loader)
			this.loader.append(this.loaderDiv).appendTo(this.slidesParent);
		}
		
		//slides
		if (this.effect == 'fade') {
			this.slides.css({display:'none'});
			this.slides.eq(this.current).css({display:'block'});
		} else if (this.effect == 'slideX'){
			this.slides.css({display: 'none',left:-this.slideW});
			this.slides.eq(this.current).css({display:'block',left:0});
		} else if (this.effect == 'slideY'){
			this.slides.css({display:'none',top:-this.slideH});
			this.slides.eq(this.current).css({display:'block',top:0});
		}
	},
	
	bindEvents:function(){
		var obj = this;
		this.nextBtn.bind('click',function(){
			if (!obj.busy) obj.nextSlide();
			return false;
		});
		
		this.prevBtn.bind('click',function(){
			if (!obj.busy) obj.prevSlide();
			return false;
		});

		for (var i = 0; i < this.pagingArray.length; i++) {
			this.pagingArray[i].each(function(i){
				$(this).bind('click',function(){
					if (i != obj.current && !obj.busy) {
						obj.previous = obj.current;
						obj.current = i;
						if (obj.previous > i) obj.direction = -1
						else obj.direction = 1;
						obj.showSlide();
					}
					return false;
				});
			});
		}
		
		if (this.dynamicLoad) this.loader.bind('click',function(){
			obj.abortLoading();
		});
	},
	
	nextSlide:function(){
		this.previous = this.current;
		if (this.current < this.slides.length-1) this.current++
		else this.current = 0;
		this.direction = 1;
		this.showSlide();
	},
	
	prevSlide:function(){
		this.previous = this.current;
		if (this.current > 0) this.current--
		else this.current = this.slides.length-1;
		this.direction = -1;
		this.showSlide();
	},
	
	showSlide:function(){
		var obj = this;
		
		if (this.previous == this.current) return; 
		
		var _current = this.current;
		this.busy = true;
		clearTimeout(this.timer);
		
		if (typeof this.loadArray[_current] != 'undefined' || !this.dynamicLoad) {
			//slide already loaded
			this.switchSlide();
		
		} else {
			//slide not loaded
			this.showLoading();
			var images = $(this.dynamicLoad,this.slides.eq(this.current));
			if (images.length) {
				var counter = 0;
				images.each(function(){
					var preloader = new Image;
					obj.preloader.push(preloader);
					var img = $(this);
					preloader.onload = function(){
						counter++;
						checkImages();
					}
					preloader.onerror = function(){
						//ignore errors
						counter++;
						checkImages();
					}
					preloader.src = img.attr(obj.imgAttr);
				});
				
				function checkImages(){
					if (counter == images.length) {
						images.each(function(){
							var img = $(this);
							img.attr('src',img.attr(obj.imgAttr));
						});
						successLoad();
					}
				}
				
			} else successLoad();
		}
		
		function successLoad(){
			obj.loadArray[_current] = 1;
			obj.hideLoading();
			obj.switchSlide();
		}
	},
	
	switchSlide:function(){
		var obj = this;
		
		if (this.previous != -1) {
			var nextSlide = this.slides.eq(this.current);
			var prevSlide = this.slides.eq(this.previous);
			
			if (this.effect == 'fade') {
				nextSlide.css({display:'block',opacity:0}).animate({opacity:1},this.animSpeed,function(){
					$(this).css({opacity:'auto'});
				});
				prevSlide.animate({opacity:0},this.animSpeed,callback);
				
				/*		if (this.effect == 'fade') {
				nextSlide.animate({opacity:1, display: 'block'},this.animSpeed,function(){
					prevSlide.animate({opacity:0},this.animSpeed,callback);
				});*/
				
				
			} else if (this.effect == 'slideX'){
				nextSlide.css({display:'block',left:this.slideW*this.direction}).animate({left:0},this.animSpeed);
				prevSlide.animate({left:-this.slideW*this.direction},this.animSpeed+10,callback);
			} else if (this.effect == 'slideY'){
				nextSlide.css({display:'block',top:this.slideH*this.direction}).animate({top:0},this.animSpeed);
				prevSlide.animate({top:-this.slideH*this.direction},this.animSpeed+10,callback);
			}
		} else {
			if (this.autoPlay) this.startAutoPlay();
			this.busy = false;
		}
		
		this.refreshStatus();
		
		function callback(){
			prevSlide.css({display:'none'});
			if (obj.autoPlay) obj.startAutoPlay();
			obj.busy = false;
		}
	},
	
	refreshStatus:function(){
		for (var i = 0; i < this.pagingArray.length;i++) {
			this.pagingArray[i].eq(this.previous).removeClass('active');
			this.pagingArray[i].eq(this.current).addClass('active');
		}
		this.slides.eq(this.previous).removeClass('active');
		this.slides.eq(this.current).addClass('active');
	},
	
	showLoading:function(){
		var obj = this;
		this.loader.show();
		clearInterval(this.loadingTimer);
		obj.loadingTimer = setInterval(animateLoading, 66);
		
		function animateLoading(){
			obj.loaderDiv.css('top', obj.loadingFrame * -40);
			obj.loadingFrame = (obj.loadingFrame + 1) % 12;
		}
	},
	
	hideLoading:function(){
		this.loader.hide();
		clearInterval(this.loadingTimer);
	},
	
	abortLoading:function(){
		this.busy = false;
		this.hideLoading();
		this.current = this.previous;
		for (var i = 0; i < this.preloader.length; i++) {
			this.preloader[i].onload = null;
			this.preloader[i].onerror = null;
		}
		if (this.autoPlay) this.startAutoPlay();
	},
	
	startAutoPlay:function(){
		var obj = this;
		clearTimeout(obj.timer);
		obj.timer = setTimeout(function(){
			obj.nextSlide();
		},obj.switchTime);
	}
}

function clearFormFields(o)
{
	if (o.clearInputs == null) o.clearInputs = true;
	if (o.clearTextareas == null) o.clearTextareas = true;
	if (o.passwordFieldText == null) o.passwordFieldText = false;
	if (o.addClassFocus == null) o.addClassFocus = false;
	if (!o.filter) o.filter = "default";
	if(o.clearInputs) {
		var inputs = document.getElementsByTagName("input");
		for (var i = 0; i < inputs.length; i++ ) {
			if((inputs[i].type == "text" || inputs[i].type == "password") && inputs[i].className.indexOf(o.filterClass)) {
				inputs[i].valueHtml = inputs[i].value;
				inputs[i].onfocus = function ()	{
					if(this.valueHtml == this.value) this.value = "";
					if(this.fake) {
						inputsSwap(this, this.previousSibling);
						this.previousSibling.focus();
					}
					if(o.addClassFocus && !this.fake) {
						this.className += " " + o.addClassFocus;
						this.parentNode.className += " parent-" + o.addClassFocus;
					}
				}
/*				inputs[i].onblur = function () {
					if(this.value == "") {
						this.value = this.valueHtml;
						if(o.passwordFieldText && this.type == "password") inputsSwap(this, this.nextSibling);
					}
					if(o.addClassFocus) {
						this.className = this.className.replace(o.addClassFocus, "");
						this.parentNode.className = this.parentNode.className.replace("parent-"+o.addClassFocus, "");
					}
				}
				if(o.passwordFieldText && inputs[i].type == "password") {
					var fakeInput = document.createElement("input");
					fakeInput.type = "text";
					fakeInput.value = inputs[i].value;
					fakeInput.className = inputs[i].className;
					fakeInput.fake = true;
					inputs[i].parentNode.insertBefore(fakeInput, inputs[i].nextSibling);
					inputsSwap(inputs[i], null);
				}*/
				/*uncommenting this will break the job form. This line changes the onblur and focus behavior on forms */
			}
		}
	}
	if(o.clearTextareas) {
		var textareas = document.getElementsByTagName("textarea");
		for(var i=0; i<textareas.length; i++) {
			if(textareas[i].className.indexOf(o.filterClass)) {
				textareas[i].valueHtml = textareas[i].value;
				textareas[i].onfocus = function() {
					if(this.value == this.valueHtml) this.value = "";
					if(o.addClassFocus) {
						this.className += " " + o.addClassFocus;
						this.parentNode.className += " parent-" + o.addClassFocus;
					}
				}
				textareas[i].onblur = function() {
					if(this.value == "") this.value = this.valueHtml;
					if(o.addClassFocus) {
						this.className = this.className.replace(o.addClassFocus, "");
						this.parentNode.className = this.parentNode.className.replace("parent-"+o.addClassFocus, "");
					}
				}
			}
		}
	}
	function inputsSwap(el, el2) {
		if(el) el.style.display = "none";
		if(el2) el2.style.display = "inline";
	}
}

function initTabs()
{
	var sets = document.getElementsByTagName("div");
	for (var i = 0; i < sets.length; i++)
	{
		if (sets[i].className.indexOf("tabset") != -1)
		{
			var tabs = [];
			var links = sets[i].getElementsByTagName("a");
			for (var j = 0; j < links.length; j++)
			{
				if (links[j].className.indexOf("tab") != -1)
				{
					tabs.push(links[j]);
					links[j].tabs = tabs;
					var c = document.getElementById(links[j].href.substr(links[j].href.indexOf("#") + 1));

					//reset all tabs on start
					if (c) if (links[j].className.indexOf("active") != -1) c.style.display = "block";
					else c.style.display = "none";

					links[j].onclick = function ()
					{
						var c = document.getElementById(this.href.substr(this.href.indexOf("#") + 1));
						if (c)
						{
							//reset all tabs before change
							for (var i = 0; i < this.tabs.length; i++)
							{
								var tab = document.getElementById(this.tabs[i].href.substr(this.tabs[i].href.indexOf("#") + 1));
								if (tab)
								{
									tab.style.display = "none";
								}
								this.tabs[i].className = this.tabs[i].className.replace("active", "");
							}
							this.className += " active";
							c.style.display = "block";
							return false;
						}
					}
				}
			}
		}
	}
}

function initPopup()
{
	
	var tabs = [];
	var links = $('.open-drop');
	/*for (var j = 0; j < links.length; j++)
	{
		if (links[j])
		{
			tabs.push(links[j]);
			links[j].tabs = tabs;
			var c = document.getElementById(links[j].href.substr(links[j].href.indexOf("#") + 1));
			if (c) {
				if (links[j].className.indexOf("active") != -1) {
					c.style.display = "block";
				}
				else {
					$(c).hide();
				}
			}
		}
	}*/
	$('.open-guests').mouseover( function(e) {
		$('.open-guests').addClass("active");
		$('.open-churches').removeClass("active");
		$('.open-districts').removeClass("active");
		$('#popup2').hide();
		$('#popup2').removeClass("over");
		$('#popup3').hide();
		$('#popup3').removeClass("over");
		$('#popup1').show();
	});
	$('.open-churches').mouseover( function(e) {
		$('.open-churches').addClass("active");
		$('.open-guests').removeClass("active");
		$('.open-districts').removeClass("active");
		$('#popup1').hide();
		$('#popup1').removeClass("over");
		$('#popup3').hide();
		$('#popup3').removeClass("over");
		$('#popup2').show();
	});
	
	$('.open-districts').mouseover( function(e) {
		$('.open-districts').addClass("active");
		$('.open-guests').removeClass("active");
		$('.open-churches').removeClass("active");
		$('#popup1').hide();
		$('#popup1').removeClass("over");
		$('#popup2').hide();
		$('#popup2').removeClass("over");
		$('#popup3').show();
	});
	
	$('.open-churches').mouseout( function(e) {
		$('.open-churches').removeClass("active");
	});
	$('.open-guests').mouseout( function(e) {
		$('.open-guests').removeClass("active");
	});
	$('.open-districts').mouseout( function(e) {
		$('.open-districts').removeClass("active");
	});
	$('#popup1').mouseover( function(e) {
		$('#popup1').addClass("over");
	});
	$('#popup2').mouseover( function(e) {
		$('#popup2').addClass("over");
	});
	$('#popup3').mouseover( function(e) {
		$('#popup3').addClass("over");
	});
	$('#popup1').mouseout( function(e) {
		$('#popup1').removeClass("over");
	});
	$('#popup2').mouseout( function(e) {
		$('#popup2').removeClass("over");
	});
	$('#popup3').mouseout( function(e) {
		$('#popup3').removeClass("over");
	});
	
	$('html').mouseover( function(e) {
		if (!$("#churchdrop").hasClass("active")) {
			if (!$("#popup2").hasClass("over")) {
				$('#popup2').hide();
			}
		}
		if (!$("#guestdrop").hasClass("active")) {
			if (!$("#popup1").hasClass("over")) {
				$('#popup1').hide();
			}
		}
		if (!$("#districtdrop").hasClass("active")) {
			if (!$("#popup3").hasClass("over")) {
				$('#popup3').hide();
			}
		}
	});
	
	
	
	/*$('.guests-popup').mouseout( function(e)
		{
		$('#popup1').hide();
	});
	$('.churches-popup').mouseout(function(e)
		{
		$('#popup2').hide();
	});*/
	


}

;(function($) {
    $.fn.tipsy = function(options) {

        options = $.extend({}, $.fn.tipsy.defaults, options);
        
        return this.each(function() {
            
            var opts = $.fn.tipsy.elementOptions(this, options);
            
            $(this).hover(function() {

                $.data(this, 'cancel.tipsy', true);

                var tip = $.data(this, 'active.tipsy');
                if (!tip) {
                    tip = $('<div class="tipsy"><div class="tipsy-inner"/></div>');
                    tip.css({position: 'absolute', zIndex: 100000});
                    $.data(this, 'active.tipsy', tip);
                }

                if ($(this).attr('title') || typeof($(this).attr('original-title')) != 'string') {
                    $(this).attr('original-title', $(this).attr('title') || '').removeAttr('title');
                }

                var title;
                if (typeof opts.title == 'string') {
                    title = $(this).attr(opts.title == 'title' ? 'original-title' : opts.title);
                } else if (typeof opts.title == 'function') {
                    title = opts.title.call(this);
                }

                tip.find('.tipsy-inner')[opts.html ? 'html' : 'text'](title || opts.fallback);

                var pos = $.extend({}, $(this).offset(), {width: this.offsetWidth, height: this.offsetHeight});
                tip.get(0).className = 'tipsy'; // reset classname in case of dynamic gravity
                tip.remove().css({top: 0, left: 0, visibility: 'hidden', display: 'block'}).appendTo(document.body);
                var actualWidth = tip[0].offsetWidth, actualHeight = tip[0].offsetHeight;
                var gravity = (typeof opts.gravity == 'function') ? opts.gravity.call(this) : opts.gravity;

                switch (gravity.charAt(0)) {
                    case 'n':
                        tip.css({top: pos.top + pos.height, left: pos.left + pos.width / 2 - actualWidth / 2}).addClass('tipsy-north');
                        break;
                    case 's':
                        tip.css({top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2}).addClass('tipsy-south');
                        break;
                    case 'e':
                        tip.css({top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth}).addClass('tipsy-east');
                        break;
                    case 'w':
                        tip.css({top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width}).addClass('tipsy-west');
                        break;
                }

                if (opts.fade) {
                    tip.css({opacity: 0, display: 'block', visibility: 'visible'}).animate({opacity: 0.8});
                } else {
                    tip.css({visibility: 'visible'});
                }

            }, function() {
                $.data(this, 'cancel.tipsy', false);
                var self = this;
                setTimeout(function() {
                    if ($.data(this, 'cancel.tipsy')) return;
                    var tip = $.data(self, 'active.tipsy');
                    if (opts.fade) {
                        tip.stop().fadeOut(function() { $(this).remove(); });
                    } else {
                        tip.remove();
                    }
                }, 100);

            });
            
        });
        
    };
    
    // Overwrite this method to provide options on a per-element basis.
    // For example, you could store the gravity in a 'tipsy-gravity' attribute:
    // return $.extend({}, options, {gravity: $(ele).attr('tipsy-gravity') || 'n' });
    // (remember - do not modify 'options' in place!)
    $.fn.tipsy.elementOptions = function(ele, options) {
        return $.metadata ? $.extend({}, options, $(ele).metadata()) : options;
    };
    
    $.fn.tipsy.defaults = {
        fade: false,
        fallback: '',
        gravity: 'n',
        html: false,
        title: 'title'
    };
    
    $.fn.tipsy.autoNS = function() {
        return $(this).offset().top > ($(document).scrollTop() + $(window).height() / 2) ? 's' : 'n';
    };
    
    $.fn.tipsy.autoWE = function() {
        return $(this).offset().left > ($(document).scrollLeft() + $(window).width() / 2) ? 'e' : 'w';
    };
    
})(jQuery);

jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};