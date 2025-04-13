<?php $this->layout('template', ['title' => $title]) ?>

<?php $this->start('home-CSS') ?>

<link rel="stylesheet" type="text/css" href="assets/css/home.css">

<?php $this->stop() ?>

<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
        <div class="w-lg">
            <div class="card bg-base-100 w-full shrink-0 shadow-2xl">
                <form class="card-body" method="post" action="/chat">
                    <fieldset class="fieldset">
                        <label class="fieldset-label">Room</label>
                        <select class="select w-full" name="room">
                            <option disabled selected>Pick a Room</option>
                            <option value="room1">Room 1</option>
                            <option value="room2">Room 2</option>
                            <option value="room3">Room 3</option>
                        </select>
                        <label class="fieldset-label mt-3">What is your name?</label>
                        <input type="text" class="input w-full" placeholder="Type here" name="name"/>
                        <button type="submit" class="btn btn-neutral mt-4">chat</button>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




