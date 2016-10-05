<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad = new Ad;
$ad->user_id = 1;
$ad->name = 'Bacon Bandages';
$ad->description = "Bacon Bandages will treat your minor cuts, scrapes and scratches with the incredible healing power of meat. (At least that's what the Bacon Council tells us.) There are 15 bandages that look so much like tiny slabs of bacon you'll have to hold yourself back from ripping them off and eating them. No really, please don't eat them, that's unhygienic and gross. ";
$ad->price = 6.99;
$ad->image_url = '/img/uploads/bacon_bandage.png';
$ad->date_created = '05/10/2016';
$ad->ad_views = 10;
$ad->save();

$ad = new Ad;
$ad->user_id = 2;
$ad->name = 'Pet Sweep';
$ad->description = "The Pet Sweep animal powered debris removal system fro Fido or Muffin or the Pet Petter, the easiest way to spend quality time with your pet without spending time with your pet. Boxes are all, naturally, empty. ";
$ad->price = 5.95;
$ad->image_url = '/img/uploads/pet_sweep.png';
$ad->date_created = '9/23/2016';
$ad->ad_views = 15;
$ad->save();

$ad = new Ad;
$ad->user_id = 3;
$ad->name = 'Keyboard Waffle Iron';
$ad->description = "Enjoy a breakfast that's Control-Alt-Delicious with this geek-chic waffle iron by Chris Dimino. Made from die-cast aluminum and featuring bake-lite heat resistant handles, this design can be put on the grill or even gas or electric stovetops, letting you enjoy gourmet Belgian-style waffles whether you're camping, tailgating, or simply brunching at home--a perfect way to encourage playing with your food, no matter what your typing speed.";
$ad->price = 69.99;
$ad->image_url = '/img/uploads/keyboard_waffle.png';
$ad->date_created = '7/15/2016';
$ad->ad_views = 9;
$ad->save();

