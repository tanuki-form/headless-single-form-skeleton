<?php

function getOptions($name){
  return include __DIR__ . "/config/{$name}.php";
}
