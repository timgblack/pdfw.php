<?php
namespace pdfw\Fonts;
use pdfw\Types\Dictionary;
use pdfw\Types\Name;

class HelveticaBoldOblique extends FontDefinition {
  public $fontWidths = [];

  private static $widths = [
    238 => 39,
    278 => [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,44,46,47,73,92,105,106,108,130,145,146,160,183,204,205,206,207,236,237,238,239],
    280 => [124,166],
    333 => [33,40,41,45,58,59,91,93,96,102,116,136,139,152,155,161,168,173,175,178,179,180,184,185],
    350 => [127,129,141,143,144,149,157],
    365 => 186,
    370 => 170,
    389 => [42,114,123,125],
    400 => 176,
    474 => 34,
    500 => [122,132,147,148,158],
    556 => [35,36,48,49,50,51,52,53,54,55,56,57,74,95,97,99,101,107,115,118,120,121,128,131,134,135,150,154,162,163,164,165,167,171,182,187,224,225,226,227,228,229,231,232,233,234,235,253,255],
    584 => [43,60,61,62,94,126,172,177,215,247],
    611 => [63,70,76,84,90,98,100,103,104,110,111,112,113,117,142,181,191,223,240,241,242,243,244,245,246,248,249,250,251,252,254],
    667 => [69,80,83,86,88,89,138,159,200,201,202,203,221,222],
    722 => [38,65,66,67,68,72,75,78,82,85,192,193,194,195,196,197,199,208,209,217,218,219,220],
    737 => [169,174],
    778 => [71,79,81,119,210,211,212,213,214,216],
    833 => 77,
    834 => [188,189,190],
    889 => [37,109,230],
    944 => [87,156],
    975 => 64,
    1000 => [133,137,140,151,153,198],
  ];

  public function __construct() {
    $object = new Dictionary([
      'Type' => new Name('Font'),
      'BaseFont' => new Name('Helvetica-BoldOblique'),
      'Subtype' => new Name('Type1'),
      'Encoding' => new Name('StandardEncoding')
    ]);
    foreach(static::$widths as $width => $characters) {
      if (gettype($characters) == 'array') {
        foreach ($characters as $character) {
          $this->$fontWidths[chr($character)] = $width;
        }
      } else {
        $this->$fontWidths[chr($characters)] = $width;
      }
    }
  }
}
