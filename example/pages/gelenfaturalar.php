<?php
$faturalar = Gelenler("INVOICE", "INBOUND");

if(!is_array($faturalar)){
    echo $faturalar;
}else{
    ?>
    <h3>Gelen Faturalar</h3>
    <div class="table-responsive">
        
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>UUID</th>
                <th>EnvUUID</th>
                <th>Identifier</th>
                <th>VKN_TCKN</th>
                <th>ID</th>
                <th>InsertDateTime</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($faturalar as $fatura){
                ?>
                <tr>
                    <td><?=$fatura->getUUID()?></td>
                    <td><?=$fatura->getEnvUUID()?></td>
                    <td><?=$fatura->getIdentifier()?></td>
                    <td><?=$fatura->getVKNTCKN()?></td>
                    <td><?=$fatura->getID()?></td>
                    <td><?=$fatura->getInsertDateTime()?></td>
                </tr>
                <?php
            }

            ?>
            </tbody>
        </table>
    </div>
    <?php
}
