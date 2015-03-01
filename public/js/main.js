$(function() {
    /* Tooltips */
    //Proyectos
    $('#proyects').hover(function() {
        $('.tooltip').css({
            'background-color': '#2183e8',
            'color': '#fff'
        });
    });
    $('#proyects').simpletip({
        content: 'Proyectos',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Estimaciones
    $('#estimates').hover(function() {
        $('.tooltip').css({
            'background-color': '#202020',
            'color': '#fff'
        });
    });
    $('#estimates').simpletip({
        content: 'Estimaciones',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Cotizaciones
    $('#quotes').hover(function() {
        $('.tooltip').css({
            'background-color': '#469e4c',
            'color': '#fff'
        });
    });
    $('#quotes').simpletip({
        content: 'Cotizaciones',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Órdenes de Compra
    $('#purchase').hover(function() {
        $('.tooltip').css({
            'background-color': '#9a9a9a',
            'color': '#fff'
        });
    });
    $('#purchase').simpletip({
        content: 'Órdenes de Compra',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Órdenes de Trabajo
    $('#work').hover(function() {
        $('.tooltip').css({
            'background-color': '#2c3da5',
            'color': '#fff'
        });
    });
    $('#work').simpletip({
        content: 'Órdenes de Trabajo',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Facturación
    $('#billing').hover(function() {
        $('.tooltip').css({
            'background-color': '#b1b54c',
            'color': '#fff'
        });
    });
    $('#billing').simpletip({
        content: 'Facturación',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Almacen
    $('#stock').hover(function() {
        $('.tooltip').css({
            'background-color': '#82571b',
            'color': '#fff'
        });
    });
    $('#stock').simpletip({
        content: 'Almacen',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Herramientas
    $('#tool').hover(function() {
        $('.tooltip').css({
            'background-color': '#32a591',
            'color': '#fff'
        });
    });
    $('#tool').simpletip({
        content: 'Solicitud de Herramientas',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Producción
    $('#production').hover(function() {
        $('.tooltip').css({
            'background-color': '#bd5c21',
            'color': '#fff'
        });
    });
    $('#production').simpletip({
        content: 'Producción',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Clientes
    $('#customers').hover(function() {
        $('.tooltip').css({
            'background-color': '#79b6ae',
            'color': '#fff'
        });
    });
    $('#customers').simpletip({
        content: 'Clientes',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Proveedores
    $('#providers').hover(function() {
        $('.tooltip').css({
            'background-color': '#420094',
            'color': '#fff'
        });
    });
    $('#providers').simpletip({
        content: 'Proveedores',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Juntas de Trabajo
    $('#together').hover(function() {
        $('.tooltip').css({
            'background-color': '#464646',
            'color': '#fff'
        });
    });
    $('#together').simpletip({
        content: 'Juntas de Trabajo',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Catalogo
    $('.catalog').hover(function() {
        $('.tooltip').css({
            'background-color': '#a71d1d',
            'color': '#fff'
        });
    });
    $('.catalog').simpletip({
        content: 'Catalogo',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
    //Administración
    $('#administration').hover(function() {
        $('.tooltip').css({
            'background-color': '#202020',
            'color': '#fff'
        });
    });
    $('#administration').simpletip({
        content: 'Administración',
        position: 'top',
        showEffect: 'fade',
        showTime: 300,
        hideTime: 300
    });
});

$('.name_error').focus(function(event) {
    $('#name_error').fadeIn('fast');
});

/* Modales */
$('.catalog').on('click', function() {
        $('#catalogo').modal({
                fadeDuration: 300,
                closeClass: 'icon-remove',
                closeText: '',
                fadeDelay: 0
        });
        $('.modal nav').css({
                'background-color': '#a71d1d',
                'border-bottom': '1px solid #7b0f0f'
        });
        $('.modal .close').css({
                'background-color': '#8d1717',
                'border-left': '1px solid #7b0f0f'
        });
        $('#contenido-catalogo').easytabs({
                animationSpeed: 'fast'
        });
});
/* AJAX */
//Usuarios
function loadContent() {
    $('#DataUserContent').load(location.href+' #DataUserContent>*', '');
}

function loadBody() {
    $('#body').load(location.href+'#body>*');
}

$(function() {
    $('#UserLogin').on('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'ajax/login',
            type: 'POST',
            dataType: 'json',
            data: $('#UserLogin').serialize(),
            cache: false,
        })
        .done(function(data) {
            if (data.success == true) {
                $('#LoginName').fadeOut('fast', function() {
                    $('#LoaderLogin').fadeIn('fast', function() {
                        $('#LoaderLogin').delay(1000).fadeOut('fast', function() {
                            $('#LoginName').fadeIn('fast', function() {
                                if ($('.error_login').is(':visible')) {
                                    $('.error_login').fadeOut('slow');
                                }
                                $('.login').addClass('fadeOutUp').fadeOut('slow', function() {
                                    $('.black-screen').fadeOut('fast', function() {
                                        $('header').fadeIn('fast', function() {
                                            $('header').removeClass('blur');
                                        });
                                        loadBody();
                                    });
                                });
                            });
                        });
                    });
                });
            }
            if (data.error == true) {
                $('#LoginName').fadeOut('fast', function() {
                    $('#LoaderLogin').fadeIn('fast', function() {
                        $('#LoaderLogin').delay(1000).fadeOut('fast', function() {
                            $('#LoginName').fadeIn('fast', function() {
                                $('.error_login').fadeIn('slow');
                            });
                        });
                    });
                });
            }
        });
        
    });
});

$(function() {
    $('#UserRegister').submit(function(event) {
        event.preventDefault();
        $.ajax({
                url: 'ajax/add-user',
                type: 'POST',
                dataType: 'json',
                data: $('#UserRegister').serialize(),
                cache: false,
        })
        .done(function(data) {
            if (data.fail == true) {
                    $('#LoaderUsers').fadeIn('fast', function() {
                        $('#LoaderUsers').delay(1500).fadeOut('fast', function() {
                            $.each(data.errors, function(index, value) {
                                var errorDiv = '.'+index+'_error';
                                var errorSpan = '#'+index+'_error';
                                $(errorSpan).fadeIn('fast');
                                $(errorSpan).text(value);
                                $(errorDiv).removeClass('success');
                                $(errorDiv).addClass('required');
                                $(errorDiv).focus(function(event) {
                                    if ($(errorDiv).val().trim() === '') {
                                        $(errorSpan).fadeOut('fast');
                                        $(errorDiv).addClass('success');
                                    }
                                });
                                $(errorDiv).focusout(function(event) {
                                    if ($(errorDiv).val().trim() === '') {
                                        $(errorSpan).fadeIn('fast');
                                        $(errorDiv).removeClass('success');
                                    } else {}
                                });
                            });
                        }); 
                    });
            } else
            if (data.success == true) {
                $('#LoaderUsers').slideDown('fast').delay(1500).slideUp('fast', function() {
                    $('#UserRegister').trigger('reset');
                    $('input .success').removeClass('success');
                    $('input .required').removeClass('required');
                    $('select .success').removeClass('required');
                    $('.required-text').fadeOut('fast');
                    $('#UserList').bind('click', function(event) {
                        loadContent();
                    });
                    $('#UserList').trigger('click');
                });
            }
        });
    });
});

$(function() {
    $('body').on('click', '.UserClickDetail', function(event) {
        event.preventDefault();
        var IdUserData = $(this).attr('id');
        $.ajax({
            url: 'ajax/edit-user/'+IdUserData,
            type: 'GET',
            dataType: 'json',
            cache: false,
        })
        .done(function(data) {
            if (data.success == true) {
                $('#ModalDetail').bPopup({
                    fadeSpeed: 'fast'
                });
                $('#DetailName').text(data.user_data.name);
                $('#DetailLastName1').text(data.user_data.lastname_1);
                $('#DetailLastName2').text(data.user_data.lastname_2);
                $('#UserEmailInfo').text(data.user_data.email);
                $('#DetailNick').text(data.user_data.nick);
                $('#DetailRFC').text(data.user_data.rfc);
                $('#DetailEmail').text(data.user_data.email);
                $('#DetailStreet').text(data.user_data.street);
                $('#DetailNumber').text(data.user_data.number);
                $('#DetailSuburb').text(data.user_data.suburb);
                $('#DetailPS').text(data.user_data.ps);
                $('#DetailPhone').text(data.user_data.phone);
                $('#DetailCelphone').text(data.user_data.celphone);
                $('#DetailCity').text(data.user_data.city);
                $('#DetailState').text(data.user_data.state);
                $('#DetailRank').text(data.user_data.rank);
            }
        });
        
    });
});

$(function() {
    $('body').on('click', '.UserClickEdit', function(event) {
        event.preventDefault();
        IdUserEdit = $(this).attr('id');
        $.ajax({
            url: 'ajax/edit-user/'+IdUserEdit,
            type: 'GET',
            dataType: 'json',
            cache: false,
        })
        .done(function(data) {
            if (data.success == true) {
                    $('#ModalEdit').bPopup({
                        onClose: function() {
                            loadContent();
                        }
                    });
                    $('#UserDetailEditName').text(data.user_data.name + ' ' + data.user_data.lastname_1);
                    $('.name_detail').val(data.user_data.name);
                    $('.lastname_1_detail').val(data.user_data.lastname_1);
                    $('.lastname_2_detail').val(data.user_data.lastname_2);
                    $('.rfc_detail').val(data.user_data.rfc);
                    $('.email_detail').val(data.user_data.email);
                    $('.street_detail').val(data.user_data.street);
                    $('.number_detailr').val(data.user_data.number);
                    $('.phone_detail').val(data.user_data.phone);
                    $('.celphone_detail').val(data.user_data.celphone);
                    $('.suburb_detail').val(data.user_data.suburb);
                    $('.ps_detail').val(data.user_data.ps);
                    $('.city_detail').val(data.user_data.city);
                    $('.state_detail').val(data.user_data.sate);
                    $('.nick_detail').val(data.user_data.nick);
                    $('.status_detail').val(data.user_data.status);
                    $('#UserEditRank').val(data.user_data.rank);
            }
        });
        $('#UserEdit').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: 'ajax/update-user/'+IdUserEdit,
                type: 'POST',
                dataType: 'json',
                data: $('#UserEdit').serialize(),
                cache: false,
            })
            .done(function(data) {
                $('#LoaderEditUsers').fadeIn('slow', function() {
                    $('#LoaderEditUsers').delay(1000).fadeOut('slow', function() {
                        if (data.fail == true) {
                            $.each(data.errors, function(index, val) {
                                var errorDiv  = '.'+index+'_detail';
                                var errorSpan = '#'+index+'_detail';
                                $(errorSpan).fadeIn('fast');
                                $(errorSpan).text(val);
                                $(errorDiv).removeClass('success');
                                $(errorDiv).addClass('required');
                                $(errorDiv).focus(function(event) {
                                    if ($(errorDiv).val().trim() === '') {
                                        $(errorSpan).fadeOut('fast');
                                        $(errorDiv).addClass('success');
                                    }
                                });
                                $(errorDiv).focusout(function(event) {
                                    if ($(errorDiv).val().trim() === '') {
                                        $(errorSpan).fadeIn('fast');
                                        $(errorDiv).removeClass('success');
                                    }
                                });
                            });
                        }
                        if (data.success == true) {
                            $('.b-close').trigger('click');
                        }
                    });
                });
            });            
        });
    });
});

$(function() {
    $('body').on('click', '.UserClickDelete', function(event) {
        event.preventDefault();
        var IdDeleteUser = $(this).attr('id');
        $.ajax({
            url: 'ajax/delete-user/'+IdDeleteUser,
            type: 'GET',
            dataType: 'json',
            cache: false,
        })
        .done(function(data) {
            if (data.success == true) {
                loadContent();
                if (loadContent) {
                    alert('Se inhabilitó el usuario');
                }
            }
        });
        
    });
});