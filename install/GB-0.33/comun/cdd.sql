drop table if exists %prfx%cdd;
create table %prfx%cdd (
   cdd_Bid integer auto_increment primary key
  ,cdd_Numero text null
  ,cdd_Descripcion text null
  ,cdd_Clave text null
  ,cdd_Table text null
    )
  ENGINE=MyISAM DEFAULT CHARSET=utf8
;
