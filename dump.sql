create table clie(
    clie_codi integer NOT NULL PRIMARY KEY, 
    clie_nome varchar(150), 
    clie_emai varchar(100), 
    clie_nofa varchar(150), 
    clie_tele varchar(14), 
    clie_cnpj varchar(14), 
    clie_tipo varchar(10),
    clie_situ boolean, 
    clie_dtco Date,
    clie_logr varchar(100),
    clie_nume integer,
    clie_bair varchar(100),
    clie_copl varchar(50),
    clie_cida varchar(100),
    clie_esta char(2),
    clie_obse varchar(300)
);
