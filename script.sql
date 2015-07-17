-- Banco de dados
create database visio;

-- tabelas
create table oftalmologistas(
    id int auto_increment primary key,
    nome varchar(50),
    email varchar(50),
    crmv varchar(10)
);

create table clinicas(
    id int auto_increment primary key,
    nome varchar(100),
    endereco varchar(100),
    numero int,
    complemento varchar(100),
    bairro varchar(50),
    cidade varchar(50),
    uf varchar(2),
    cep varchar(11),
    email varchar(50),
    telefone varchar(20)
);

create table proprietarios(
    id int auto_increment primary key,
    nome varchar(50),
    endereco varchar(100),
    numero int,
    complemento varchar(100),
    bairro varchar(50),
    cidade varchar(50),
    uf varchar(2),
    cep varchar(11),
    email varchar(50),
    telefone varchar(20)
);

create table pacientes(
    id int auto_increment primary key,
    nome varchar(50),
    data_nascimento date,
    especie varchar(50),
    raca varchar(50),
    sexo char,
    proprietario_id int
);

alter table pacientes
add constraint fk_pacientes_proprietarios foreign key (proprietario_id) references proprietarios(id);

create table consultas(
    id int auto_increment primary key,
    created date,
    oftalmologista_id int,
    clinica_id int,
    paciente_id int,
    historico text,
    reflexos_direto_d char,
    reflexos_direto_e char,
    reflexos_consensual_d char,
    reflexos_consensual_e char,
    reflexos_ameaca_d char,
    reflexos_ameaca_e char,
    schirmer_d int,
    schirmer_e int,
    aplan_d int,
    aplan_e int,
    palpebras_d text,
    palpebras_e text,
    aparelho_lacrimal_d text,
    aparelho_lacrimal_e text,
    conjuntiva_d text,
    conjuntiva_e text,
    cornea_d text,
    cornea_e text,
    fluoresceina_d char,
    fluoresceina_e char,
    jones_d char,
    jones_e char,
    camara_ant_angu_drenagem_d text,
    camara_ant_angu_drenagem_e text,
    pupila_iris_d text,
    pupila_iris_e text,
    lente_d text,
    lente_e text,
    fundo_vitreo_d text,
    fundo_vitreo_e text,
    diagnostico text,
    tratamento text,
    tipo_consulta char
);

alter table consultas
add constraint fk_consultas_oftalmologistas foreign key (oftalmologista_id) references oftalmologistas(id);

alter table consultas
add constraint fk_consultas_clinicas foreign key (clinica_id) references clinicas(id);

alter table consultas
add constraint fk_consultas_pacientes foreign key (paciente_id) references pacientes(id);

create table users(
    id int auto_increment primary key,
    username varchar(50),
    password varchar(255),
    role int,
    oftalmologista_id int
);

alter table users
add constraint fk_users_oftalmologista foreign key (oftalmologista_id) references oftalmologistas(id);

create table servicos(
    id int auto_increment primary key,
    descricao varchar(100),
    valor float,
    consulta_id int
);

alter table servicos
add constraint fk_servicos_consultas foreign key (consulta_id) references consultas(id);
