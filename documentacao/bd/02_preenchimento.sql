-- Cadastrado Cursos
insert into cursos(id, nome) values(1, 'Análise de Sistemas');
insert into cursos(id, nome) values(2, 'Agronomia');
insert into cursos(id, nome) values(3, 'Biologia');
insert into cursos(id, nome) values(4, 'Computação');
insert into cursos(id, nome) values(5, 'Artes');

-- Cadastrado Organizadores
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES (1, 'thallison', 'teste', md5(123), '2024-08-08', 'thallison@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES (2, 'otavio', 'teste', md5(12332), '2024-09-08', 'otavio@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES (3, 'Carlos', 'teste', md5(35512), '2023-05-10', 'carlosn@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('4', 'Jeova', 'teste', md5(1239798), '2022-01-09', 'jeova@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('5', 'Jailson', 'teste', md5(123345), '2021-04-06', 'jailson@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('6', 'Ronneesley Moura Teles', 'ronneesley', md5('123'), '2021-04-06', 'ronneesley@gmail.com');

-- Cadastrado Autores
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('1', 'thallison', 'thallison@gmail.com', '11111111111', 'Campus Colinas', md5(123), 1);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('2', 'otavio', 'otavio@gmail.com', '22222222222', 'Campus Colinas', md5(123345), 2);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('3', 'carlos', 'carlosn@gmail.com', '33333333333', 'Campus Colinas', md5(123567), 3);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('4', 'jeova', 'jeova@gmail.com', '44444444444', 'Campus Colinas', md5(123568), 4);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('5', 'Jailson', 'jailson@gmail.com', '55555555555', 'Campus Colinas', md5(1232865), 5);


-- Cadastrado Avaliadores
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`,`telefone`) VALUES (1, 'carol', 'carol@gmail.com', md5(123), 1, 'Graduada','(63)99165-2222');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`,`telefone`) VALUES (2, 'thaisa', 'thaisa@gmail.com', md5(1234), 2, 'Superior','(63)99165-4444');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`,`telefone`) VALUES (3, 'monalisa', 'monalisa@gmail.com', md5(12345), 3, 'Tecnico','(63)99165-2222');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`,`telefone`) VALUES (4, 'beatriz', 'beatriz@gmail.com', md5(123456), 4, 'Mestrado','(63)99165-7777');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`,`telefone`) VALUES (5, 'ronneesley', 'ronneesley@gmail.com', md5(1234567), 5, 'Doutorado','(63)99165-0000');

-- Cadastrado Eixos tematicos
insert into eixos_tematicos(id, nome,descricao) values(1, 'Questões sociais','valores sociais');
insert into eixos_tematicos(id, nome,descricao) values(2, 'Meio Ambiente','valores sociais');
insert into eixos_tematicos(id, nome,descricao) values(3, 'Direitos e cidadania','valores sociais');
insert into eixos_tematicos(id, nome,descricao) values(4, 'Saúde','valores sociais');
insert into eixos_tematicos(id, nome,descricao) values(5, 'Arte e Cultura','valores sociais');

-- Cadastrado Resumos
INSERT INTO resumos (`id`, `titulo`, `palavras_chave`, `texto`, `eixo_tematico`) VALUES (1, 'A sociedade e a Democracia ', 'sociedade, democracia, desigualdade, inclusão', 'As questões sociais envolvem o estudo e a análise das diversas problemáticas que afetam a sociedade, incluindo desigualdade, pobreza, discriminação e exclusão social. Esse eixo temático busca entender as dinâmicas sociais e propor soluções para promover a justiça social e a inclusão de todas as camadas da população. Pesquisas e projetos nessa área frequentemente abordam temas como educação, moradia, segurança, trabalho e políticas públicas.', '1');
INSERT INTO resumos (`id`, `titulo`, `palavras_chave`, `texto`, `eixo_tematico`) VALUES (2, 'Meio Ambiente', 'desmatamento, mudanças climáticas', 'O eixo temático de Meio Ambiente concentra-se na compreensão e preservação dos recursos naturais e ecossistemas do planeta. Envolve o estudo de problemas ambientais como poluição, desmatamento, mudanças climáticas e conservação da biodiversidade. Através desse eixo, busca-se promover a sustentabilidade, incentivar práticas ecológicas e desenvolver políticas que minimizem os impactos ambientais, assegurando um futuro equilibrado e saudável para as próximas gerações.', '2');
INSERT INTO resumos (`id`, `titulo`, `palavras_chave`, `texto`, `eixo_tematico`) VALUES (3, 'Direitos e cidadania', 'justiça, legislações, políticas ', 'Direitos e cidadania são fundamentais para garantir a dignidade, a liberdade e a igualdade entre os indivíduos. Esse eixo temático explora a proteção dos direitos humanos, a promoção da justiça, a democracia e a participação cidadã. Envolve o estudo de legislações, políticas públicas e movimentos sociais que buscam assegurar que todos os cidadãos tenham seus direitos respeitados e possam exercer plenamente suas responsabilidades e deveres na sociedade.', '3');
INSERT INTO resumos (`id`, `titulo`, `palavras_chave`, `texto`, `eixo_tematico`) VALUES (4, 'Saúde', 'prevenção, diagnóstico, tratamento', 'O eixo temático de Saúde aborda a promoção do bem-estar físico, mental e social das pessoas. Inclui o estudo de doenças, tratamentos, políticas de saúde pública e os determinantes sociais da saúde. Esse campo é essencial para desenvolver estratégias eficazes de prevenção, diagnóstico e tratamento de doenças, além de promover hábitos saudáveis e melhorar a qualidade de vida da população.', '4');
INSERT INTO resumos (`id`, `titulo`, `palavras_chave`, `texto`, `eixo_tematico`) VALUES (5, 'Arte e Cultura', 'música, teatro, literatura, dança', 'O eixo temático de Arte e Cultura investiga as diversas manifestações artísticas e culturais que compõem o patrimônio e a identidade de uma sociedade. Inclui a análise de expressões artísticas como música, teatro, literatura, dança e artes visuais, além de tradições culturais, festividades e costumes. Este campo destaca a importância da preservação e valorização cultural, promovendo o acesso à cultura e incentivando a criatividade e a inovação artística.', '5');

-- Cadastrado Autorias
INSERT INTO autorias (`autor`, `resumo`) VALUES (1, 1);
INSERT INTO autorias (`autor`, `resumo`) VALUES (2, 2);
INSERT INTO autorias (`autor`, `resumo`) VALUES (3, 3);
INSERT INTO autorias (`autor`, `resumo`) VALUES (4, 4);
INSERT INTO autorias (`autor`, `resumo`) VALUES (5, 5);

-- Cadastrado Avaliações
INSERT INTO avaliacoes (`avaliador`, `resumo`, `nota`) VALUES (1, 1, 10);
INSERT INTO avaliacoes (`avaliador`, `resumo`, `nota`) VALUES (2, 2, 9.5);
INSERT INTO avaliacoes (`avaliador`, `resumo`, `nota`) VALUES (3, 3, 8);
INSERT INTO avaliacoes (`avaliador`, `resumo`, `nota`) VALUES (4, 4, 7.8);
INSERT INTO avaliacoes (`avaliador`, `resumo`, `nota`) VALUES (5, 5, 6.9);

--  cadastro eventos

INSERT INTO eventos (`nome`, `banner`, `descricao`, `data_inicio`, `data_fim`, `periodo_inscricao_inicio`, `periodo_inscricao_fim`, `telefone`, `criado_em`, `local`, `video`, `horario_inicio`, `horario_fim`, `fim_correcao_trabalho`)
VALUES 
('Conferência de Tecnologia 2024', 'banner1.jpg', 'Uma conferência sobre as últimas tendências em tecnologia.', '2024-09-15', '2024-09-17', '2024-08-01', '2024-08-31', '(11) 99999-9999',now(), 'Campus Colinas', 'video1.mp4', '09:00', '17:00', '2024-09-10');
INSERT INTO eventos (`nome`, `banner`, `descricao`, `data_inicio`, `data_fim`, `periodo_inscricao_inicio`, `periodo_inscricao_fim`, `telefone`,`criado_em`, `local`, `video`, `horario_inicio`, `horario_fim`, `fim_correcao_trabalho`)
VALUES
('Simpósio de Ciências 2024', 'banner2.jpg', 'Um simpósio que explora avanços recentes em várias áreas da ciência.', '2024-10-05', '2024-10-07', '2024-09-01', '2024-09-25', '(21) 98888-8888',now(), 'Campus Guarai', 'video2.mp4', '10:00', '18:00', '2024-09-30');
INSERT INTO eventos (`nome`, `banner`, `descricao`, `data_inicio`, `data_fim`, `periodo_inscricao_inicio`, `periodo_inscricao_fim`, `telefone`, `criado_em`,`local`, `video`, `horario_inicio`, `horario_fim`, `fim_correcao_trabalho`)
VALUES
('Workshop de Inovação 2024', 'banner3.jpg', 'Um workshop focado em inovação e empreendedorismo.', '2024-11-20', '2024-11-21', '2024-10-01', '2024-10-31', '(31) 97777-7777',now(), 'Belo Horizonte - MG', 'Campus Tocantins', '08:00', '16:00', '2024-11-15');
INSERT INTO eventos (`nome`, `banner`, `descricao`, `data_inicio`, `data_fim`, `periodo_inscricao_inicio`, `periodo_inscricao_fim`, `telefone`,`criado_em`, `local`, `video`, `horario_inicio`, `horario_fim`, `fim_correcao_trabalho`)
VALUES
('Seminário de Educação 2024', 'banner4.jpg', 'Discussões sobre o futuro da educação e metodologias de ensino.', '2024-12-10', '2024-12-12', '2024-11-01', '2024-11-30', '(51) 96666-6666',now(), 'Campo Alegria', 'video4.mp4', '09:30', '17:30', '2024-12-05');
INSERT INTO eventos (`nome`, `banner`, `descricao`, `data_inicio`, `data_fim`, `periodo_inscricao_inicio`, `periodo_inscricao_fim`, `telefone`,`criado_em`, `local`, `video`, `horario_inicio`, `horario_fim`, `fim_correcao_trabalho`)
VALUES
('Fórum de Sustentabilidade 2024', 'banner5.jpg', 'Debates sobre sustentabilidade e práticas ambientais.', '2024-11-01', '2024-11-02', '2024-09-20', '2024-10-15', '(71) 95555-5555',now(), 'Salvador - BA', 'Campus Brasilia', '08:30', '15:30', '2024-10-25');

