create view v_estatistica as
    select 'Autores' as tabela, count(*) as qtde from autores
    union select 'Autorias' as tabela, count(*) as qtde from autorias
    union select 'Avaliações' as tabela, count(*) as qtde from avaliacoes
    union select 'Avaliadores' as tabela, count(*) as qtde from avaliadores
    union select 'Cursos' as tabela, count(*) as qtde from cursos
    union select 'Eixos Temáticos' as tabela, count(*) as qtde from eixos_tematicos
    union select 'Organizadores' as tabela, count(*) as qtde from organizadores
    union select 'Resumos' as tabela, count(*) as qtde from resumos;

create view v_quantidade_resumos_por_autor as
    select 
    a.id, a.nome, count(u.resumo) as qtde_resumos
    from autores as a
    inner join autorias as u
    on a.id = u.autor
    group by a.id, a.nome;