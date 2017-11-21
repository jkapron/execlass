<?php

namespace Jkapron\Execlass;

class Execlass {

  var $commandLine;
  var $resultCode = 0;
  var $output = array();
  
  public static function withCommandLine( $commandLine ) {
    return new Exec( $commandLine) ;
  }
  
  function __construct( $commandLine ) {
    $this->commandLine = $commandLine;
  }
  
  public function launch() {
    exec($this->commandLine, $this->output, $this->resultCode);
    return $this;
  }
  
  public function getCommandLine() {
    return $this->commandLine;
  }
  
  public function getResultCode() {
    return $this->resultCode;
  }
  
  public function getOutput() {
    return $this->output;
  }
  
}
