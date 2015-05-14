Esto inicia el servidor para ejecutar laravel
php -S localhost:8888 -t public



Para crear un archivo en database
esto le da el formato con id y el timestamps y el down
php artisan make:migration nombre_clase --table="tabla"
esto no le da formato
php artisan make:migration nombre_clase

Para migar 
php artisan migrate

Para revertir el migrar
php artisan migrate:rollback

Para generar un modelo
php artisan make:model nombre_modelo

Pasar datos desde el CMD con composer
php artisan tinker para utilziar tenemos que tener un modelo

Primero creamos un new App
$article  = new App\Article
para ver $article;
para pasar datos tal y como esta en la base
$article->title='';
para poner fechas $article=published_at = Carbon\Carbon::now();
para ver los datos que hemos pasados como array
$article->toArray
y para grabar en la tabla
$article->save
para listar todos los datos de la tabla
App\Article::all();
y para listar todos los datos de la tabla en array
App\Article::all()->toArray();
Para buscar datos en la tabla
$article = App\Article::find(1);
Si necesitamos actualizar algun campo
mientras estemos con new lo podemos hacer
$article->campo='datos';
$article->save();

para crear de una manera mas sencilla registros en la tabla
$article = App\Article::create(['title' => 'Probando', 'body' => 'Probando body', 'published_at' => Carbon\Carbon::now()]);
 no olvidar de poner protected $fillable= [ '','',''];

Necesario ejecutarlo en la raiz de tu proyecto
 composer require illuminate/html