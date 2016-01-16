drop table if exists %prfx%member;
create table %prfx%member (
  mbrid integer auto_increment primary key
  ,barcode_nmbr varchar(20) not null
  ,create_dt datetime not null
  ,last_change_dt datetime not null
  ,last_change_userid integer not null
  ,last_name varchar(50) not null
  ,first_name varchar(50) not null
  ,address text null
  ,home_phone varchar(15) null
  ,work_phone varchar(15) null
  ,cel varchar(15) null
  ,email varchar(128) null
  ,foto varchar(128) null
  ,pass_user char(32) null
  ,born_dt date not null
  ,other text null
  ,classification smallint not null  
  ,is_active char(1) DEFAULT 'Y'
  ,last_activity_dt datetime NOT NULL
  )
  ENGINE=MyISAM DEFAULT CHARSET=utf8 ; 