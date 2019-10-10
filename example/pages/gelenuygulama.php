<?php

$uygyanit = Gelenler("APP_RESP", "INBOUND", getSession("gb"));

if(!is_array($uygyanit)){
    echo $uygyanit;
}else{
    ?>
    <h3>Gelen Uygulama Yanıtları</h3>
    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>UUID</th>
                <th>EnvUUID</th>
                <th>Identifier</th>
                <th>VKN_TCKN</th>
                <th>InsertDateTime</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($uygyanit as $uyg){
                ?>
                <tr>
                    <td><?=$uyg->getUUID()?></td>
                    <td><?=$uyg->getEnvUUID()?></td>
                    <td><?=$uyg->getIdentifier()?></td>
                    <td><?=$uyg->getVKNTCKN()?></td>
                    <td><?=$uyg->getInsertDateTime()?></td>
                </tr>
                <?php
            }

            ?>
            </tbody>
        </table>
    </div>
    <?php
}
