var reg = $('#regions');
var city = $('#city');
var dist = $('#districts');

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function hideRegions() {
    reg.css('display', 'none');
    reg.val(0);
    city.children('option:not(:first)').remove();
    city.css('display', 'none');
    dist.children('option:not(:first)').remove();
    dist.css('display', 'none');
}

function checkEmail() {
    if (isEmail($('#email').val())) {
        $.ajax({
            type: 'post',
            url: '/checkUserEmail/',
            data: {email: $('#email').val()},
            success: function (data) {
                var response = JSON.parse(data);
                console.log(typeof response)
                if (response.length === 1) {
                    $('#email').css({'border-color': 'red', 'box-shadow': '0 0 10px rgba(255, 0, 0, 0.8)'});

                    var str = '<h4><b>Эта почта занята</b></h4>' +
                        '<p>Имя: <b>' + response[0]['u_name'] + '</b></p>' +
                        '<p>Имейл: <b>' + response[0]['u_email'] + '</b></p>' +
                        '<p>Область: <b>' + response[0]['r_name'] + '</b></p>' +
                        '<p>Город: <b>' + response[0]['c_name'] + '</b></p>' +
                        '<p>Район: <b>' + response[0]['d_name'] + '</b></p>';
                    $('#info').html(str);
                    hideRegions()
                } else {
                    $('#email').css({'border-color': 'green', 'box-shadow': '0 0 10px rgba(0, 255, 0, 0.8)'});

                    var str = '<h4>Эта почта свободна</h4>' +
                        '<p>Раскажи мне где ты живешь!</p>';
                    $('#info').html(str);
                    $('#regions').css('display', 'block')
                }
            },
        });
    } else {
        $('#email').css({'border-color': 'red', 'box-shadow': '0 0 10px rgba(255, 0, 0, 0.8)'});
        var str = '<h4>не корректная почта</h4>';
        $('#info').html(str);
    }
}

function checkName() {
    var nameVal = $('#name').val();
    if (nameVal !== '') {
        $.ajax({
            type: 'post',
            url: '/checkUserName/',
            data: {name: nameVal},
            success: function (data) {
                var response = JSON.parse(data);
                if (response === 'false') {
                    $('#name').css({'border-color': 'red', 'box-shadow': '0 0 10px rgba(255, 0, 0, 0.8)'});
                    $('#info').html('Неподходящее имя');
                } else {
                    $('#name').css({'border-color': 'green', 'box-shadow': '0 0 10px rgba(0, 255, 0, 0.8)'});
                    $('#info').html('Отличное имя, Чувак!!!');
                }
            },
        });
    } else {
        $('#name').css({'border-color': '', 'box-shadow': ''});
    }
}

reg.change(function () {
    var regionVal = reg.val();
    city.children('option:not(:first)').remove();
    dist.children('option:not(:first)').remove();
    dist.css('display', 'none');

    if (regionVal !== '0') {
        $.ajax({
            type: 'post',
            url: '/getCity/',
            data: {region: regionVal},
            success: function (data) {
                var responce = JSON.parse(data);
                $.each(responce, function (key, value) {
                    city.append("<option value=" + value['id'] + ">" + value['name'] + "</option>");
                });
            },
        });
        city.css('display', 'block')
    } else {
        city.children('option:not(:first)').remove();
        city.css('display', 'none')
    }
});

city.change(function () {
    var cityVal = $("#city").val();
    dist.children('option:not(:first)').remove();
    dist.children('option:not(:first)').remove();

    if (cityVal !== '0') {
        $.ajax({
            type: 'post',
            url: '/getDistricts/',
            data: {city: cityVal},
            success: function (data) {
                var response = JSON.parse(data);

                $.each(response, function (key, value) {

                    dist.append("<option value=" + value['id'] + ">" + value['name'] + "</option>");
                });
            },
        });
        dist.css('display', 'block')
    } else {
        dist.children('option:not(:first)').remove();
        dist.css('display', 'none')
    }
});

function addUser() {
    if ($('#name').val() == '') {
        $('#info').html('У тебя есть имя?');
    } else {
        if (reg.val() == '0' || city.val() == '0' || dist.val() == '0') {
            $('#info').html('Я все еще не знаю где ты живешь =(');
        } else {
            $.ajax({
                type: 'post',
                url: '/addUser/',
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    region: reg.val(),
                    city: city.val(),
                    districts: dist.val()
                },
                success: function (data) {
                    var str = '<h3>Пользователь добавлен</h3>' +
                        '<p>Имя: <b>' + $('#name ').val() + '</b></p>' +
                        '<p>Имейл: <b>' + $('#email').val() + '</b></p>' +
                        '<p>Область: <b>' + $('#regions option:selected').text() + '</b></p>' +
                        '<p>Город: <b>' + $('#city option:selected').text() + '</b></p>' +
                        '<p>Район: <b>' + $('#districts option:selected').text() + '</b></p>';
                    $('#info').html(str);
                    $('#addUserForm')[0].reset();
                    $('#name').removeAttr('style');
                    $('#email').removeAttr('style');
                    hideRegions()
                }
            });
        }
    }
}