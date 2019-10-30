

<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->
<style>
    .c_head th:nth-child(4){
        display: none;
    }

    tbody tr td:nth-child(4){
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
                        <th>name</th>
                        <th>brand</th>
                        <th>date</th>
                        <th>img</th>
                        <th>car_name</th>
                        <th data-orderable="false">Galereya</th>
                        <th data-orderable="false">Qiymetler</th>
                        <th data-orderable="false">Qiymetler2</th>
                        <th data-orderable="false">Əməliyatlar</th>
                    </tr>
                </thead>

                <tbody></tbody>

                <tfoot>
                    <tr class="c_head">
                    <th class="c_switch">switch</th>
                    <th >id</th>
                    <th>name</th>
                    <th>brand</th>
                    <th>date</th>
                    <th>img</th>
                    <th>car_name</th>
                    <th>Galereya</th>
                    <th>Qiymetler</th>
                    <th>Qiymetler2</th>
                    <th data-orderable="false">Əməliyatlar</th>
                </tr>
                </tfoot>
            </table>
        </div>
<!--        modulun contenti-->



    </div>
</div>




