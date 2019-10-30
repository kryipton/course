$(document).ready(function(e){

    //data tablenin islemesi ucun lazim olan scriptler qetiyyen toxunma eger kodlamadan soyumaq isdemirsense
    var base_url = $('#datatable').data("url");
    var table = $('#datatable').DataTable({
        "pageLength" : 10,
        "serverSide": true,
        "lengthMenu": [3, 5, 10, 25, 50, 75, 100, 200],
        "order": [[0, "desc" ]],
        "ajax":{
            "url" :  base_url,
            "type" : 'POST',
            "dataSrc": ""
        },
        "language": {
            "paginate": {
                "previous": '<li class="waves-effect"><i class="fas fa-angle-left" style="font-size: 30px"></i></li>',
                "next": '<li class="waves-effect"><i class="fas fa-angle-right" style="font-size: 30px"></i></li>'
            },
            "search": "",
            "processing": "Gözləyin...",
            "loadingRecords": "Yüklənir...",
            "infoEmpty": "Məlumat daxil edilməmişdir",
            "info": "Məlumat Göstərilir _START_-_END_, Ümumi Məlumat sayı _TOTAL_ ",
            "emptyTable": "Məlumat daxil edilməmişdir",
            "zeroRecords": "Məlumat Tapılmadı",
            "lengthMenu": "_MENU_"

        },
        "initComplete": function(settings, json) {




        },
        "fnDrawCallback": function( oSettings ) {
            $(".c_row_update").on("click", function () {
                var id = $(this).parent().parent().find(".c_id").text();
                $old_value_action = $("#c_update_form").data('action');
                $("#c_update_form").attr('action', $old_value_action + id);
                // alert($("#c_update_form").attr('action'))

                $.ajax({
                    type: "POST",
                    url: $(this).data("updatelink"),
                    data: {my_data: id},

                    beforeSend: function() {
                        $('.c_spinner').show();
                    },

                    complete: function() {
                        $('.c_spinner').hide();
                    },

                    success: function(data) {
                        $("#c_update_form").html(data)
                        $('select').formSelect();
                        $('.datepicker').datepicker();
                        $(".c_form_control").parent().width("620px");
                    },
                    error: function() {
                        alert('Xəta baş verdi');
                    }
                });


            });

            $(".c_row_delete").on("click", function () {
                //silme islemine redirect ederek silen
                var id = $(this).parent().parent().find(".c_id").text();
                $old_data = $(this).data('deletelinkold');
                $(this).data("deletelink", $old_data + id);
                swal({
                    title: "Əminsiniz?",
                    text: "Silinən məlumatlar geri qaytarılmayacaq!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = $(this).data('deletelink');
                        }
                    });


            });

            $(".c_other_link").on("click", function () {
                var id = $(this).parent().parent().find(".c_id").text();
                $old_data = $(this).data('href');
                $(this).attr("href", $old_data + id);
            });


            //switchlernen birden cox elementi secmek
            var idler = [];
            $(".c_checkbox").change(function () {

                var ischecked = $(this).prop("checked");

                if (ischecked == true){
                    idler.push($(this).attr('id'));
                }else{
                    var removeItem = $(this).attr('id');

                    idler = jQuery.grep(idler, function(value) {
                        return value != removeItem;
                    });
                }

            });



            //butun elementleri secmek
            var idArray = [];
            var counter = 0;
            $('.c_check_all').click(function () {

                if (counter % 2 === 0){
                    $(".c_checkbox").prop("checked" ,true);


                    $('.c_checkbox').each(function () {
                        idArray.push(this.id);
                    });

                    $(".c_checkbox").click(function () {

                        var isCheck = $(this).prop("checked");

                        if (isCheck == false){
                            var removeItem = $(this).attr("id");

                            idArray = jQuery.grep(idArray, function(value) {
                                return value != removeItem;
                            });
                        }else{
                            idArray.push($(this).attr("id"))
                        }

                    });

                } else{
                    $(".c_checkbox").prop("checked" ,false);
                    idArray = [];
                    idler = [];
                }
                counter++;

            });



            //birden cox elementi silmek
            $('.c_delete_all').click(function () {

                swal({
                    title: "Əminsiniz?",
                    text: "Silinən məlumatlar geri qaytarılmayacaq!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {

                            if (counter % 2 === 0){
                                if (idler.length != 0){
                                    window.location.href = $(".c_row_delete").data('deletelinkold') + idler;
                                }
                            }else{
                                if (idArray.length != 0){
                                    window.location.href = $(".c_row_delete").data('deletelinkold') + idArray;
                                }
                            }

                        }
                    });
                event.preventDefault();
            });


            //tablede switche basanda rowun renginin deyismesi
            $(".c_checkbox").on("click", function () {
                if ($(this).prop("checked")){
                    $(this).parent().parent().parent().parent().css("background-color", "#80cbc4 ");
                }else{
                    $(this).parent().parent().parent().parent().css("background-color", "#fff");
                }
            });


            //tablede switche basanda butun rowlarin renginin deyismesi
            $(".c_check_all").click(function () {

                if ($(this).prop("checked")){
                    $(".c_checkbox").parent().parent().parent().parent().css("background-color", "#80cbc4");
                }else{
                    $(".c_checkbox").parent().parent().parent().parent().css("background-color", "#fff");
                }

            });

            $('.c_row_update').attr('data-tooltip', 'Düzənlə').tooltip();
            $('.c_row_delete').attr('data-tooltip', 'Sil').tooltip();
            $(".select-wrapper").click(function () {
                // alert()
                $(".c_form_control").prev().prev().width("450pt");
            })
            $('.materialboxed').materialbox();
            $("#datatable_filter").children().width("242");

        }
    });


    //materialize css in select tagini ve date pickeri initialize etmek
    $('select').formSelect();
    $('.datepicker').datepicker();
    $('.sidenav').sidenav();



    $(".c_form_control").parent().width("620px");

    //bu class lara tooltip(title) verilir
    $('.select-wrapper').attr('data-tooltip', 'Məlumat göstər').tooltip();
    $('.c_delete_all').attr('data-tooltip', 'Seçilən məlumatları sil').tooltip();
    $('.с_сreate').attr('data-tooltip', 'Yeni məlumat yarat').tooltip();


});










