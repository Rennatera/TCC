$(document).ready(function(){

    /*---------------------
       slicknav
    --------------------- */
	$('#mobile-menu').slicknav({
		allowParentLinks: true
	});

	$.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element)
        {
            if(element.parent('.input-group').length)
            {
                error.insertAfter(element.parent());
            }
            else
            {
                error.insertAfter(element);
            }
        }
    });

    //Valida e envia form cadastro do voluntário
    if($('#formCadastroVoluntario').length)
    {
        $('#formCadastroVoluntario').validate({
            submitHandler: function(element)
            {
                var formData = $("#formCadastroVoluntario").serialize();

                $.ajax({
                    url: '/cadastra-voluntario',
                    type: 'POST',
                    data: formData,
                })
                .done(function(data)
                {
                	var resultado = $.parseJSON(data);

                    if(resultado[0])
                    {
                        $('#formCadastroVoluntario')[0].reset();

                        $('html, body').animate({
                            scrollTop: 0
                        }, 600);

                        GravaMensagem('success', resultado[1], 8000);
                    }
                    else
                    {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 600);

                        GravaMensagem('danger', resultado[1], 8000);
                    }
                })
                .fail(function()
                {
                    GravaMensagem('danger', 'Ocorreu um erro ao realizar o cadastro', 8000);
                });
            }
        });
    }

    //Valida e envia form cadastro da instituição
    if($('#formCadastroInstituicao').length)
    {
        $('#formCadastroInstituicao').validate({
            submitHandler: function(element)
            {
                var formData = $("#formCadastroInstituicao").serialize();

                $.ajax({
                    url: '/cadastra-instituicao',
                    type: 'POST',
                    data: formData,
                })
                .done(function(data)
                {
                    var resultado = $.parseJSON(data);

                    if(resultado[0])
                    {
                        $('#formCadastroInstituicao')[0].reset();

                        $('html, body').animate({
                            scrollTop: 0
                        }, 600);

                        GravaMensagem('success', resultado[1], 8000);
                    }
                    else
                    {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 600);

                        GravaMensagem('danger', resultado[1], 8000);
                    }
                })
                .fail(function()
                {
                    GravaMensagem('danger', 'Ocorreu um erro ao realizar o cadastro', 8000);
                });
            }
        });
    }

    //Valida e envia form de login do voluntário
    if($('#formLoginVoluntario').length)
    {
        $('#formLoginVoluntario').validate({
            submitHandler: function(element)
            {
                var formData = $("#formLoginVoluntario").serialize();

                $.ajax({
                    url: '/login-voluntario',
                    type: 'POST',
                    data: formData,
                })
                .done(function(data)
                {
                    if(data == true)
                    {
                        window.location.href = '/home-voluntario';
                    }
                    else
                    {
                        GravaMensagem('danger', 'Usuario ou senha invalidos', 8000);
                    }
                })
                .fail(function()
                {
                    GravaMensagem('danger', 'Ocorreu um erro ao realizar o cadastro', 8000);
                });
            }
        });
    }

    //Valida e envia form de login do instituicao
    if($('#formLoginInstituicao').length)
    {
        $('#formLoginInstituicao').validate({
            submitHandler: function(element)
            {
                var formData = $("#formLoginInstituicao").serialize();

                $.ajax({
                    url: '/login-instituicao',
                    type: 'POST',
                    data: formData,
                })
                .done(function(data)
                {
                    if(data == true)
                    {
                        window.location.href = '/home-instituicao';
                    }
                    else
                    {
                        GravaMensagem('danger', 'Usuario ou senha invalidos', 8000);
                    }
                })
                .fail(function()
                {
                    GravaMensagem('danger', 'Ocorreu um erro ao realizar o cadastro', 8000);
                });
            }
        });
    }

    //Valida e envia form de doação
    if($('#formDoacaoVoluntario').length)
    {
        $('#formDoacaoVoluntario').validate({
            submitHandler: function(element)
            {
                var formData = $("#formDoacaoVoluntario").serialize();

                $.ajax({
                    url: '/fazer-doacao',
                    type: 'POST',
                    data: formData,
                })
                .done(function(data)
                {
                    var resultado = $.parseJSON(data);

                    if(resultado[0] == true)
                    {
                        $('#formDoacaoVoluntario')[0].reset();

                        GravaMensagem('success', resultado[1], 8000);
                    }
                    else
                    {
                        GravaMensagem('danger', 'Ocorreu um erro ao fazer sua doação, tente novamente!', 8000);
                    }
                })
                .fail(function()
                {
                    GravaMensagem('danger', 'Ocorreu um erro ao fazer sua doação, tente novamente!', 8000);
                });
            }
        });
    }


    /*---------------------
       Circular Bars - Knob
    --------------------- */
    if(typeof($.fn.knob) != 'undefined') {
        $('.knob').each(function () {
            var $this = $(this),
            knobVal = $this.attr('data-rel');

            $this.knob({
                'draw': function () {
                    $(this.i).val(this.cv)
                }
            });

            $this.appear(function() {
        		$({
                    value: 0
        		}).animate({
                    value: knobVal
        		}, {
        		  duration : 2000,
        		  easing   : 'swing',
        		  step     : function () {
        			$this.val(Math.ceil(this.value)).trigger('change');
        		  }
        		});
            }, {accX: 0, accY: -150});
    	});
    }


    /* --------------------------------------------------------
       contact-accordion
    * -------------------------------------------------------*/
    $(".contact-accordion").collapse({
        accordion:true,
        open: function() {
            this.slideDown(550);
        },
        close: function() {
            this.slideUp(550);
        }
    });


    /* --------------------------------------------------------
       question-accordion
    * -------------------------------------------------------*/
	$(".question-accordion").collapse({
		accordion:true,
        open: function() {
    		this.slideDown(550);
        },
        close: function() {
    		this.slideUp(550);
        }
	});


    /* --------------------------------------------------------
       donate-accordion
    * -------------------------------------------------------*/
    $(".donate-accordion").collapse({
		accordion:true,
        open: function() {
    		this.slideDown(550);
        },
        close: function() {
    		this.slideUp(550);
        }
	});


    /*---------------------
        parallax
    --------------------- */
	$('.parallax-area').parallax("50%", 0.3);


    /*---------------------
        countdown
    --------------------- */
	$('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
    		$this.html(event.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hour</p></span> <span class="cdown minutes">%M <p>Min</p></span class="cdown second"> <span>%S <p>Sec</p></span>'));
        });
	});


    /*---------------------
       fancybox
    --------------------- */
	$('.fancybox').fancybox();


    // jQuery counter
    $('.counter').counterUp({
        delay: 50,
        time: 3000
    });

    /*---------------------
       scrollUp
    --------------------- */
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
});

