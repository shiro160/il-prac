<?php

$q = "Tyhgq9myXyFXFkJ4nAAqgpUgHNXEYvjwRekpHKvqzmnqPThWbUuwhKiNvDtVTJpnJMayzCi3tHmJxEyW2MCKrq7RnT43g2csE";

$ans = substr_replace($q, "#", 40,1);

echo "問題：" .$q;
echo "<br>";
echo "出力：" .$ans;