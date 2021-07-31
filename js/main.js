$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,

        onStepChanging: function(event, currentIndex, newIndex){
            ("#myform").validate();
        },
        onFinished: function (event, currentIndex) {
            var formData = {
                name: $("#name").val(),
            };

            $.ajax({
                type: "POST",
                url: "pendaftaran.php",
                data: formData,
              }).done(function( msg ) {
                alert( "Daftar Berhasil" );
              });
        },
        labels: {
            finish: "Submit Now",
            next: "Next",
            previous: "Previous"
        }
    });

     $('.wizard > .steps li a').click(function(){
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
        $("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Checkbox
    $('.checkbox-circle label').click(function(){
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })

});

