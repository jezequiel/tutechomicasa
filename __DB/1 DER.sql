SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `costa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `costa`;

-- -----------------------------------------------------
-- Table `costa`.`Usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Usuarios` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Nombre` VARCHAR(100) NOT NULL ,
  `Email` VARCHAR(100) NOT NULL ,
  `Pass` VARCHAR(20) NOT NULL ,
  `Tel01` VARCHAR(30) NULL ,
  `Tel02` VARCHAR(30) NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades_Tipos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades_Tipos` (
  `Id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Tipo` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Zonas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Zonas` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Zona` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Tipo` TINYINT UNSIGNED NOT NULL ,
  `Id_Usuario` INT UNSIGNED NOT NULL ,
  `Id_Zona` INT UNSIGNED NOT NULL ,
  `Ambientes` TINYINT UNSIGNED NULL ,
  `Dormitorios` TINYINT NULL ,
  `Ant` TINYINT NULL ,
  `Banos` TINYINT NULL ,
  `Sup_Total` INT NULL ,
  `Sup_Cubierta` INT NULL ,
  `Plantas` TINYINT NULL ,
  `Pax_Max` TINYINT UNSIGNED NULL ,
  `Observaciones` VARCHAR(1000) NULL ,
  `Activo` BOOLEAN NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Propiedades_Propiedades_Tipos` (`Id_Tipo` ASC) ,
  INDEX `fk_Propiedades_Usuarios` (`Id_Usuario` ASC) ,
  INDEX `fk_Propiedades_Zonas` (`Id_Zona` ASC) ,
  CONSTRAINT `fk_Propiedades_Propiedades_Tipos`
    FOREIGN KEY (`Id_Tipo` )
    REFERENCES `costa`.`Propiedades_Tipos` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Propiedades_Usuarios`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `costa`.`Usuarios` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Propiedades_Zonas`
    FOREIGN KEY (`Id_Zona` )
    REFERENCES `costa`.`Zonas` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades_Ocupacion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades_Ocupacion` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Propiedad` INT UNSIGNED NOT NULL ,
  `Fecha_Desde` DATETIME NULL ,
  `Fecha_Hasta` DATETIME NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Propiedades_Ocupacion_Propiedades` (`Id_Propiedad` ASC) ,
  CONSTRAINT `fk_Propiedades_Ocupacion_Propiedades`
    FOREIGN KEY (`Id_Propiedad` )
    REFERENCES `costa`.`Propiedades` (`Id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades_Comodidades_Tipos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades_Comodidades_Tipos` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Comodidad` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades_Comodidades`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades_Comodidades` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Propiedad` INT UNSIGNED NOT NULL ,
  `Id_Comodidad` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Propiedades_Comodidades_Propiedades` (`Id_Propiedad` ASC) ,
  INDEX `fk_Propiedades_Comodidades_Propiedades_Comodidades_Tipos` (`Id_Comodidad` ASC) ,
  CONSTRAINT `fk_Propiedades_Comodidades_Propiedades`
    FOREIGN KEY (`Id_Propiedad` )
    REFERENCES `costa`.`Propiedades` (`Id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Propiedades_Comodidades_Propiedades_Comodidades_Tipos`
    FOREIGN KEY (`Id_Comodidad` )
    REFERENCES `costa`.`Propiedades_Comodidades_Tipos` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades_Precios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades_Precios` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Propiedad` INT UNSIGNED NOT NULL ,
  `Precio` DECIMAL(19,2) NOT NULL ,
  `Fecha_Desde` DATETIME NULL ,
  `Fecha_Hasta` DATETIME NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Propiedades_Precios_Propiedades` (`Id_Propiedad` ASC) ,
  CONSTRAINT `fk_Propiedades_Precios_Propiedades`
    FOREIGN KEY (`Id_Propiedad` )
    REFERENCES `costa`.`Propiedades` (`Id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Proyectos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Proyectos` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Usuario` INT UNSIGNED NULL ,
  `Nombre` VARCHAR(50) NULL ,
  `Query` VARCHAR(1000) NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Proyectos_Usuarios` (`Id_Usuario` ASC) ,
  CONSTRAINT `fk_Proyectos_Usuarios`
    FOREIGN KEY (`Id_Usuario` )
    REFERENCES `costa`.`Usuarios` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Enlaces_Externos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Enlaces_Externos` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Proyecto` INT UNSIGNED NOT NULL ,
  `URL` VARCHAR(500) NOT NULL ,
  `Descripcion` VARCHAR(200) NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Enlaces_Externos_Proyectos` (`Id_Proyecto` ASC) ,
  CONSTRAINT `fk_Enlaces_Externos_Proyectos`
    FOREIGN KEY (`Id_Proyecto` )
    REFERENCES `costa`.`Proyectos` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `costa`.`Propiedades_Multimedia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `costa`.`Propiedades_Multimedia` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `Id_Propiedad` INT UNSIGNED NOT NULL ,
  `Id_TipoArchivo` TINYINT UNSIGNED NOT NULL ,
  `Path` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Propiedades_Multimedia_Propiedades` (`Id_Propiedad` ASC) ,
  CONSTRAINT `fk_Propiedades_Multimedia_Propiedades`
    FOREIGN KEY (`Id_Propiedad` )
    REFERENCES `costa`.`Propiedades` (`Id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
