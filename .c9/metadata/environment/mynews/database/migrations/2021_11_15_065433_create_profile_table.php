{"filter":false,"title":"2021_11_15_065433_create_profile_table.php","tooltip":"/mynews/database/migrations/2021_11_15_065433_create_profile_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":16,"column":13},"end":{"row":17,"column":33},"action":"remove","lines":["table->bigIncrements('id');","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":13},"end":{"row":21,"column":33},"action":"insert","lines":["$table->bigIncrements('id');","            $table->string('name');","            $table->string('gender');","            $table->string('hobby');","            $table->string('introduction');","            $table->timestamps();"]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["$"],"id":3}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":31},"action":"insert","lines":["php artisan migrate"],"id":4}]]},"ace":{"folds":[],"scrolltop":180,"scrollleft":0,"selection":{"start":{"row":15,"column":12},"end":{"row":15,"column":12},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":10,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1636959319956,"hash":"17d13d99eb4f46fc4bcb4df60797a480ed60c56b"}