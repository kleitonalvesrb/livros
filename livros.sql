Create database if not exists livros;

CREATE TABLE IF NOT EXISTS usuario (
  idusuario INT NOT NULL AUTO_INCREMENT,
  usunome VARCHAR(70) NOT NULL,
  ususenha VARCHAR(32) NOT NULL,
  usulogin VARCHAR(45) NOT NULL,
  PRIMARY KEY (idusuario));


-- -----------------------------------------------------
-- Table mydb.livro
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS livro (
  idlivro INT NOT NULL AUTO_INCREMENT,
  isbn VARCHAR(13) NOT NULL,
  nomelivro VARCHAR(100) NOT NULL,
  autorlivro VARCHAR(100) NOT NULL,
  editora VARCHAR(75) NOT NULL,
  genero VARCHAR(45) NULL,
  paginas INT NULL,
  capa VARCHAR(255) NULL,
  PRIMARY KEY (idlivro));

-- -----------------------------------------------------
-- Table mydb.livros_lidos
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS livros_lidos (
  usuario_idusuario INT NOT NULL,
  livro_idlivro INT NOT NULL,
  nota INT NULL,
  status TINYINT NULL DEFAULT 1,
  PRIMARY KEY (usuario_idusuario, livro_idlivro),
  INDEX fk_usuario_has_livro_livro1_idx (livro_idlivro ASC),
  INDEX fk_usuario_has_livro_usuario_idx (usuario_idusuario ASC),
  CONSTRAINT fk_usuario_has_livro_usuario
    FOREIGN KEY (usuario_idusuario)
    REFERENCES usuario (idusuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_usuario_has_livro_livro1
    FOREIGN KEY (livro_idlivro)
    REFERENCES livro (idlivro)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

insert into usuario (usunome,ususenha,usulogin) values('Kleiton Batista','010203','kleitonbatista');
insert into usuario (usunome,ususenha,usulogin) values('Guilherme Peres','010203','guilherme');
insert into usuario (usunome,ususenha,usulogin) values('Jessica Silva','123456','Jessica');
insert into usuario (usunome,ususenha,usulogin) values('Renata Mendes','123456','Renata');
insert into usuario (usunome,ususenha,usulogin) values('Franklin Silva','123456','fsilva');
insert into usuario (usunome,ususenha,usulogin) values('Igor Medeiros','123456','igor');
insert into usuario (usunome,ususenha,usulogin) values('Thiago Frinhanhi','123456','thiago');
insert into usuario (usunome,ususenha,usulogin) values('Gustavo Alencar','123456','galencar');
insert into usuario (usunome,ususenha,usulogin) values('Matheus Aguiar','123456','matheus');
insert into usuario (usunome,ususenha,usulogin) values('Ana Carolina','123456','Carolina');
insert into usuario (usunome,ususenha,usulogin) values('Ana Luiza','123456','AnaLu');
insert into usuario (usunome,ususenha,usulogin) values('Maria Carolina','123456','Carol');
insert into usuario (usunome,ususenha,usulogin) values('Humberto Dias','123456','Bertin');
insert into usuario (usunome,ususenha,usulogin) values('Leonardo Souza','123456','Leo');

insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9571234783947','Use a cabeça','Deitel','Livre','Didático',546,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('2423423423413','A sutil arde de ligar o f*da-se','Fonseca Guilherme','Pearson','Auto Ajuda',445,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9574454232456','João e Maria','Amadeu Dutra Moresi','Grupo planeta','infantil',56,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('8794367986248','Crepusculo','Hartman Vilson','Random House','terror',1221,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('4245653452424','500 dias de cativeiro','Batista Thiago','Cengage','terror',453,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9675675646746','A última noite','Gog Shwevwiger','Cengage','romance',340,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9356353563456','500 dias com ela','Persin Van','Wiley','romance',323,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9356345665364','A culpa é das estrelas','Nedved A. Vidale','Kodansha','romance',423,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('7654235236765','Da Vinci Code','Junior Ney Matias','Kodansha','suspense',113,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9555655563344','Alibaba','Castro Alves','Livre','suspense',421,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('6456345634565','De volta para casa','Persi Jacks','Cengage','suspense',212,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('1244554232223','E tudo se acabou','Shwegerr W. W. Bush','Futura','Drama',444,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9654356345778','Aí já era','Van Nister','Futura','Drama',231,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('2134123412354','Uma história original','Villa Lobos','Harper Collins','Drama',123,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('3245234523423','Vida após a morte','Andre Castro','Kardec','Religioso',111,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('5242543434534','De onde viemos?','Castro Alves','Kardec','Religioso',120,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('5252365234534','O sapinho na Lavoura','Ricardo Wagner','Harper Collins','infantil',78,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9575254524524','Pense voce mesmo','Mendes Alameda','Gakken','Auto ajuda',109,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9572452345324','Core Java','Mariano Rodrigues','Gakken','Didático',546,'caminho');
insert into livro (isbn,nomelivro,autorlivro,editora,genero,paginas,capa) values('9571234742424','Use a cabeça 2','Cristiano Mendes Alameda','Bonnier','Didático',497,'caminho');


insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,1,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,10,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,20,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,3,5,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,4,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,7,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(1,17,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(2,1,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(2,3,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(2,7,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(2,5,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,4,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,3,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,6,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,1,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,14,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,13,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,12,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,11,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(10,1,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(10,2,5,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(10,3,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(11,4,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(14,2,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(11,4,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(12,5,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(11,6,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(9,5,5,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(9,2,0,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(9,9,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(9,10,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(9,11,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(8,12,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(8,13,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(8,13,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(8,11,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(8,10,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(5,13,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(5,20,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(5,19,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,18,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,17,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,13,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,14,4,true);

insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,11,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,12,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(6,19,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,20,5,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(5,13,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(8,4,0,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(9,4,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(11,7,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(12,17,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(12,12,5,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(12,19,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(6,18,4,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(5,12,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(7,10,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(14,9,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(13,4,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(12,3,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(11,20,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(5,11,2,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,10,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(4,5,5,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(3,1,1,true);



insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(6,1,1,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(6,2,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(6,3,3,true);
insert into livros_lidos (usuario_idusuario,livro_idlivro,nota,status) values(6,10,3,true);


