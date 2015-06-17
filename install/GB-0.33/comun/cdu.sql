drop table if exists %prfx%cdu;
create table %prfx%cdu (
   cdu_Bid integer auto_increment primary key
  ,cdu_Numero text null
  ,cdu_Descripcion text null
  ,cdu_Clave text null
  ,cdu_Table text null
    )
  ENGINE=MyISAM DEFAULT CHARSET=utf8
;
