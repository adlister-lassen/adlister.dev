<?php

require_once __DIR__ . '/../../models/Ad.php';

$ad               = new Ad;
$ad->user_id      = 1;
$ad->name         = 'Bacon Bandages';
$ad->description  = "Bacon Bandages will treat your minor cuts, scrapes and scratches with the incredible healing power of meat. (At least that's what the Bacon Council tells us.) There are 15 bandages that look so much like tiny slabs of bacon you'll have to hold yourself back from ripping them off and eating them. No really, please don't eat them, that's unhygienic and gross. ";
$ad->price        = 6.99;
$ad->image_url    = '/img/uploads/bacon_bandage.png';
$ad->date_created = '05/10/2016';
$ad->ad_views     = 10;
$ad->save();

$ad               = new Ad;
$ad->user_id      = 2;
$ad->name         = 'Pet Sweep';
$ad->description  = "The Pet Sweep animal powered debris removal system fro Fido or Muffin or the Pet Petter, the easiest way to spend quality time with your pet without spending time with your pet. Boxes are all, naturally, empty. ";
$ad->price        = 5.95;
$ad->image_url    = '/img/uploads/pet_sweep.png';
$ad->date_created = '9/23/2016';
$ad->ad_views     = 15;
$ad->save();

$ad               = new Ad;
$ad->user_id      = 3;
$ad->name         = 'Keyboard Waffle Iron';
$ad->description  = "Enjoy a breakfast that's Control-Alt-Delicious with this geek-chic waffle iron by Chris Dimino. Made from die-cast aluminum and featuring bake-lite heat resistant handles, this design can be put on the grill or even gas or electric stovetops, letting you enjoy gourmet Belgian-style waffles whether you're camping, tailgating, or simply brunching at home--a perfect way to encourage playing with your food, no matter what your typing speed.";
$ad->price        = 69.99;
$ad->image_url    = '/img/uploads/keyboard_waffle.png';
$ad->date_created = '7/15/2016';
$ad->ad_views     = 9;
$ad->save();




$ad               = new Ad;
$ad->user_id      = 1;
$ad->name         = 'Bacon Bandages';
$ad->description  = "Bacon Bandages will treat your minor cuts, scrapes and scratches with the incredible healing power of meat. At least that's what the Bacon Council tells us. There are 15 bandages that look so much like tiny slabs of bacon you'll have to hold yourself back from ripping them off and eating them. No really, please don't eat them, that's unhygienic and gross.";
$ad->price        = 6.99;
$ad->image_url    = '/img/uploads/bacon_bandage.png';
$ad->date_created = 5 / 10 / 2016;
$ad->ad_views     = 10;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 2;
$ad->name         = 'Pet Sweep';
$ad->description  = "The Pet Sweep animal powered debris removal system fro Fido or Muffin or the Pet Petter, the easiest way to spend quality time with your pet without spending time with your pet. Boxes are all, naturally, empty.";
$ad->price        = 5.95;
$ad->image_url    = '/img/uploads/pet_sweep.png';
$ad->date_created = 9 / 23 / 2016;
$ad->ad_views     = 15;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 3;
$ad->name         = 'Keyboard Waffle Iron';
$ad->description  = "Enjoy a breakfast that's Control-Alt-Delicious with this geek-chic waffle iron by Chris Dimino. Made from die-cast aluminum and featuring bake-lite heat resistant handles, this design can be put on the grill or even gas or electric stovetops, letting you enjoy gourmet Belgian-style waffles whether you're camping, tailgating, or simply brunching at home--a perfect way to encourage playing with your food, no matter what your typing speed.";
$ad->price        = 69.99;
$ad->image_url    = '/img/uploads/keyboard_waffle.png';
$ad->date_created = 7 / 15 / 2016;
$ad->ad_views     = 9;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 4;
$ad->name         = '3 in 1 Breakfast Maker';
$ad->description  = "Elite Cuisine 3-in-1 Breakfast Station 4-Cup Coffee Maker
3 in 1 toaster oven, coffee maker and griddle
4-Cup coffee maker
1-Slice toaster oven
6-Inch griddle
500-Watt of power";
$ad->price        = 35.99;
$ad->image_url    = '/img/uploads/breakfast-maker.png';
$ad->date_created = 8 / 2 / 2016;
$ad->ad_views     = 14;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 5;
$ad->name         = 'The Ab Hancer';
$ad->description  = "The Ab Hancer will be your choice of six-pack defining tools this summer.
It is light weight, is easy to hide under clothing, and dramatically enhances your abs!";
$ad->price        = 24.95;
$ad->image_url    = '/img/uploads/ab-hancer.png';
$ad->date_created = 7 / 26 / 2016;
$ad->ad_views     = 22;
$ad->save();




