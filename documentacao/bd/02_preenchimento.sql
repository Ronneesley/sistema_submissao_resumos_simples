-- Cadastrado Cursos
insert into cursos(id, nome) values(1, 'Análise de Sistemas');
insert into cursos(id, nome) values(2, 'Agronomia');
insert into cursos(id, nome) values(3, 'Biologia');
insert into cursos(id, nome) values(4, 'Computação');
insert into cursos(id, nome) values(5, 'Artes');

-- Cadastrado Organizadores
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES (1, 'thallison', 'teste', md5(123), '2024-08-08', 'thallison@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('2', 'otavio', 'teste', md5(12332), '2024-09-08', 'otavio@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('3', 'Carlos', 'teste', md5(12355), '2023-05-10', 'carlosn@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('4', 'Jeova', 'teste', md5(1239798), '2022-01-09', 'jeova@gmail.com');
INSERT INTO organizadores (`id`, `nome`, `login`, `senha`, `data_cadastro`, `email`) VALUES ('5', 'Jailson', 'teste', md5(123345), '2021-04-06', 'jailson@gmail.com');

-- Cadastrado Autores
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('1', 'thallison', 'thallison@gmail.com', '11111111111', 'Campus Colinas', md5(123), 1);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('2', 'otavio', 'otavio@gmail.com', '22222222222', 'Campus Colinas', md5(123345), 2);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('3', 'carlos', 'carlosn@gmail.com', '33333333333', 'Campus Colinas', md5(123567), 3);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('4', 'jeova', 'jeova@gmail.com', '44444444444', 'Campus Colinas', md5(123568), 4);
INSERT INTO autores (`id`, `nome`, `email`, `cpf`, `instituicao_ensino`, `senha`, `curso`) VALUES ('5', 'Jailson', 'jailson@gmail.com', '55555555555', 'Campus Colinas', md5(1232865), 5);


-- Cadastrado Avaliadores
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`) VALUES (1, 'carol', 'carol@gmail.com', md5(123), 1, 'Graduada');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`) VALUES (2, 'thaisa', 'thaisa@gmail.com', md5(1234), 2, 'Superior');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`) VALUES (3, 'monalisa', 'monalisa@gmail.com', md5(12345), 3, 'Tecnico');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`) VALUES (4, 'beatriz', 'beatriz@gmail.com', md5(123456), 4, 'Mestrado');
INSERT INTO avaliadores (`id`, `nome`, `email`, `senha`, `curso`, `formacao`) VALUES (5, 'ronneesley', 'ronneesley@gmail.com', md5(1234567), 5, 'Doutorado');

-- Cadastrado Eixos tematicos
insert into eixos_tematicos(id, nome) values(1, 'Questões sociais');
insert into eixos_tematicos(id, nome) values(2, 'Meio Ambiente');
insert into eixos_tematicos(id, nome) values(3, 'Direitos e cidadania');
insert into eixos_tematicos(id, nome) values(4, 'Saúde');
insert into eixos_tematicos(id, nome) values(5, 'Arte e Cultura');

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
INSERT INTO `avaliacoes` (`avaliador`, `resumo`, `nota`) VALUES ('1', '1', '10');
INSERT INTO `avaliacoes` (`avaliador`, `resumo`, `nota`) VALUES ('2', '2', '9.5');
INSERT INTO `avaliacoes` (`avaliador`, `resumo`, `nota`) VALUES ('3', '3', '8');
INSERT INTO `avaliacoes` (`avaliador`, `resumo`, `nota`) VALUES ('4', '4', '7.8');
INSERT INTO `avaliacoes` (`avaliador`, `resumo`, `nota`) VALUES ('5', '5', '6.9');
