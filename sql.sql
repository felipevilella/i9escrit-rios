-- MySQL Script generated by MySQL Workbench
-- Sun Sep 23 21:24:52 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `usuario` VARCHAR(90) NULL,
  `senha` VARCHAR(45) NULL,
  `primeiro_acesso` INT NULL,
  `prioriedade` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Projeto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Projeto` (
  `idProjeto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `categoria` VARCHAR(45) NULL,
  `palavrachave` VARCHAR(200) NULL,
  `data` DATE NULL,
  `descricao` VARCHAR(200) NULL,
  `objetivo` VARCHAR(100) NULL,
  PRIMARY KEY (`idProjeto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Video`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Video` (
  `idVideo` INT NOT NULL AUTO_INCREMENT,
  `urlvideo` VARCHAR(45) NULL,
  `fk_idProjeto` INT NOT NULL,
  PRIMARY KEY (`idVideo`),
  INDEX `fk_Video_Projeto1_idx` (`fk_idProjeto` ASC) VISIBLE,
  CONSTRAINT `fk_Video_Projeto1`
    FOREIGN KEY (`fk_idProjeto`)
    REFERENCES `mydb`.`Projeto` (`idProjeto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Integrantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Integrantes` (
  `idIntegrantes` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `fk_idProjeto` INT NOT NULL,
  PRIMARY KEY (`idIntegrantes`),
  INDEX `fk_Integrantes_Projeto_idx` (`fk_idProjeto` ASC) VISIBLE,
  CONSTRAINT `fk_Integrantes_Projeto`
    FOREIGN KEY (`fk_idProjeto`)
    REFERENCES `mydb`.`Projeto` (`idProjeto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Evento` (
  `idEvento` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `url` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `aprovacao` VARCHAR(45) NULL,
  `ativo` VARCHAR(45) NULL,
  PRIMARY KEY (`idEvento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`fotos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`fotos` (
  `idfotos` INT NOT NULL AUTO_INCREMENT,
  `caminho_foto` VARCHAR(45) NULL,
  `ativo` INT NULL,
  `fk_idProjeto` INT NOT NULL,
  `fk_idEvento` INT NOT NULL,
  PRIMARY KEY (`idfotos`),
  INDEX `fk_fotos_Projeto1_idx` (`fk_idProjeto` ASC) VISIBLE,
  INDEX `fk_fotos_Evento1_idx` (`fk_idEvento` ASC) VISIBLE,
  CONSTRAINT `fk_fotos_Projeto1`
    FOREIGN KEY (`fk_idProjeto`)
    REFERENCES `mydb`.`Projeto` (`idProjeto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fotos_Evento1`
    FOREIGN KEY (`fk_idEvento`)
    REFERENCES `mydb`.`Evento` (`idEvento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Documento` (
  `idDocumento` INT NOT NULL AUTO_INCREMENT,
  `caminho_documento` VARCHAR(45) NULL,
  `fk_idProjeto` INT NOT NULL,
  PRIMARY KEY (`idDocumento`),
  INDEX `fk_Documento_Projeto1_idx` (`fk_idProjeto` ASC) VISIBLE,
  CONSTRAINT `fk_Documento_Projeto1`
    FOREIGN KEY (`fk_idProjeto`)
    REFERENCES `mydb`.`Projeto` (`idProjeto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuarios_Projeto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios_Projeto` (
  `Usuarios_idUsuario` INT NOT NULL,
  `Projeto_idProjeto` INT NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuario`, `Projeto_idProjeto`),
  INDEX `fk_Usuarios_has_Projeto_Projeto1_idx` (`Projeto_idProjeto` ASC) VISIBLE,
  INDEX `fk_Usuarios_has_Projeto_Usuarios1_idx` (`Usuarios_idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_Usuarios_has_Projeto_Usuarios1`
    FOREIGN KEY (`Usuarios_idUsuario`)
    REFERENCES `mydb`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuarios_has_Projeto_Projeto1`
    FOREIGN KEY (`Projeto_idProjeto`)
    REFERENCES `mydb`.`Projeto` (`idProjeto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Solicitacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Solicitacao` (
  `idSolicitacao` INT NOT NULL AUTO_INCREMENT,
  `ativo` INT NULL,
  `url` VARCHAR(45) NULL,
  `criptografia` VARCHAR(45) NULL,
  `fk_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idSolicitacao`),
  INDEX `fk_Solicitacao_Usuarios1_idx` (`fk_idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_Solicitacao_Usuarios1`
    FOREIGN KEY (`fk_idUsuario`)
    REFERENCES `mydb`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`funcionamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`funcionamento` (
  `idfuncionamento` INT NOT NULL AUTO_INCREMENT,
  `horario_incio` VARCHAR(45) NULL,
  `horario_terminio` VARCHAR(45) NULL,
  `data_inicio` VARCHAR(45) NULL,
  `data_terminio` VARCHAR(45) NULL,
  `fk_idEvento` INT NOT NULL,
  PRIMARY KEY (`idfuncionamento`),
  INDEX `fk_funcionamento_Evento1_idx` (`fk_idEvento` ASC) VISIBLE,
  CONSTRAINT `fk_funcionamento_Evento1`
    FOREIGN KEY (`fk_idEvento`)
    REFERENCES `mydb`.`Evento` (`idEvento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Evento_Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Evento_Usuarios` (
  `Evento_idEvento` INT NOT NULL,
  `Usuarios_idUsuario` INT NOT NULL,
  PRIMARY KEY (`Evento_idEvento`, `Usuarios_idUsuario`),
  INDEX `fk_Evento_has_Usuarios_Usuarios1_idx` (`Usuarios_idUsuario` ASC) VISIBLE,
  INDEX `fk_Evento_has_Usuarios_Evento1_idx` (`Evento_idEvento` ASC) VISIBLE,
  CONSTRAINT `fk_Evento_has_Usuarios_Evento1`
    FOREIGN KEY (`Evento_idEvento`)
    REFERENCES `mydb`.`Evento` (`idEvento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_has_Usuarios_Usuarios1`
    FOREIGN KEY (`Usuarios_idUsuario`)
    REFERENCES `mydb`.`Usuarios` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
