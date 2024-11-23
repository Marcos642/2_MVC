CREATE DATABASE aula5_mvc;
USE aula5_mvc;
--
-- Table structure for table `tipo_noticia`
--
CREATE TABLE `tipo_noticia` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
); 
--
-- Table structure for table `noticia`
--
CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `nome_imagem` varchar(50) DEFAULT NULL,
  `texto` varchar(5000) DEFAULT NULL,
  `fk_id_tipo_noticia` int(11) DEFAULT NULL, #Chave estrangeira 
  PRIMARY KEY (`id_noticia`),
  FOREIGN KEY (fk_id_tipo_noticia) REFERENCES tipo_noticia(id_tipo)
); 
--
-- Insert dados in `noticia`
--
INSERT INTO noticia(titulo,nome_imagem,texto) VALUES 
('Titulo da matéria','img.png','Qualquer texto aqui!!!!!!!!!!'),
('1 Titulo da matéria','1img.png','1Qualquer texto aqui!!!!!!!!!!'),
('2 Titulo da matéria','2img.png','2Qualquer texto aqui!!!!!!!!!!');
--
-- Insert dados in `tipo_noticia`
--
INSERT INTO tipo_noticia(descricao) VALUES 
('Entreterimento'),('Futebol');