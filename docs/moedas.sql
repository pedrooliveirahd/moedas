-- Script de criação do banco de dados

-- Tabela PAGAR

-- TODO Verificar tipos para o valor, multa e desconto

CREATE TABLE `pagar` (
  `id` integer  NOT NULL AUTO_INCREMENT,
  `liquidado` boolean  NOT NULL,
  `descricao` text ,
  `valor` DECIMAL  NOT NULL,
  `multa` decimal ,
  `desconto` decimal ,
  `vencimento` date  NOT NULL,
  `pagamento` date ,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB
CHARACTER SET utf8 COLLATE utf8_general_ci;