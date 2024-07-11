-- MySQL Script generated
-- Sun Jul  7 00:35:58 2024

-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `email` VARCHAR(250) NOT NULL,
  `senha` VARCHAR(250) NOT NULL,
  `dataCriacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Situacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Situacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sala` ENUM('0', '1', '2', '3', '4') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Quiz`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Quiz` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(250) NOT NULL,
  `codigoAcesso` INT NOT NULL,
  `capacidadeMaxima` INT NULL,
  `tempoLimite` TIME NULL,
  `fk_criador` INT NOT NULL,
  `fk_situacao` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Quiz_Usuario`
    FOREIGN KEY (`fk_criador`)
    REFERENCES `mydb`.`Usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Quiz_Situacao1`
    FOREIGN KEY (`fk_situacao`)
    REFERENCES `mydb`.`Situacao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Participacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Participacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pontuacao` INT NULL,
  `data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `fk_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Participacao_Usuario1`
    FOREIGN KEY (`fk_usuario`)
    REFERENCES `mydb`.`Usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pergunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Pergunta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `texto` TEXT NOT NULL,
  `imagem` VARCHAR(250) NULL,
  `fk_quiz` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Pergunta_Quiz1`
    FOREIGN KEY (`fk_quiz`)
    REFERENCES `mydb`.`Quiz` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Resposta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Resposta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(250) NULL,
  `fk_pergunta` INT NOT NULL,
  `fk_participacao` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Resposta_Pergunta1`
    FOREIGN KEY (`fk_pergunta`)
    REFERENCES `mydb`.`Pergunta` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Resposta_Participacao1`
    FOREIGN KEY (`fk_participacao`)
    REFERENCES `mydb`.`Participacao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
