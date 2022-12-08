CREATE DATABASE ESCOLA;
USE ESCOLA;

/*Criação das Tabelas*/
CREATE TABLE IF NOT EXISTS Departamento(
	Cod_departamento int,
	Nome_departamento varchar(45),
PRIMARY KEY (Cod_departamento)
);

CREATE TABLE IF NOT EXISTS Professor(
	Cod_professor int,
	Nome_professor varchar(45),
	Sobre_nomeprofessor varchar(45),
    status varchar(45),
	Departamento_Cod_departamento int,
PRIMARY KEY (Cod_professor),
/*Chaves estrangeira*/
FOREIGN KEY (Departamento_Cod_departamento) REFERENCES Departamento(Cod_departamento));

CREATE TABLE IF NOT EXISTS Curso(
	Cod_curso int,
	Nome_curso varchar(45),
	Departamento_Cod_departamento int,
PRIMARY KEY (Cod_curso),

/*Chaves estrangeira*/
FOREIGN KEY (Departamento_Cod_departamento) REFERENCES Departamento(Cod_departamento));

CREATE TABLE IF NOT EXISTS Turma(
	Cod_turma int,
    Data_inicio date,
    Data_fim date,
    Num_aluno int,
    periodo int,
    Turma_Cod_curso int,
PRIMARY KEY (Cod_turma),
    
 /*Chaves estrangeira*/   
FOREIGN KEY (Turma_Cod_curso) REFERENCES Curso(Cod_curso)
);

CREATE TABLE IF NOT EXISTS Aluno(
	RA int,
    Nome_aluno varchar(45),
    Sobrenome_aluno varchar(45),
    Sexo varchar(45),
    CPF int,
    Endereco varchar(80),
    Rua varchar(40),
    Num int(40),
	CEP int(8),
    Filiacao varchar(45),
    Status varchar(20),
    Turma_Cod_turma int,
    Curso_Cod_Curso int,
    Contato int,
    Telefone int,
    
PRIMARY KEY(RA),
 
 /*Chaves estrangeira*/  
FOREIGN KEY (Turma_Cod_turma) REFERENCES Turma(Cod_turma),
FOREIGN KEY (Curso_Cod_curso) REFERENCES Curso(Cod_curso)
);

CREATE TABLE IF NOT EXISTS Disciplina(
	Cod_disciplina int,
    Nome_disciplina varchar(45),
	Descricao varchar(45),
	Num_Alunos int,
    Departamento_Cod_departamento int,
PRIMARY KEY (Cod_disciplina),

/*Chaves estrangeira*/
FOREIGN KEY (Departamento_Cod_departamento) REFERENCES Departamento(Cod_departamento));

CREATE TABLE IF NOT EXISTS Historico(
	Cod_historico int,
	Periodo_realizacao int,
    RA_RA_Aluno int,
PRIMARY KEY (Cod_historico),

/*Chaves estrangeira*/
FOREIGN KEY (RA_RA_Aluno) REFERENCES Aluno(RA));

/*Chaves Estrageiras- Ligação das Tabelas*/
CREATE TABLE IF NOT EXISTS Prof_Disciplina (
	Prof_Cod_professor int,
	Disciplina_Cod_disciplina int,
/*Chaves estrangeira*/
FOREIGN KEY (Prof_Cod_professor) REFERENCES professor(Cod_professor),
FOREIGN KEY (Disciplina_Cod_disciplina) REFERENCES Disciplina(Cod_disciplina));

CREATE TABLE IF NOT EXISTS Curso_Disciplina (
	Disciplina_Cod_disciplina int,
    Curso_Cod_curso int,
    
/*Chaves estrangeira*/
FOREIGN KEY (Disciplina_Cod_disciplina) REFERENCES Disciplina(Cod_disciplina),
FOREIGN KEY (Curso_Cod_curso) REFERENCES Curso(Cod_curso));

CREATE TABLE IF NOT EXISTS Aluno_Disc (
    Aluno_Cod_aluno int,
    Disc_Cod_disciplina int,
	
/*Chaves estrangeira*/
FOREIGN KEY (Aluno_Cod_aluno) REFERENCES Aluno(RA),
FOREIGN KEY (Disc_Cod_disciplina) REFERENCES Disciplina(Cod_disciplina));

CREATE TABLE IF NOT EXISTS Disc_Hist(
	Frequencia int,
    Nota double,
    Historico_Cod_historico int,
    Disciplina_Cod_disciplina int,
	
/*Chaves estrangeira*/
FOREIGN KEY (Historico_Cod_historico) REFERENCES Historico(Cod_historico),
FOREIGN KEY (Disciplina_Cod_disciplina) REFERENCES Disciplina(Cod_disciplina));




