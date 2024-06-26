<?php
/*
Localiza y corrige los errores de este programa PHP:
```php
<? php
echo '¿Cómo estás';
echo 'Estoy bien, gracias.';
??>
```
**/
?>

<?php
/*SOLUCIÓN:
La etiqueta de cierre es incorrecta. Sólo se cierra con una interrogación. Para una mejor
legibilidad he añadido un salto de línea. También he añadido la secuencia de escape \ para que
aparezcan las comillas simples.
Resultado:
*/

echo '\'¿Cómo estás?\'<br/>';
echo '\'Estoy bien, gracias.\'';
?>

