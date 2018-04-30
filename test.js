$(document).ready(function () {
    $('.nav ul li:first').addClass('active');
    $('.tab-content:not(:first)').hide();
    $('.nav ul li a').click(function (event) {
        event.preventDefault();
        var content = $(this).attr('href');
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        $(content).show();
        $(content).siblings('.tab-content').hide();
    });
});