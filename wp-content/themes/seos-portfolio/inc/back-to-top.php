<?php
/***********************************************************
* Back to top
************************************************************/			
	
function seos_portfolio_back_to_top() {
    echo '<a id="totop" href="#">^</a>';
    }

    add_action( 'wp_head', 'seos_portfolio_back_to_top_style' );
    function seos_portfolio_back_to_top_style() {
    echo '<style type="text/css">
    #totop {
		position: fixed;
		right: 40px;
	    z-index: 2;
		bottom: 45px;
		display: none;
		outline: none;
		background: #888;
		width: 55px;
		height: 50px;
		text-align: center;
		color: #FFFFFF;
		padding: 8px;
		font-size: 30px;
		-webkit-transition: all 0.1s linear 0s;
		-moz-transition: all 0.1s linear 0s;
		-o-transition: all 0.1s linear 0s;
		transition: all 0.1s linear 0s;
		font-family: \'Tahoma\', sans-serif;
		background-color: rgba(33, 12, 0, 0.8);
		-moz-box-shadow: inset 0 30px 30px -30px #828282, inset 0 -30px 30px -30px #828282;
		-webkit-box-shadow: inset 0 30px 30px -30px #828282, inset 0 -30px 30px -30px #828282;
		box-shadow: inset 0 30px 30px -30px #828282, inset 0 -30px 30px -30px #828282;
    }
		#totop:hover {
				opacity: 0.8;
	}
    </style>';
    }

    add_action( 'wp_footer', 'seos_portfolio_back_to_top_script' );
    function seos_portfolio_back_to_top_script() {
    echo '<script type="text/javascript">
    jQuery(document).ready(function($){
    $(window).scroll(function () {
    if ( $(this).scrollTop() > 500 )
    $("#totop").fadeIn();
    else
    $("#totop").fadeOut();
    });

    $("#totop").click(function () {
    $("body,html").animate({ scrollTop: 0 }, 800 );
    return false;
    });
    });
    </script>';
    }