function GravaMensagem(tipo, mensagem, tempo, callback)
{
    var icon    = "";
    var message = "ATENÇÃO";
    var timer   = 5000;

    if(tempo != "" && tempo != undefined)
        timer = tempo;

    if(tipo == "success")
    {
        icon    = "fa-check";
        message = "SUCESSO";
    }
    else if(tipo == "warning")
    {
        icon = "fa-exclamation";
    }
    else if(tipo == "danger")
    {
        icon = "fa-times";
        var message = "ERRO";
    }
    else if(tipo == "info")
    {
        icon = "fa-info";
    }

    $("#boxAlert").removeAttr("class").attr("class", "alert alert-" + tipo + " alert-dismissable noDisplay");
    $("#boxAlert .title-message").html(message);
    $("#boxAlert .fa").removeAttr("class").addClass("fa " + icon);
    $("#boxAlert .message-alert").empty().html(mensagem);

    var newWith = $("#boxAlert").innerWidth() - 37;

    $("#boxAlert").removeClass("noDisplay");
    $("#boxAlert").animate({right: -1}, 300, callback);

    clearTimeout($.data(this, 'fechaMsgm'));

    $.data(this, 'fechaMsgm', setTimeout(function()
    {
        FechaMsgm();
    }, timer));

    //Fechar Alert Box
    $(".close-alert").on('click', function(event)
    {
        FechaMsgm();
        clearTimeout($.data(this, 'fechaMsgm'));
    });
}

function Redireciona(caminho)
{
    window.location.href = caminho;
}

function FechaMsgm()
{
    var actualWidth = $("#boxAlert").innerWidth() + 5;

    $("#boxAlert").animate({right: - actualWidth}, 300);
}