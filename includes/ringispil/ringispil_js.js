$(document).ready(function(){

    var frame = wp.media({
        title: 'Select or upload logo',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });
	
$("#first_slide_upload_btn").click(function(){

//alert('oyto');
frame.open();
});
  
    frame.on('select', function() {
        var attachment = frame.state().get('selection').first().toJSON();
        $('input[name=first_slide_input_img]').val(attachment.url);
    })
  
});


$(document).ready(function(){

    var frame = wp.media({
        title: 'Select or upload logo',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });
	
$("#second_slide_upload_btn").click(function(){

//alert('oyto');
frame.open();
});
  
    frame.on('select', function() {
        var attachment = frame.state().get('selection').first().toJSON();
        $('input[name=second_slide_input_img]').val(attachment.url);
    })
  
});


$(document).ready(function(){

    var frame = wp.media({
        title: 'Select or upload logo',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });
	
$("#third_slide_upload_btn").click(function(){

//alert('oyto');
frame.open();
});
  
    frame.on('select', function() {
        var attachment = frame.state().get('selection').first().toJSON();
        $('input[name=third_slide_input_img]').val(attachment.url);
    })
  
});