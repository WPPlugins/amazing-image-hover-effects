jQuery(document).ready(function($) {

	jQuery('.moreimages span').remove();
    jQuery('.preview').hide(); 
    jQuery('#la-loader').hide();
    jQuery('#la-saved').hide();

    $(".capbordercolor,.capbgcolor").spectrum({
        // flat: true,
        showAlpha: true,
        showInput: true,
        preferredFormat: "rgb",
        showPalette: true,
        chooseText: 'Choose',
    });

    setTimeout(function() {
        jQuery('#faqs-container >.ui-accordion-content').first().addClass('firstelement');
    }, 40);

    setTimeout(function() {
        jQuery('.content > .ui-accordion-content').first().addClass('firstelement');
    }, 50);
    
    var sCounter = jQuery('#amazingcaption').find('.fullshortcode:last').attr('id');
    

	jQuery(".accordian,.accordian1").accordion({
    heightStyle: "content",
    header: "> h3",
    collapsible: true,
    changestart: function (event, ui) {
        if ($(event.currentTarget).hasClass("item")) {
            event.preventDefault();
            $(event.currentTarget).removeClass("ui-corner-top").addClass("ui-corner-all");
        	}
    	}
	}).sortable({
        items: '.content div',
        items: 'h3',
        // handle: '> div > h3',
        // handle: 'h3'
    });

	//    Adding Icmage

	 jQuery('#amazingcaption').on('click','.addimage',function( event ){
     
        event.preventDefault();
     
     var parent = jQuery(this).closest('.ui-accordion-content').find('.image');
        // Create the media frame.
        la_caption_hover = wp.media.frames.la_caption_hover = wp.media({
          title: 'Select Images for Amazing Hover Effects',
          button: {
            text: 'Add Image',
          },
          multiple: false  // Set to true to allow multiple files to be selected
        });
     
        // When an image is selected, run a callback. 
        la_caption_hover.on( 'select', function() {
            // We set multiple to false so only get one image from the uploader
            var selection = la_caption_hover.state().get('selection');
            selection.map( function( attachment ) {
                attachment = attachment.toJSON();
                
                parent.append('<span><img src="'+attachment.url+'"><span class="dashicons dashicons-dismiss" title="Remove Image"></span></span>');

            });  
        });
     
        // Finally, open the modal 
        la_caption_hover.open();
    });
	
	// Removing Uploades Image


    jQuery('#amazingcaption').on('click', '.dashicons-dismiss', function() {
            jQuery(this).parent('span').remove();
    }); 

    // Cloning Add More Images 
    

	jQuery('#amazingcaption').on('click', '.moreimg', function() { 
            jQuery(this).closest('.content').find('h3:last').css({
                'background': '',
                'color': ''
            });;
            var parent = jQuery(this).closest('.content');
            var heading = jQuery(this).closest('.content').find('h3:first').clone(true).text('New Image').css({
                'background': '#0073aa',
                'color': 'White'
            });
	        var content = jQuery(this).closest('.content').find('h3:first').next().clone(true).removeClass('firstelement');
            jQuery(parent).append(heading).append(content);
            // jQuery(parent).append(heading);

            var colorparent = jQuery(this).closest('.content').first().find('.ui-accordion-content').first();
            var headingcolor = jQuery(this).closest('.content').find('.ui-accordion-content').find('.head-color').val();
            var desccolor = jQuery(this).closest('.content').find('.ui-accordion-content').find('.desc-color').val();
            var headingback = jQuery(this).closest('.content').find('.ui-accordion-content').find('.headingbg').val();
            var capborder = jQuery(this).closest('.content').find('.ui-accordion-content').find('.capbordercolor').val();
            var capback = jQuery(this).closest('.content').find('.ui-accordion-content').find('.capbgcolor').val();

            colorparent.find('.wp-picker-container').remove();
            jQuery('.sp-light').remove();
            colorparent.find('.insert-picker:eq(0)').append('<input type="text" class="head-color" value="'+headingcolor+'" />');
            colorparent.find('.insert-picker:eq(1)').append('<input type="text" class="headingbg" value="'+headingback+'" />');
            colorparent.find('.insert-picker:eq(2)').append('<input type="text" class="desc-color" value="'+desccolor+'" />');
            colorparent.find('.insert-picker:eq(3)').append('<input type="text" class="capbordercolor" value="'+capborder+'" />');
            colorparent.find('.insert-picker:eq(4)').append('<input type="text" class="capbgcolor" value="'+capback+'" />');

            jQuery('.accordian').accordion('refresh'); 
            colorparent.find('.head-color,.headingbg,.desc-color,.capbordercolor').wpColorPicker(); 
            $(".capbgcolor").spectrum({
                showAlpha: true,
                showInput: true,
                preferredFormat: "rgb",
                showPalette: true,
                chooseText: 'Choose',
            });

	});

        jQuery('#amazingcaption').on('click', '.addcat', function() { 
            sCounter++;
            jQuery('.addcat').parents().find('#faqs-container').find('h3:last').css({
                'background': '',
                'color': ''
            });
            var parent = jQuery(this).closest('#faqs-container');
            var head = jQuery('.addcat').parents().find('#faqs-container').find('h3:first').clone(true).appendTo(parent).text('New Category').css({
                'background': '#37cee5',
                'color': '#fff'
            });
            var content = jQuery('.addcat').parents().find('#faqs-container').find('h3:first').next().clone(true).removeClass('firstelement').appendTo(parent);
            content.find('button.fullshortcode').attr('id', sCounter);

            jQuery("div.accordian").accordion({
            heightStyle: "content",
            collapsible: true, 
            changestart: function (event, ui) {
                if ($(event.currentTarget).hasClass("item")) {
                    event.preventDefault();
                    $(event.currentTarget).removeClass("ui-corner-top").addClass("ui-corner-all");
                    }
                }
            });

            var colorappend = jQuery('.addcat').parents().find('#faqs-container').find('.accordian:last').find('.ui-accordion-content');
            
            var headingcolor = jQuery(this).closest('.content').find('.ui-accordion-content').find('.head-color').val();
            var desccolor = jQuery(this).closest('.content').find('.ui-accordion-content').find('.desc-color').val();
            var headingback = jQuery(this).closest('.content').find('.ui-accordion-content').find('.headingbg').val();
            var capborder = jQuery(this).closest('.content').find('.ui-accordion-content').find('.capbordercolor').val();
            var capback = jQuery(this).closest('.content').find('.ui-accordion-content').find('.capbgcolor').val();

            colorappend.find('.wp-picker-container').remove();
            jQuery('.sp-light').remove();
            colorappend.find('.insert-picker:eq(0)').append('<input type="text" class="head-color" value="'+headingcolor+'" />');
            colorappend.find('.insert-picker:eq(1)').append('<input type="text" class="headingbg" value="'+headingback+'" />');
            colorappend.find('.insert-picker:eq(2)').append('<input type="text" class="desc-color" value="'+desccolor+'" />');
            colorappend.find('.insert-picker:eq(3)').append('<input type="text" class="capbordercolor" value="'+capborder+'" />');
            colorappend.find('.insert-picker:eq(4)').append('<input type="text" class="capbgcolor" value="'+capback+'" />');

            colorappend.find('.head-color,.headingbg,.desc-color,.capbordercolor').wpColorPicker();
            $(".capbgcolor").spectrum({
                showAlpha: true,
                showInput: true,
                preferredFormat: "rgb",
                showPalette: true,
                chooseText: 'Choose',
            });
            jQuery('.accordian').accordion('refresh');

    });

    // Removing Category
        jQuery('#amazingcaption').on('click', '.removecat', function(event) {

          if (jQuery(this).closest('#faqs-container > .ui-accordion-content').hasClass('firstelement')) {
                alert('You can not delete it as it is first element!');
            } else {
                
                var head = jQuery(this).closest('#faqs-container > .ui-accordion-content').prev();
                var body = jQuery(this).closest('#faqs-container > .ui-accordion-content');
                head.remove();
                body.remove();
                jQuery("#accordion").accordion('refresh');
            }  
        });

    // Removing Add More Images

    jQuery('#amazingcaption').on('click','.removeitem',function() {

            if (jQuery(this).closest('.ui-accordion-content').hasClass('firstelement')) {
                alert('You can not delete it as it is first element!');
            } else {

                var head = jQuery(this).closest('.ui-accordion-content').prev();
                var body = jQuery(this).closest('.ui-accordion-content');
                head.remove();
                body.remove();
                jQuery("#accordion").accordion('refresh');
            }

            
    });
    jQuery('.head-color,.desc-color,.headingbg').wpColorPicker(); 

    jQuery('#amazingcaption').on('click', '.save-meta', function(event) {
        event.preventDefault();     
         jQuery('#la-saved').hide();
         jQuery('#la-loader').show();
        var allcats = []; 
          jQuery('.accordian>.content').each(function(index,val) {
            var cats = {};
            cats.cat_name = jQuery(this).find('.catname').val();
            cats.allcapImages = [];
            jQuery(this).find('.ui-accordion-content').each(function(index, val) {
                var images = {};
                images.img_name = jQuery(this).find('.imgname').val();
                images.cat_name = jQuery(this).find('.catname').val();
                images.cap_img = jQuery(this).find('img').attr('src');
                images.cap_head = jQuery(this).find('.capheading').val();
                images.cap_desc = jQuery(this).find('.capdesc').val();
                images.cap_link = jQuery(this).find('.caplink').val();
                images.cap_effect = jQuery(this).find('.effectopt').val();
                images.cap_direction = jQuery(this).find('.directionopt').val();
                images.cap_headcolor =  jQuery(this).find('.head-color').val(),
                images.cap_desccolor =  jQuery(this).find('.desc-color').val(),
                images.cap_grid = jQuery(this).find('.capgrid').val();
                images.shortcode = jQuery(this).find('.fullshortcode').attr('id');
                // images.counter = jQuery(this).siblings().find('.fullshortcode').attr('id'); 
                cats.allcapImages.push(images); 
            });
            allcats.push(cats);
        });
        var data = {
            action : 'la_save_amazing_hover_options',
             posts : allcats       
        } 

         jQuery.post(laAjax.url, data, function(resp) {
            console.log(resp);
            window.location.reload(true);
            jQuery('#la-loader').hide();
            jQuery('#la-saved').show();
            jQuery('#la-saved').delay(2000).fadeOut();
        });
         
    });

    jQuery('.content').on('click','button.fullshortcode',function(event) {
        event.preventDefault();
        prompt("Copy and use this Shortcode", '[amazing-image-hover-effects id="'+jQuery(this).attr('id')+'"]');
    });

    jQuery('.enableprev').click(function() {

        jQuery(this).siblings('.preview').toggle();
    });

});
