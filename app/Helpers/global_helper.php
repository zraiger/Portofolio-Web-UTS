<?php
use App\Models\metadata;

function get_metaval($metakey)
{
    $data = metadata::where("metakey", $metakey)->first();
    if ($data) {
        return $data->metaval;
    }
}

function set_about_name($name)
{
    $arr = explode(" ", $name);
    $lastn = end($arr);
    $lastn2 = "<span class='text-primary'>$lastn</span>";
    array_pop($arr);
    $firstn = implode(" ", $arr);
    $firstn2 = "<span class='mb-0'>$firstn</span>";
    return $firstn2 . " " . $lastn2;
}

function set_list_workflow($isi)
{
    $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
    $isi = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-check"></i></span>', $isi);
    return $isi;
}