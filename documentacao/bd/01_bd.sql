-- MySQL Script generated by MySQL Workbench
-- Thu Sep  5 20:52:21 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema evento
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema evento
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `evento` DEFAULT CHARACTER SET utf8 ;
USE `evento` ;

-- -----------------------------------------------------
-- Table `evento`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`cursos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`autores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`autores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `cpf` VARCHAR(13) NOT NULL,
  `instituicao_ensino` VARCHAR(45) NULL,
  `senha` VARCHAR(32) NULL,
  `curso` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) ,
  UNIQUE INDEX `senha_UNIQUE` (`senha` ASC) ,
  INDEX `fk_autores_cursos1_idx` (`curso` ASC) ,
  CONSTRAINT `fk_autores_cursos1`
    FOREIGN KEY (`curso`)
    REFERENCES `evento`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`eixos_tematicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`eixos_tematicos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`eventos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `banner` MEDIUMBLOB NOT NULL,
  `descricao` TEXT NOT NULL,
  `data_inicio` DATE NOT NULL,
  `data_fim` DATE NOT NULL,
  `periodo_inscricao_inicio` DATE NOT NULL,
  `periodo_inscricao_fim` DATE NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `criado_em` DATETIME NOT NULL,
  `local` VARCHAR(200) NOT NULL,
  `video` MEDIUMBLOB NOT NULL,
  `horario_inicio` TIME NOT NULL,
  `horario_fim` TIME NOT NULL,
  `fim_correcao_trabalho` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`resumos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`resumos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `palavras_chave` VARCHAR(50) NOT NULL,
  `texto` TEXT NOT NULL,
  `data_cadastro` DATE NOT NULL,
  `eixo_tematico` INT NOT NULL,
  `evento` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `eixo_tematico_idx` (`eixo_tematico` ASC) ,
  INDEX `fk_resumos_eventos1_idx` (`evento` ASC) ,
  CONSTRAINT `eixo_tematico`
    FOREIGN KEY (`eixo_tematico`)
    REFERENCES `evento`.`eixos_tematicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resumos_eventos1`
    FOREIGN KEY (`evento`)
    REFERENCES `evento`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`avaliadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`avaliadores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(32) NULL,
  `curso` INT NOT NULL,
  `formacao` VARCHAR(45) NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `aprovado` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_avaliadores_cursos1_idx` (`curso` ASC) ,
  CONSTRAINT `fk_avaliadores_cursos1`
    FOREIGN KEY (`curso`)
    REFERENCES `evento`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`autorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`autorias` (
  `autor` INT NOT NULL,
  `resumo` INT NOT NULL,
  PRIMARY KEY (`autor`, `resumo`),
  INDEX `fk_AUTORES_has_RESUMOS_RESUMOS1_idx` (`resumo` ASC) ,
  INDEX `fk_AUTORES_has_RESUMOS_AUTORES1_idx` (`autor` ASC) ,
  CONSTRAINT `fk_AUTORES_has_RESUMOS_AUTORES1`
    FOREIGN KEY (`autor`)
    REFERENCES `evento`.`autores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AUTORES_has_RESUMOS_RESUMOS1`
    FOREIGN KEY (`resumo`)
    REFERENCES `evento`.`resumos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`avaliacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`avaliacoes` (
  `avaliador` INT NOT NULL,
  `resumo` INT NOT NULL,
  `nota` DECIMAL(3,1) NOT NULL,
  `comentario` TEXT(300) NULL,
  PRIMARY KEY (`avaliador`, `resumo`),
  INDEX `fk_avaliadores_has_resumos_resumos1_idx` (`resumo` ASC) ,
  INDEX `fk_avaliadores_has_resumos_avaliadores1_idx` (`avaliador` ASC) ,
  CONSTRAINT `fk_avaliadores_has_resumos_avaliadores1`
    FOREIGN KEY (`avaliador`)
    REFERENCES `evento`.`avaliadores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliadores_has_resumos_resumos1`
    FOREIGN KEY (`resumo`)
    REFERENCES `evento`.`resumos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evento`.`organizadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evento`.`organizadores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `data_cadastro` DATE NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
