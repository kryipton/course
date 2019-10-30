

<div class="content">
    <div class="module c_module">

        <h4>Muracietler</h4>

<!--        modulun contenti-->
        <div class="module-body table">
            <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Ad Soyad</th>
                    <th>Email</th>
                    <th>Əlaqə nörəsi</th>
                    <th>Əlavə Məlumat</th>
                    <th>Kursun adı</th>
                </tr>
                </thead>

                <tbody>

                    <?php foreach ($apply as $item) {?>
                        <tr>
                            <td><?php echo $item["name_surname"]?></td>
                            <td><?php echo $item["email"]?></td>
                            <td><?php echo $item["phone"]?></td>
                            <td><?php echo $item["text"]?></td>
                            <td><?php echo $item["course_name"]?></td>
                        </tr>
                    <?php }?>
                </tbody>

            </table>
        </div>
<!--        modulun contenti-->



    </div>
</div>




