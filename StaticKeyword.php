<!--  Nama : Jeremy Fatric M. Pardede
      Nim  : 13321031
      Prodi: D3TK02 -->

      
<?php
class ExmStatic{
    public static $n = 0;
    public static function string(){
        $str = "Little Dog". self:: $n++;
        return $str;
    }
}

echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
?>