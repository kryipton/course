

<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->
<style>
    .c_head th:nth-child(6){
        display: none;
    }

    tbody tr td:nth-child(6){
        display: none;
    }
    .c_head th:nth-child(7){
        display: none;
    }

    tbody tr td:nth-child(7){
        display: none;
    }
    .c_head th:nth-child(8){
        display: none;
    }

    tbody tr td:nth-child(8){
        display: none;
    }

    .c_head th:nth-child(12){
        display: none;
    }

    tbody tr td:nth-child(12){
        display: none;
    }


    .c_head th:nth-child(13){
        display: none;
    }

    tbody tr td:nth-child(13){
        display: none;
    }

    .c_head th:nth-child(14){
        display: none;
    }

    tbody tr td:nth-child(14){
        display: none;
    }

    .c_head th:nth-child(16){
        display: none;
    }

    tbody tr td:nth-child(16){
        display: none;
    }


    .c_head th:nth-child(17){
        display: none;
    }

    tbody tr td:nth-child(17){
        display: none;
    }

    .c_head th:nth-child(18){
        display: none;
    }

    tbody tr td:nth-child(18){
        display: none;
    }

    .c_head th:nth-child(19){
        display: none;
    }

    tbody tr td:nth-child(19){
        display: none;
    }

    .c_head th:nth-child(20){
        display: none;
    }

    tbody tr td:nth-child(20){
        display: none;
    }

    .c_head th:nth-child(21){
        display: none;
    }

    tbody tr td:nth-child(21){
        display: none;
    }

    .c_head th:nth-child(22){
        display: none;
    }

    tbody tr td:nth-child(22){
        display: none;
    }

    .c_head th:nth-child(23){
        display: none;
    }

    tbody tr td:nth-child(23){
        display: none;
    }

    .c_head th:nth-child(24){
        display: none;
    }

    tbody tr td:nth-child(24){
        display: none;
    }

</style>
<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->


<div class="content">
    <div class="module c_module">



<!--        yeni melumat yaratma butonu bunun icindeki kodalri deyismeye ehtiyac yoxdu-->
        <br>
        <a style="float: right;background-color: #29a599!important;" onclick="document.querySelector('.dialog2').classList.add('open')" class="с_сreate btn-floating btn waves-effect waves-light red"><i style="font-size: 15px" class="fas fa-plus"></i></a>
        <br>
<!--        yeni melumat yaratma butonu bunun icindeki kodalri deyismeye ehtiyac yoxdu-->


<!--        modulun contenti-->
        <div class="module-body table">
            <table data-url="<?php echo $get_data_link;?>"
                   id="datatable"
                   cellpadding="0"
                   cellspacing="0"
                   border="0"
                   class="datatable-1 table table-bordered display"
                   width="100%">



                <thead>
                    <tr class="c_head">
                        <th data-orderable="false" class="c_switch" style="width: 60px!important;">
                            <label class="c_label_thead"><input type="checkbox" class="c_check_all"/><span id="c_span_whole"></span></label>
                            <a class="red lighten-1 btn btn-danger mr-1 c_delete_all"><i style="font-size: 13px;" class="fas fa-trash"></i></a>
                        </th><!--switch ve id mutleq olmalidir cunki o data tablenin islemesi ucun lazimdi ve thead in icini siraliyanda databasein tablesinin sirasina uygun siralamaz lazimdi en axirda update delete olacaq onnan evvel eger varsa additional linkler ve onnan evvelde tabledki fieldler-->
                        <th>id</th><!--switch ve id mutleq olmalidir cunki o data tablenin islemesi ucun lazimdi ve thead in icini siraliyanda databasein tablesinin sirasina uygun siralamaz lazimdi en axirda update delete olacaq onnan evvel eger varsa additional linkler ve onnan evvelde tabledki fieldler -->
                        <th>Adı(az)</th>
                        <th>Adı(en)</th>
                        <th>Adı(ru)</th>
                        <th>Haqqında(az)</th>
                        <th>Haqqında(en)</th>
                        <th>Haqqında(ru)</th>
                        <th>Profil Şəkli</th>
                        <th>Başlama Günü</th>
                        <th>Max Tələbə sayı</th>
                        <th>Dərsin Başlama saatı</th>
                        <th>Dərsin Bitmə saatı</th>
                        <th>Kursun toplam saatı</th>
                        <th>Kursun toplam ayı</th>

                        <th>İştirakçılar (az)</th>
                        <th>İştirakçılar (en)</th>
                        <th>İştirakçılar (ru)</th>
                        <th>proqram (az)</th>
                        <th>proqram (en)</th>
                        <th>proqram (ru)</th>
                        <th>İş təcrübəsi (az)</th>
                        <th>İş təcrübəsi (en)</th>
                        <th>İş təcrübəsi (ru)</th>
                        <th>Kataloq</th>


                        <th>Dərs deyəcek müəllimlər</th>
                        <th>Əməliyatlar</th>
                    </tr>
                </thead>

                <tbody></tbody>

                <tfoot>
                    <tr class="c_head">
                        <th class="c_switch">switch</th>
                        <th>id</th><!--switch ve id mutleq olmalidir cunki o data tablenin islemesi ucun lazimdi ve thead in icini siraliyanda databasein tablesinin sirasina uygun siralamaz lazimdi en axirda update delete olacaq onnan evvel eger varsa additional linkler ve onnan evvelde tabledki fieldler -->
                        <th>Adı(az)</th>
                        <th>Adı(en)</th>
                        <th>Adı(ru)</th>
                        <th>Haqqında(az)</th>
                        <th>Haqqında(en)</th>
                        <th>Haqqında(ru)</th>
                        <th>Profil Şəkli</th>
                        <th>Başlama Günü</th>
                        <th>Max Tələbə sayı</th>
                        <th>Dərsin Başlama saatı</th>
                        <th>Dərsin Bitmə saatı</th>
                        <th>Kursun toplam saatı</th>
                        <th>Kursun toplam ayı</th>

                        <th>İştirakçılar (az)</th>
                        <th>İştirakçılar (en)</th>
                        <th>İştirakçılar (ru)</th>
                        <th>proqram (az)</th>
                        <th>proqram (en)</th>
                        <th>proqram (ru)</th>
                        <th>İş təcrübəsi (az)</th>
                        <th>İş təcrübəsi (en)</th>
                        <th>İş təcrübəsi (ru)</th>
                        <th>Kataloq</th>

                        <th>Dərs deyəcek müəllimlər</th>
                        <th>Əməliyatlar</th>
                    </tr>
                </tfoot>
            </table>
        </div>
<!--        modulun contenti-->



    </div>
</div>