$ad               = new Ad;
$ad->user_id      = 6;
$ad->name         = 'Bacon Toothpaste';
$ad->description  = "Great gag/novelty gift.
Each tube contains 2.5 oz (70 g) of potent BACON paste.";
$ad->price        = 5.00;
$ad->image_url    = '/img/uploads/bacon-flavored-toothpaste.png';
$ad->date_created = 6 / 5 / 2016;
$ad->ad_views     = 34;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 6;
$ad->name         = 'The Amazing Banana Slicer';
$ad->description  = "Faster, safer than using a knife
Great for cereal
Plastic, dishwasher safe
Slice your banana with one quick motion
Kids love slicing their own bananas
“What can I say about the 571B Banana Slicer that hasn’t already been said about the
wheel, penicillin, or the 
$ad->save();iPhone…. this is one of the greatest inventions of all time…”";
$ad->price        = 9.99;
$ad->image_url    = '/img/uploads/banana-slicer.png';
$ad->date_created = 10 / 3 / 2016;
$ad->ad_views     = 4;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 5;
$ad->name         = 'Baseball Bat Pepper Grinder';
$ad->description  = "Jr. size ideal for picnics, camping or for the assistant grill master
Actual size is 19 inches long
Perfect for BBQ’s
superior stainless steel pepper-grinding mechanism
Designed and manufactured in England";
$ad->price        = 14.50;
$ad->image_url    = '/img/uploads/baseball-bat-pepper-grinder.png';
$ad->date_created = 9 / 9 / 2016;
$ad->ad_views     = 19;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 4;
$ad->name         = 'Cupcake Flavored Floss';
$ad->description  = "Make flossing fun! What a novel(ty) idea! – Makes a great, wacky gift!
Turn a boring nightly routine into a party in your mouth with Cupcake Floss!
Be careful though, the delicious frosting flavor might turn you into a flossaholic!
Each 2 1/2-inches tall plastic dispenser contains 27.3 yards (982.8 inches) of waxed floss.";
$ad->price        = 3.75;
$ad->image_url    = '/img/uploads/cupcake-floww.png';
$ad->date_created = 5 / 29 / 2016;
$ad->ad_views     = 13;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 3;
$ad->name         = 'The Defibrillator Toaster';
$ad->description  = "It’s about time someone came up with a fresh take on the vital machine
that warms our bread every morning, the Defibrillator Toaster.";
$ad->price        = 19.99;
$ad->image_url    = '/img/uploads/toaster.png';
$ad->date_created = 6 / 27 / 2016;
$ad->ad_views     = 46;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 2;
$ad->name         = 'The Disco Helmet';
$ad->description  = "Vintage-style 3/4 Open Face Helmet
Liner with detail stitching and contrasting ventilated panels in the top
Embossed goggle strap
Vintage style chrome strip
Helmets are non-DOT approved and meant for novelty purposes only";
$ad->price        = 75.00;
$ad->image_url    = '/img/uploads/disco-ball-helmet.png';
$ad->date_created = 3 / 1 / 2016;
$ad->ad_views     = 27;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 1;
$ad->name         = 'Emergency Moustache Kit';
$ad->description  = "Emergency moustaches to instantly become a man
Styles include traditional gent, cowboy, rusty brush, italian plumber, oil baron and abra-kadabra
Individually sealed for extra freshness
Stash your tash for emergency situations
Set of 6 self adhesive mustaches in assorted styles";
$ad->price        = 8.15;
$ad->image_url    = '/img/uploads/moustaches.png';
$ad->date_created = 3 / 3 / 2016;
$ad->ad_views     = 31;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 1;
$ad->name         = 'Escape Preventing Dog Harness';
$ad->description  = "Patented harness that prevents puppies or small adult dogs from escaping fenced-in areas.
The device slips on a dog like a common harness, but its integrated rigid 10 1/2″-long cross-bar spans
well beyond the width of the pet, preventing it from slipping out between fence railings.";
$ad->price        = 29.95;
$ad->image_url    = '/img/uploads/dog-harness.png';
$ad->date_created = 3 / 9 / 2016;
$ad->ad_views     = 44;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 2;
$ad->name         = 'The Facebook Shower Curtain';
$ad->description  = "Bring your profile to life in the bathroom
Transparent section so you can create a profile
Perfect for the social networker in your life
Water resistant
Measures 70 inches by 70 incehs";
$ad->price        = 13.99;
$ad->image_url    = '/img/uploads/facebook-shower-curtain.png';
$ad->date_created = 3 / 13 / 2016;
$ad->ad_views     = 7;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 3;
$ad->name         = 'Flowbee Haircut Machine';
$ad->description  = "Flowbee Haircutting System Money-saver for the entire family and even works on pets!
Over a million satisfied customers have used it for years.
Provides a precise haircut every time.
Flowbee System attaches to a vacuum cleaner (not included, needs to
be 3 hp or 8 amps to pull 
hair through the cutting blades.)";
$ad->price        = 124.99;
$ad->image_url    = '/img/uploads/flowbee.png';
$ad->date_created = 4 / 2 / 2016;
$ad->ad_views     = 13;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 4;
$ad->name         = 'Glow In The Dark Toilet Paper';
$ad->description  = "Toilet paper roll has a glow-in-the-dark coating.
Novelty item, not intended for “actual” use.
If used your rear may glow.";
$ad->price        = 8.56;
$ad->image_url    = '/img/uploads/glowing-toilet-paper.png';
$ad->date_created = 4 / 4 / 2016;
$ad->ad_views     = 21;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 5;
$ad->name         = 'iPhone Case With Built-In Cup Holder';
$ad->description  = "The Uppercup aims to be one of the first cup holders for the iPhone.
A creation from Natwerk it is called the Uppercup.
It is an iPhone case with a built-in cup holder to hold your beverage.";
$ad->price        = 11.00;
$ad->image_url    = '/img/uploads/iphone-cupholder.png';
$ad->date_created = 4 / 8 / 2016;
$ad->ad_views     = 17;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 6;
$ad->name         = 'iPhone Giant Horn Speaker';
$ad->description  = "The non-powered horn is held up by a hand-carved
natural wood stand, and is handmade out of ceramic.
The docking area at the top of the horn is compatible with the original
iPhone, iPhone 3G, iPhone 3GS, iPhone 4, iPhone 4S, and iPod touch.";
$ad->price        = 22.95;
$ad->image_url    = '/img/uploads/horn-speaker.png';
$ad->date_created = 5 / 5 / 2016;
$ad->ad_views     = 26;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 6;
$ad->name         = 'The Lobster iPhone Case';
$ad->description  = "The Red Lobster Mobile Telephone Case is a modern appropriation of Salvador
Dali’s Lobster Telephone (Aphrodisiac telephone), created in 1938.";
$ad->price        = 20.00;
$ad->image_url    = '/img/uploads/lobster-case.png';
$ad->date_created = 5 / 10 / 2016;
$ad->ad_views     = 32;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 5;
$ad->name         = 'The Noodle Cooling Fan with Chopsticks';
$ad->description  = "Frantic blowing is both undignified and limited in its effectiveness.
The Automated Noddle Cooler is the answer.
A compact fan, it fits tidily towards the holding end of one of a pair of chopsticks.";
$ad->price        = 10.50;
$ad->image_url    = '/img/uploads/noodle-cooling-fan.png';
$ad->date_created = 5 / 25 / 2016;
$ad->ad_views     = 11;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 4;
$ad->name         = 'Giant Nose Shower Soap Dispenser';
$ad->description  = "The Nose Shower Gel Dispenser is a wacky, gross addition to any bathroom or shower stall.";
$ad->price        = 14.99;
$ad->image_url    = '/img/uploads/nose-soap-dispenser.png';
$ad->date_created = 6 / 6 / 2016;
$ad->ad_views     = 49;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 3;
$ad->name         = 'Pancake Maker Conveyor Belt';
$ad->description  = "The best part about this machine is that it’s all automated.
Pour in the fat free batter and hit the button and out come the hotcakes.
If you had one of these and were selling pancakes, they’d sell like hotcakes.
The Chefstack Pancake Maker can be yours if you have $3500 lying around.";
$ad->price        = 159.95;
$ad->image_url    = '/img/uploads/pancake-conveyor-belt.png';
$ad->date_created = 6 / 16 / 2016;
$ad->ad_views     = 30;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 2;
$ad->name         = 'Picnic Pants';
$ad->description  = "Innovative pants designed by Italian company transform into a
useful picnic table when a person sits in a cross-legged position.";
$ad->price        = 44.99;
$ad->image_url    = '/img/uploads/picnic-pants.png';
$ad->date_created = 6 / 26 / 2016;
$ad->ad_views     = 16;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 1;
$ad->name         = 'Shoe Umbrella Kit';
$ad->description  = "Don’t let the weather ruin your shoes again.
This Umbrella Shoe Saver invention will extend the life of your
expensive footwear by attaching little umbrellas to your feet.";
$ad->price        = 8.97;
$ad->image_url    = '/img/uploads/shoe-umbrellas.png';
$ad->date_created = 7 / 7 / 2016;
$ad->ad_views     = 3;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 1;
$ad->name         = 'Twirling Spaghetti Fork';
$ad->description  = "Twirling is a better way to eat spaghetti and the motorized fork
automatically winds up the pasta on the end of the fork.";
$ad->price        = 11.97;
$ad->image_url    = '/img/uploads/spaghetti-fork.png';
$ad->date_created = 7 / 17 / 2016;
$ad->ad_views     = 25;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 2;
$ad->name         = 'The Wizard of Oz Bookmark';
$ad->description  = "Clever and striking. The Wicked Witch’s poor sister’s legs stick out from the
book, perfectly marking your page. That’s right: your book is Dorothy’s house.";
$ad->price        = 10.00;
$ad->image_url    = '/img/uploads/wizard-bookmark.png';
$ad->date_created = 7 / 27 / 2016;
$ad->ad_views     = 19;
$ad->save();



$ad               = new Ad;
$ad->user_id      = 3;
$ad->name         = 'Testamints';
$ad->description  = "Testamints Spearmint Gum is an easy way to share your faith with a simple piece of gum.
Each package of gum contains 12 pieces of gum, and has a verse from God’s Word printed on the back.";
$ad->price        = 17.99;
$ad->image_url    = '/img/uploads/testamints.png';
$ad->date_created = 8 / 8 / 2016;
$ad->ad_views     = 38;
$ad->save();
