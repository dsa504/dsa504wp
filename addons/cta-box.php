<div class="cta-box">
    <style>
	#can-form-area-sign-up-for-dsa-new-orleans-updates h2 {
	    display: none;
	}

	#can-form-area-sign-up-for-dsa-new-orleans-updates h4 {
	    display: none;
	}

	#can-form-area-sign-up-for-dsa-new-orleans-updates input[name="commit"] {
	    margin-top: 15px;
	}

	#can-form-area-sign-up-for-dsa-new-orleans-updates #form-phone {
	    margin-bottom: 15px;
	}

	#action_info {
	    display: none;
	}

	#can_thank_you {
	    background-color: #f01d25;
	}
    </style>
    <?php 
    if(get_post_type($parentID) == "committee"){
	    $context_text = "the <strong>".get_the_title($parentID)." Committee</strong>";
    } else {
	    $context_text = "<strong>DSA New Orleans</strong>";
    };

    // hack to catch caucases
    if( preg_match("/caucus/i", get_the_title($parentID)) == true ){
	    $context_text = "the <strong>".get_the_title($parentID)."</strong>";
    }

    ?>
    <b>Get Involved</b>
    <p>
    Have questions about <?php echo $context_text; ?>, or want to join up? 
	    Fill out the form below or drop us a line and we'll get in touch: <a href='mailto:hello@dsaneworleans.org'>hello@dsaneworleans.org</a>!
    </p>
    <?php
	echo do_shortcode("[actionnetwork id=4]");
    ?>
</div>
