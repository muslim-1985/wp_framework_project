<?php
/*
Plugin Name: New widget
Plugin URI: http://www.example.com/textwidget
Description: An example plugin to demonstrate widgets API in WordPress
Version: 0.1
Author: Muslim
Author URI: http://www.utfork.ru
License: GPL2

    Copyright 2011 Author Name

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License,
    version 2, as published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/
add_action("widgets_init",function () {
  register_widget("TextWiget");
});
class TextWiget extends WP_Widget
{

  function __construct()
  {
    parent::__construct("text_widget", "New widget", array(
      "description"=>"Новый виджет темы"
    ));
  }

  public function form($instance) {
    $title = "";
    $text = "";
    $link = "";
    if(!empty($instance)){
      $title = $instance["title"];
      $text = $instance["text"];
      $link = $instance["link"];
    }
    $tableId = $this->get_field_id("title");
    $tableName = $this->get_field_name("title");
    echo '<label for="' . $tableId . '">Заголовок</label><br>';
    echo '<input id="' . $tableId . '" type="text" name="' .
    $tableName . '" value="' . $title . '"><br>';

    $textId = $this->get_field_id("text");
    $textName = $this->get_field_name("text");
    echo '<label for="' . $textId . '">Tекст</label><br>';
    echo '<textarea id="' . $textId . '" name="' . $textName .
    '">' . $text . '</textarea>';

    $linkId = $this->get_field_id("link");
    $linkName = $this->get_field_name("link");
    echo '<label for="' . $linkId . '">Ссылка</label><br>';
    echo '<input id="' . $linkId . '" type="text" name="' .
    $linkName . '" value="' . $link . '"><br>';
  }

  public function update($newInstance, $oldInstance) {
    $values = array();
    $values["title"] = htmlentities($newInstance["title"]);
    $values["text"] = htmlentities($newInstance["text"]);
    $values["link"] = htmlentities($newInstance["link"]);
    return $values;
}

public function widget($args, $instance) {
    $title = $instance["title"];
    $text = $instance["text"];
    $link = $instance["link"];

    echo "<h4>$title</h4>";
    echo "<p>$text</p>";
    echo "<p><br/><a href='$link' class='btn btn-theme'>More Info</a></p>";
}
}
