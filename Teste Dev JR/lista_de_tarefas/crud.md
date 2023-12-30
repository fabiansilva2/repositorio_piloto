Texto para inserir no gerenciador do banco de dados para criar a tabela.

CREATE TABLE IF NOT EXISTS tarefas (<br/>
  id int(11) NOT NULL AUTO_INCREMENT,<br/>
  texto varchar(100) NOT NULL,<br/>
  data_cadastro datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,<br/>
  PRIMARY KEY (id)<br/>
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
