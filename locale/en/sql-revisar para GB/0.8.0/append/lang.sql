insert ignore into %prfx%lang set id='en', description = 'english', charset='utf-8', default_flg=DEFAULT
       ON DUPLICATE KEY UPDATE description = 'english', charset='utf-8';


