# css-optimizer
PHP CSS Optimizer

###Özellikler

- Sıkıştırma
- Birleştirme
- Sayfaya dahil etme

(Local yada uzak sunucudaki cssleri beraber kullanabilirsiniz)

###Kullanımı

```php
include '../class.cssoptimizer.php';

$optimize = new cssOptimizer;
$cssListe = array(
	'/css/reset.css',
	'/css/main.css',
	'/css/hatali.css',
	'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.css'
);

$optimize->optimize($cssListe);
```
Sunucu içinde mevcut olmayan cssler için hata vermez. (ör: hatali.css)
