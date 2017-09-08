/**
		 * Animations on Navigation SideBar
		 * For the Dashboard
		 */

		var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
		    $BODY = $('body'),
		    $MENU_TOGGLE = $('#menu_toggle'),
		    $SIDEBAR_MENU = $('#sidebar-menu'),
		    $SIDEBAR_FOOTER = $('.sidebar-footer'),
		    $LEFT_COL = $('.left_col'),
		    $RIGHT_COL = $('.right_col'),
		    $NAV_MENU = $('.nav_menu'),
		    $FOOTER = $('footer');

		/*************************/
		/** Sidebar - Menu-Left **/
		/*************************/

		$(document).ready(function() {
		    // This is some kind of easy fix
		    var setContentHeight = function () {
		        // reset height
		        $RIGHT_COL.css('min-height', $(window).height());

		        var bodyHeight = $BODY.outerHeight(),
		            footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
		            leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
		            contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

		        // normalize content
		        contentHeight -= $NAV_MENU.height() + footerHeight;

		        $RIGHT_COL.css('min-height', contentHeight);
		    };

		    $SIDEBAR_MENU.find('a').on('click', function(ev) {
		        var $li = $(this).parent();

		        if ($li.is('.active')) {
		            $li.removeClass('active active-sm');
		            $('ul:first', $li).slideUp(function() {
		                setContentHeight();
		            });
		        } else {
		            // prevent closing menu if we are on child menu
		            if (!$li.parent().is('.child_menu')) {
		                $SIDEBAR_MENU.find('li').removeClass('active active-sm');
		                $SIDEBAR_MENU.find('li ul').slideUp();
		            }
		            
		            $li.addClass('active');

		            $('ul:first', $li).slideDown(function() {
		                setContentHeight();
		            });
		        }
		    });

		    // toggle small or large menu
		    $MENU_TOGGLE.on('click', function() {
		        if ($BODY.hasClass('nav-md')) {
		            $SIDEBAR_MENU.find('li.active ul').hide();
		            $SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
		        } else {
		            $SIDEBAR_MENU.find('li.active-sm ul').show();
		            $SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
		        }

		        $BODY.toggleClass('nav-md nav-sm');

		        setContentHeight();

		        $('.dataTable').each ( function () { $(this).dataTable().fnDraw(); });
		    });

		    // check active menu
		    $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

		    $SIDEBAR_MENU.find('a').filter(function () {
		        return this.href == CURRENT_URL;
		    }).parent('li').addClass('current-page').parents('ul').slideDown(function() {
		        setContentHeight();
		    }).parent().addClass('active');

		    // recompute content when resizing
		    $(window).smartresize(function(){  
		        setContentHeight();
		    });

		    setContentHeight();

		});
		//*** /Sidebar ***




		/***********************************/
		/** Panel toolbox - Widgets Frame **/
		/***********************************/

		$(document).ready(function() {
		    $('.collapse-link').on('click', function() {
		        var $BOX_PANEL = $(this).closest('.x_panel'),
		            $ICON = $(this).find('i'),
		            $BOX_CONTENT = $BOX_PANEL.find('.x_content');
		        
		        // fix for some div with hardcoded fix class
		        if ($BOX_PANEL.attr('style')) {
		            $BOX_CONTENT.slideToggle(200, function(){
		                $BOX_PANEL.removeAttr('style');
		            });
		        } else {
		            $BOX_CONTENT.slideToggle(200); 
		            $BOX_PANEL.css('height', 'auto');  
		        }

		        $ICON.toggleClass('fa-chevron-up fa-chevron-down');
		    });

		    $('.close-link').click(function () {
		        var $BOX_PANEL = $(this).closest('.x_panel');

		        $BOX_PANEL.remove();
		    });
		});
		//*** /Panel toolbox ***


		/**************/
		/** Tooltips **/
		/**************/

		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		//*** /Tooltips ***



		/*****************/
		/** Progressbar **/
		/*****************/
		if ($(".progress .progress-bar")[0]) {
		    $('.progress .progress-bar').progressbar();
		}
		//*** /Progressbar ***



		/***********************************/
		/******* Table Row Clickable *******/
		/***********************************/
		$(document).ready(function() {

		    $('.admin-table-list tr').click(function() {
		        var href = $(this).find("a").attr("href");
		        if(href) {
		            window.location = href;
		        }
		    });
		});
		//*** /Table Row Clickable ***

		/***********************************/
		/********* Carousel Gallery ********/
		/***********************************/
		$(document).ready(function () {
            $('#media').carousel({
                pause: true,
                interval: 5200,
            });
        });
        //*** /Carousel Gallery ***

		/***********************************/
		/*********** Lightbox Ekko *********/
		/***********************************/
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
		    event.preventDefault();
		    $(this).ekkoLightbox();
		});
		//*** /Lightbox Ekko ***

		/* DATA TABLES */
			
		function init_DataTables() {
			
			console.log('run_datatables');
			
			if( typeof ($.fn.DataTable) === 'undefined'){ return; }
			console.log('init_DataTables');
			
			var handleDataTableButtons = function() {
			  if ($("#datatable-buttons").length) {
				$("#datatable-buttons").DataTable({
				  dom: "Bfrtip",
				  buttons: [
					{
					  extend: "copy",
					  className: "btn-sm"
					},
					{
					  extend: "csv",
					  className: "btn-sm"
					},
					{
					  extend: "excel",
					  className: "btn-sm"
					},
					{
					  extend: "pdfHtml5",
					  className: "btn-sm"
					},
					{
					  extend: "print",
					  className: "btn-sm"
					},
				  ],
				  responsive: true
				});
			  }
			};

			TableManageButtons = function() {
			  "use strict";
			  return {
				init: function() {
				  handleDataTableButtons();
				}
			  };
			}();

			$('#datatable').dataTable();

			$('#datatable-keytable').DataTable({
			  keys: true
			});

			$('#datatable-responsive').DataTable();

			$('#datatable-scroller').DataTable({
			  ajax: "js/datatables/json/scroller-demo.json",
			  deferRender: true,
			  scrollY: 380,
			  scrollCollapse: true,
			  scroller: true
			});

			$('#datatable-fixed-header').DataTable({
			  fixedHeader: true
			});

			var $datatable = $('#datatable-checkbox');

			$datatable.dataTable({
			  'order': [[ 1, 'asc' ]],
			  'columnDefs': [
				{ orderable: false, targets: [0] }
			  ]
			});
			$datatable.on('draw.dt', function() {
			  $('checkbox input').iCheck({
				checkboxClass: 'icheckbox_flat-green'
			  });
			});

			TableManageButtons.init();
			
		};

		$(document).ready(function() {
			init_DataTables();
		});	



			