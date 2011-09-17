SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`carrera`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`carrera` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`carrera` (
  `id_carrera` INT NOT NULL AUTO_INCREMENT ,
  `cod_carrera` VARCHAR(45) NULL ,
  `nombre_carrera` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_carrera`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estudiante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`estudiante` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`estudiante` (
  `id_estudiante` INT NOT NULL AUTO_INCREMENT ,
  `matricula` INT NULL ,
  `id_carrera` INT NULL ,
  `nombres` VARCHAR(45) NULL ,
  `apellidos` VARCHAR(45) NULL ,
  `cedula` VARCHAR(45) NULL ,
  `direccion` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_estudiante`) ,
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC) ,
  CONSTRAINT `id_carrera_fk`
    FOREIGN KEY (`id_carrera` )
    REFERENCES `mydb`.`carrera` (`id_carrera` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`materias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`materias` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`materias` (
  `id_materia` INT NOT NULL AUTO_INCREMENT ,
  `cod_materia` VARCHAR(45) NULL ,
  `nombre_materia` VARCHAR(45) NULL ,
  `creditos_materias` INT NULL ,
  PRIMARY KEY (`id_materia`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`profesor` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`profesor` (
  `id_profesor` INT NOT NULL AUTO_INCREMENT ,
  `cod_profesor` VARCHAR(45) NULL ,
  `nombres` VARCHAR(45) NULL ,
  `apellidos` VARCHAR(45) NULL ,
  `cedula` VARCHAR(45) NULL ,
  `telefono` VARCHAR(45) NULL ,
  `celular` VARCHAR(45) NULL ,
  `direccion` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_profesor`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`record`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`record` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`record` (
  `id_record` INT NOT NULL AUTO_INCREMENT ,
  `id_estudiante` INT NULL ,
  `id_materia` INT NULL ,
  `calificacion` INT NULL ,
  `estado` VARCHAR(1) NULL ,
  PRIMARY KEY (`id_record`) ,
  CONSTRAINT `id_estudiante_fk`
    FOREIGN KEY (`id_estudiante` )
    REFERENCES `mydb`.`estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_materia_fk`
    FOREIGN KEY (`id_materia` )
    REFERENCES `mydb`.`materias` (`id_materia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`prerequisito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`prerequisito` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`prerequisito` (
  `id_` INT NOT NULL ,
  `id_materia_s` INT NULL ,
  `id_materia_p` INT NULL ,
  PRIMARY KEY (`id_`) ,
  CONSTRAINT `id_materia_padre`
    FOREIGN KEY (`id_materia_s` )
    REFERENCES `mydb`.`materias` (`id_materia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_materia_hijo`
    FOREIGN KEY (`id_materia_p` )
    REFERENCES `mydb`.`materias` (`id_materia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios_estudiantes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`usuarios_estudiantes` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`usuarios_estudiantes` (
  `id_` INT NOT NULL AUTO_INCREMENT ,
  `pass` VARCHAR(45) NULL ,
  `privilegio` INT NULL DEFAULT 4 ,
  `usuario` INT NULL ,
  PRIMARY KEY (`id_`) ,
  CONSTRAINT `usuario_fk_estudiantes`
    FOREIGN KEY (`usuario` )
    REFERENCES `mydb`.`estudiante` (`matricula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`materia_carrera`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`materia_carrera` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`materia_carrera` (
  `id_` INT NOT NULL AUTO_INCREMENT ,
  `id_carrera` INT NULL ,
  `id_materia` INT NULL ,
  PRIMARY KEY (`id_`) ,
  CONSTRAINT `id_carrera`
    FOREIGN KEY (`id_carrera` )
    REFERENCES `mydb`.`carrera` (`id_carrera` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_materia`
    FOREIGN KEY (`id_materia` )
    REFERENCES `mydb`.`materias` (`id_materia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`session`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`session` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`session` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `semestre` VARCHAR(15) NULL ,
  `hora` VARCHAR(45) NULL ,
  `id_profesor` INT NULL ,
  `id_estudiante` INT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `id_profesor_session_fk`
    FOREIGN KEY (`id_profesor` )
    REFERENCES `mydb`.`profesor` (`id_profesor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_estudiante_session_fk`
    FOREIGN KEY (`id_estudiante` )
    REFERENCES `mydb`.`estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`administrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`administrador` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`administrador` (
  `id_admin` INT NOT NULL ,
  `usuario` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_admin`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios_profesor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`usuarios_profesor` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`usuarios_profesor` (
  `id_` INT NOT NULL AUTO_INCREMENT ,
  `pass` VARCHAR(45) NULL ,
  `privilegio` INT NULL ,
  `usuario` INT NULL DEFAULT 3 ,
  PRIMARY KEY (`id_`) ,
  CONSTRAINT `usuario_fk_maestros0`
    FOREIGN KEY (`usuario` )
    REFERENCES `mydb`.`profesor` (`id_profesor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
