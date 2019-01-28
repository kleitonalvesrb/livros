Create database if not exists livros;

CREATE TABLE IF NOT EXISTS usuario (
  idusuario INT NOT NULL,
  usunome VARCHAR(70) NOT NULL,
  ususenha VARCHAR(32) NOT NULL,
  usulogin VARCHAR(45) NOT NULL,
  PRIMARY KEY (idusuario));


-- -----------------------------------------------------
-- Table mydb.livro
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS livro (
  idlivro INT NOT NULL,
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