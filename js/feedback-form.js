function submit_go(action){

}

$(document).on('submit','.application-form',function(){
    var info = $('#application-info');
    var contact = $('#application-contact');
    var done = $('#application-done');

    if((info.find('[name="name"]').val() != contact.find('[name="name"]').val())||(info.find('[name="phone"]').val() != contact.find('[name="phone"]').val())||(info.find('[name="email"]').val() != contact.find('[name="email"]').val())){
        $.ajax({
            type: 'POST',
            url: contact.attr('action'),
            data: contact.serialize(),
            success: function(data){
                console.log(data);
                contact.hide();
                info.hide().fadeIn('fast');
                destination = parseInt(info.offset().top) - parseInt($('#navslide').innerHeight());
                $('html,body,#main').animate({scrollTop: destination}, 600);
                info.find('[name="phone"]').val(contact.find('[name="phone"]').val());
                info.find('[name="name"]').val(contact.find('[name="name"]').val());
                info.find('[name="email"]').val(contact.find('[name="email"]').val());
            }
        });
    }

    if($(this).attr('id') == 'application-info'){
        $.ajax({
            type: 'POST',
            url: info.attr('action'),
            data: info.serialize(),
            success: function(data){
                console.log(data);
                info.hide();
                done.hide().fadeIn('fast');
                destination = parseInt(done.offset().top) - parseInt($('#navslide').innerHeight());
                $('html,body,#main').animate({scrollTop: destination}, 600);
            }
        });
    }

    return false;
});

$('#form-back').click(function(){
    $('#application-info').hide();
    $('#application-contact').hide().fadeIn('fast');

    return false;
});

$('#rools-button').click(function(){
    $('#application-contact').hide();
    $('#rools-block').hide().fadeIn('fast');

    return false;
});

$('#close-rools').click(function(){
    $('#rools-block').hide();
    $('#application-contact').hide().fadeIn('fast');

    return false;
});
