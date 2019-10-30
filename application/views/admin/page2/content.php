
<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->
<style>
    /*.c_head th:nth-child(3){*/
        /*display: none;*/
    /*}*/

    /*tbody tr td:nth-child(3){*/
        /*display: none;*/
    /*}*/
</style>
<!--tablede hansi rowlarin gorsenmesini isdemirsense o burda yazilir css in icinde yazma onda diger seyfelerdeki tableleride bagliyar :)-->


<div class="content">
    <div class="module c_module">


<!--        modulun basliqi-->
        <div class="module-head">
            <h3>DataTables</h3>
        </div>
<!--        modulun basliqi-->




<!--        yeni melumat yaratma butonu-->
        <br>
        <button class="btn btn-info" style="float: right;" onclick="document.querySelector('.dialog2').classList.add('open')">Yeni Əlavə Et</button>
        <br>
<!--        yeni melumat yaratma butonu-->


<!--        modulun contenti-->
        <div class="module-body table">
            <table data-url="<?php echo base_url("Welcome2/get_data");?>"
                   id="datatable"
                   cellpadding="0"
                   cellspacing="0"
                   border="0"
                   class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">

                <thead>
                    <tr class="c_head">
                        <th>id</th>
                        <th>name</th>
                        <th>last_name</th>
                        <th>gender</th>
                        <th>hire_date</th>
                        <th>hire_date</th>
                        <th>birth_date</th>
                        <th data-orderable="false">Əməliyatlar</th>
                    </tr>
                </thead>

                <tbody></tbody>

                <tfoot>
                <tr class="c_head">
                    <th>id</th>
                    <th>name</th>
                    <th>last_name</th>
                    <th>gender</th>
                    <th>hire_date</th>
                    <th>hire_date</th>
                    <th>birth_date</th>
                    <th data-orderable="false">Əməliyatlar</th>
                </tr>
                </tfoot>
            </table>
        </div>
<!--        modulun contenti-->



    </div>
</div>

