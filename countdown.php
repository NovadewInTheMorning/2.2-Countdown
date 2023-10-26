<?php
function update() {
    $targetDate = strtotime("2023-11-30 23:59:59");
    $currentDate = time();
    $secondsRemaining = max($targetDate - $currentDate, 0);
    $days = floor($secondsRemaining / 86400);
    $secondsRemaining %= 86400;
    $hours = floor($secondsRemaining / 3600);
    $secondsRemaining %= 3600;
    $minutes = floor($secondsRemaining / 60);
    $seconds = $secondsRemaining % 60;

    echo "{$days}:{$hours}:{$minutes}:{$seconds}";
}

update();
