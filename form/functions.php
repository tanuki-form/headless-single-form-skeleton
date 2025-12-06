<?php

function getConfig($name){
  return include __DIR__ . "/config/{$name}.php";
}
