<?php
/** @var $ticket \App\Ticket\Ticket */
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
        if ($handler->getUserRole() === \App\User\Role::SECURITY)
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
            <img src="img/temp.jpg" alt="" width="30">
        </div>
        <?php
        }
        ?>

        <?php
        /** @var $handler \App\User\UserObject */
        if ($handler->getUserRole() === \App\User\Role::DIRECTOR)
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
                <img src="img/temp.jpg" alt="" width="30">
            </div>
            <?php
        }
        ?>

        <?php
        /** @var $handler \App\User\UserObject */
        if ($handler->getUserRole() === \App\User\Role::ADMIN)
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
                <span>ФСО</span><br><br>
                <img src="img/temp.jpg" alt="" width="30">
            </div>
            <?php
        }
        ?>
    </div>
</div>