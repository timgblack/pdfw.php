<?php
namespace pdfw\Fonts;

class Symbol extends FontDefinition {
  public $object = new Dictionary([
    'Type' => new Name('Font'),
    'BaseFont' => new Name('Symbol'),
    'Subtype' => new Name('Type1'),
    'Encoding' => new Name('StandardEncoding')
  ]);
  public $fontWidths = [];

  private static $widths = [
    0 => [127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,240,255],
    167 => 164,
    200 => 124,
    247 => 162,
    250 => [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,44,46,215],
    274 => 242,
    278 => [47,58,59],
    329 => [105,225,241],
    333 => [33,40,41,73,91,93],
    384 => [230,231,232,233,234,235,246,247,248,249,250,251],
    400 => 176,
    411 => [103,178],
    439 => [39,86,101,116],
    444 => 63,
    460 => 183,
    480 => [123,125],
    493 => 120,
    494 => [100,122,182,224,236,237,238,239,252,253,254],
    500 => [35,42,48,49,50,51,52,53,54,55,56,57,95,96,166],
    521 => [102,110,113],
    549 => [36,43,45,60,61,62,64,98,99,107,108,111,112,114,126,163,177,179,180,184,185,186,187,214],
    556 => 82,
    576 => [109,117],
    592 => 83,
    603 => [71,104,106,115,173,175,189,217,218,221,223],
    611 => [69,84,90],
    612 => 68,
    620 => 161,
    631 => [74,97],
    645 => 88,
    658 => [94,191],
    667 => 66,
    686 => [76,119,121,193,243,244,245],
    690 => 85,
    713 => [34,118,165,181,201,202,203,204,205,206,207,209,216,229],
    722 => [65,67,72,75,78,79],
    741 => 81,
    750 => 160,
    753 => [167,168,169,170],
    763 => 70,
    768 => [80,87,196,197,199,200,208],
    778 => 38,
    786 => 228,
    790 => [210,211,226,227],
    795 => [89,194],
    823 => [192,198,213],
    833 => 37,
    863 => 92,
    889 => 77,
    890 => 212,
    987 => [172,174,195,220,222],
    1000 => [188,190],
    1042 => [171,219],
  ];

  public function __construct() {
    foreach(static::widths as $width => $characters) {
      if (typeof($characters) == 'array') {
        foreach ($characters as $character) {
          $this->$fontWidths[chr($character)] = $width;
        }
      } else {
        $this->$fontWidths[chr($characters)] = $width;
      }
    }
}
