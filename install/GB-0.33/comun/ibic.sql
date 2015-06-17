drop table if exists %prfx%ibic;
create table %prfx%ibic (
   ibic_Bid integer auto_increment primary key
  ,ibic_Numero text null
  ,ibic_Descripcion text null
  ,ibic_Clave text null
  ,ibic_Table text null
    )
  ENGINE=MyISAM DEFAULT CHARSET=utf8
;
