create table clie(
    clie_codi integer NOT NULL PRIMARY KEY AUTO_INCREMENT, /*mysql*/
    -- clie_codi serial PRIMARY KEY, /*postgres*/ 
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

create table tick(
    tick_ID integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
    -- tick_ID serial PRIMARY KEY, /*postgres*/ 
    tick_titulo varchar(100),
    tick_cliente integer,
    tick_responsavel varchar(100),
    tick_situacao varchar(50),
    tick_descricao text,
    tick_prioridade integer,
    tick_criacao Date,
    tick_departamento varchar(100)
);

alter table tick ADD CONSTRAINT tick_cliente FOREIGN KEY (tick_cliente) REFERENCES clie(clie_codi);

create table user(
    user_id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
    -- user_ID serial PRIMARY KEY, /*postgres*/
    user_login varchar(100),
    user_password varchar(100),
    user_nome varchar(150),
    user_email varchar(100)
)
