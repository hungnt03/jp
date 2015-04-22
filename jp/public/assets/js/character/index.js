/**
 * Created by hungnt on 4/22/2015.
 */
$().ready(function() {
    $('#myModal').on('shown.bs.modal', function () {
        //console.log($(this).parent().parent().parent().children().first().text());
        $(this).css('opacity','0.5');
        $('#myInput').focus();
    })
})