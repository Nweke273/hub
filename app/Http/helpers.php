<?php
if (!function_exists('notify')) {
    /**
     * @param $title
     * @param $message
     * @param $color
     * @param $position
     * @param $icon
     */
    function notify($title, $message, $color, $position, $icon)
    {
        session()->flash('message', [
            'title' => $title,
            'message' => $message,
            'color' => $color,
            'position' => $position,
            'icon' => $icon,
        ]);
    }
}

?>