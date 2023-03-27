<?php
    class Box {
        // Properties
        public $name;
        public $price;
        public $height;
        public $width;
        public $depth;
        public $description;
        public $image;

        // Methods 
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }

        function set_price($price) {
            $this->price = $price;
        }
        function get_price() {
            return $this->price;
        }

        function set_height($height) {
            $this->height = $height;
        }
        function get_height() {
            return $this->height;
        }

        function set_width($width) {
            $this->width = $width;
        }
        function get_width() {
            return $this->width;
        }

        function set_depth($depth) {
            $this->depth = $depth;
        }
        function get_depth() {
            return $this->depth;
        }

        function set_description($description) {
            $this->description = $description;
        }
        function get_description() {
            return $this->description;
        }

        function set_image($image) {
            $this->image = $image;
        }
        function get_image() {
            return $this->image;
        }
    }

    $box1 = new Box();
    $box2 = new Box();
    $box3 = new Box();
    $box4 = new Box();
    $box5 = new Box();
    $box6 = new Box();
    $box7 = new Box();

    $box1->set_name('Mobillåda');
    $box2->set_name('Flyttlåda');
    $box3->set_name('Datorlåda');
    $box4->set_name('Matlåda');
    $box5->set_name('Kattlåda');
    $box6->set_name('Överaskningslåda');
    $box7->set_name('Virtuell låda');

    $box1->set_price('349');
    $box2->set_price('189');
    $box3->set_price('259');
    $box4->set_price('79');
    $box5->set_price('489');
    $box6->set_price('569');
    $box7->set_price('1089');

    $box1->set_height('300');
    $box2->set_height('500');
    $box3->set_height('800');
    $box4->set_height('250');
    $box5->set_height('500');
    $box6->set_height('600');
    $box7->set_height('10');

    $box1->set_width('250');
    $box2->set_width('1000');
    $box3->set_width('400');
    $box4->set_width('900');
    $box5->set_width('500');
    $box6->set_width('400');
    $box7->set_width('200');

    $box1->set_depth('300');
    $box2->set_depth('700');
    $box3->set_depth('500');
    $box4->set_depth('400');
    $box5->set_depth('300');
    $box6->set_depth('600');
    $box7->set_depth('200');

    $box1->set_description('En prima låda för att förvara dina mobiler i när du vill slippa undan bomberna.');
    $box2->set_description('Perfekt för att flytta dina lådor i.');
    $box3->set_description('Klart din dator ska ha en låda.');
    $box4->set_description('Någonstans måste du ju förvara din mat.');
    $box5->set_description('Lägg katten i en låda och slipp den.');
    $box6->set_description('För dig som vill ha utökad spänning i vardagen.');
    $box7->set_description('En virtuell låda för den trångbodde.');

    $box1->set_image('bilder/box.jpg');
    $box2->set_image('bilder/box.jpg');
    $box3->set_image('bilder/box.jpg');
    $box4->set_image('bilder/box.jpg');
    $box5->set_image('bilder/box.jpg');
    $box6->set_image('bilder/box.jpg');
    $box7->set_image('bilder/box.jpg');

    $boxes = [$box1, $box2, $box3, $box4, $box5, $box6, $box7];
?>