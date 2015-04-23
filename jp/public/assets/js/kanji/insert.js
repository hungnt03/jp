/**
 * Created by hungnt on 4/22/2015.
 */
$().ready(function() {
    var json_data = $('.jp_data_char').val();
    var arr_data = JSON.parse(json_data);
    var arr_comple = [];
    $.each( arr_data, function( id, name ) {
        arr_comple.push(name.name);
    });
    //$( "#jp_kanji_char" ).autocomplete({
    //    source: arr_comple
    //});



    //upload
    //$("#btnSelectImg").click(function () {
    //    var finder = new CKFinder();
    //    finder.selectActionFunction = function (fileUrl) {
    //        $('#ImageUrl').val(fileUrl);
    //    };
    //    finder.popup();
    //});
    $("#jp_kanji_upload").on("click", function(){
        var finder = new CKFinder();
        finder.selectActionFunction = function (fileUrl) {
            $('.jp_kanji_source_file').text(fileUrl);
        };
        finder.popup();
    });

    $('#jp_kanji_submit_insert').on("click", function(){

    });
})

function get_data_form(){
    var data_form = {
        'char' : $('#jp_kanji_char').val(),
        'id_level' : $('#jp_kanji_level_insert').find('option:selected').val(),
        'name' : $('#jp_kanji_char').val(),
        'number_line' : $('#jp_kanji_char').val(),
        'formula' : $('#jp_kanji_char').val(),
        'on' : $('#jp_kanji_char').val(),
        'kun' : $('#jp_kanji_char').val(),
        'mean' : $('#jp_kanji_char').val()
    }
    return data_form;
}