<?php
/** @var $ticket \App\Ticket\Ticket */
?>

<?php
if ($ticket->isDanger())
{
    ?>
    <div class="list-element" style="background-color: #ff9696;">
        <div class="card-info">
            <ul style="list-style-type: none">
                <li><span class="card-info-title">ФИО:</span> <?=$ticket->fio?></li>
                <li><span class="card-info-title">Паспортные данные:</span> <?= $ticket->pass?></li>
                <li><span class="card-info-title">Цель визита:</span> <?= $ticket->target?></li>
                <li><span class="card-info-title">Организация:</span> <?= $ticket->org?></li>
                <li><span class="card-info-title">Заказчик:</span> <?= $ticket->owner?></li>
                <li><span class="card-info-title">Автомобиль:</span> <?= $ticket->car ?></li>
                <li><span class="card-info-title">Дата посещения:</span> <?= $ticket->date?></li>
            </ul>
        </div>
        <div>
            <span style="color: #a40505; font-size: 25px">Заявка отклонена</span>
        </div>
    </div>
<?php
}
else
{
    ?>

<div class="list-element">
    <div class="card-info">
        <ul style="list-style-type: none">
            <li><span class="card-info-title">ФИО:</span> <?=$ticket->fio?></li>
            <li><span class="card-info-title">Паспортные данные:</span> <?= $ticket->pass?></li>
            <li><span class="card-info-title">Цель визита:</span> <?= $ticket->target?></li>
            <li><span class="card-info-title">Организация:</span> <?= $ticket->org?></li>
            <li><span class="card-info-title">Заказчик:</span> <?= $ticket->owner?></li>
            <li><span class="card-info-title">Автомобиль:</span> <?= $ticket->car ?></li>
            <li><span class="card-info-title">Дата посещения:</span> <?= $ticket->date?></li>
        </ul>
    </div>
    <div class="card-confirm">
        <?php
        /** @var $handler \App\User\UserObject */
        if ($handler->getUserRole() === \App\User\Role::SECURITY && !$ticket->sbConfirm())
        {
        ?>
            <div class="user-confirm-field">
                <span>Вы</span><br><br>
                <img src="img/yes.jpg" alt="" width="30">
                <img src="img/no.jpg" alt="" width="30">
            </div>
        <?php
        }
        else
        {
            ?>
        <div class="user-confirm-field">
            <span>Служба охраны</span><br><br>
            <?php
            if ($ticket->sbConfirm())
                {?>
                    <img src="img/yes.jpg" alt="" width="30">
                    <?php
                    } else {
                    ?>
            <img src="img/temp.jpg" alt="" width="30">
                    <?php } ?>
        </div>
        <?php
        }
        ?>

        <?php
        /** @var $handler \App\User\UserObject */
        if ($handler->getUserRole() === \App\User\Role::DIRECTOR && !$ticket->directorConfirm())
        {
            ?>
            <div class="user-confirm-field">
                <span>Вы</span><br><br>
                <img src="img/yes.jpg" alt="" width="30">
                <img src="img/no.jpg" alt="" width="30">
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="user-confirm-field">
                <span>Директор</span><br><br>
                <?php
                if ($ticket->directorConfirm())
                {?>
                    <img src="img/yes.jpg" alt="" width="30">
                    <?php
                } else {
                    ?>
                    <img src="img/temp.jpg" alt="" width="30">
                <?php } ?>
            </div>
            <?php
        }
        ?>

        <?php
        /** @var $handler \App\User\UserObject */
        if ($handler->getUserRole() === \App\User\Role::HEAD && !$ticket->headConfirm())
        {
            ?>
            <div class="user-confirm-field">
                <span>Вы</span><br><br>
                <img src="img/yes.jpg" alt="" width="30">
                <img src="img/no.jpg" alt="" width="30">
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="user-confirm-field">
                <span>Начальник отдела</span><br><br>
                <?php
                if ($ticket->headConfirm())
                {?>
                    <img src="img/yes.jpg" alt="" width="30">
                    <?php
                } else {
                    ?>
                    <img src="img/temp.jpg" alt="" width="30">
                <?php } ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>

    <?php
}
?>