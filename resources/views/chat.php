<?php $this->layout('template', ['title' => $title, 'user'=>$user, 'room' => $room]) ?>

<?php $this->start('chat-CSS') ?>

<link rel="stylesheet" type="text/css" href="assets/css/chat.css">

<?php $this->stop() ?>

<?php $this->start('chat-script') ?>

<script src="assets/js/autobahn.js"></script>
<script src="assets/js/script.js"></script>

<?php $this->stop() ?>


<div class="grid grid-cols-4 h-full">
    <div class="bg-gray-800 p-8">
        <h1>Chat</h1>

        <div class="mt-8">
            <div id="user"><?= $user ?></div>
            <div class="text-xs uppercase font-semibold opacity-60"><?= $room ?></div>
        </div>

        <form class="mt-8" action="">
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Rooms</legend>
                <select class="select" id="room" name="room" onchange="connect()">
                    <option disabled selected>Pick a room</option>
                    <option <?= $room === 'room1' ? 'selected' : '' ?> value="room1">Room 1</option>
                    <option <?= $room === 'room2' ? 'selected' : '' ?> value="room2">Room 2</option>
                    <option <?= $room === 'room3' ? 'selected' : '' ?> value="room3">Room 3</option>
                </select>
            </fieldset>
        </form>

    </div>
    <div class="col-span-3">
        <div class="flex flex-col justify-between h-full p-8 gap-4">
            <div class="chat-container h-full" id="chat-container" style="max-height: 100%; overflow: auto">

            </div>
            <form class="text-area flex gap-4" action="" id="form">
                <textarea placeholder="Message" class="textarea textarea-md grow" id="message"></textarea>
                <button class="btn h-full w-24">Send</button>
            </form>
        </div>
    </div>
</div>




