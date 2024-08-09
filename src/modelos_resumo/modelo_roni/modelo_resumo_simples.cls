%Classe base do resumo simples
\LoadClass[11pt,a4paper]{article}	

\RequirePackage[utf8]{inputenc}
\RequirePackage[portuguese]{babel}
\RequirePackage[T1]{fontenc}

\RequirePackage{amsmath}
\RequirePackage{amsfonts}
\RequirePackage{amssymb}
\RequirePackage{graphicx}
\RequirePackage{ifthen}

%Especificação de fonte: Times
\RequirePackage{times}

%Espeficiação das margens
\RequirePackage[left=3cm,right=3cm,top=0cm,bottom=2.5cm]{geometry}

%Especificação de fonte: Times
%\renewcommand{\familydefault}{Times} 

%Espaçamento entre linhas de 1,5
\linespread{1.5} 

%Especifica os tamanhos das fontes
\renewcommand\LARGE{\@setfontsize\LARGE{14pt}{18}}
\renewcommand\large{\@setfontsize\large{10pt}{18}}

%Variáveis
\def\titulo#1{\def\@titulo{#1}}
\titulo{}

\def\primeiroAutor#1{\def\@primeiroAutor{#1}}
\primeiroAutor{}

\def\segundoAutor#1{\def\@segundoAutor{#1}}
\segundoAutor{}

\def\terceiroAutor#1{\def\@terceiroAutor{#1}}
\terceiroAutor{}

\def\quartoAutor#1{\def\@quartoAutor{#1}}
\quartoAutor{}

\def\quintoAutor#1{\def\@quintoAutor{#1}}
\quintoAutor{}

\def\sextoAutor#1{\def\@sextoAutor{#1}}
\sextoAutor{}

\def\abreviacaoPrimeiroAutor#1{\def\@abreviacaoPrimeiroAutor{#1}}
\abreviacaoPrimeiroAutor{}

\def\abreviacaoSegundoAutor#1{\def\@abreviacaoSegundoAutor{#1}}
\abreviacaoSegundoAutor{}

\def\abreviacaoTerceiroAutor#1{\def\@abreviacaoTerceiroAutor{#1}}
\abreviacaoTerceiroAutor{}

\def\abreviacaoQuartoAutor#1{\def\@abreviacaoQuartoAutor{#1}}
\abreviacaoQuartoAutor{}

\def\abreviacaoQuintoAutor#1{\def\@abreviacaoQuintoAutor{#1}}
\abreviacaoQuintoAutor{}

\def\abreviacaoSextoAutor#1{\def\@abreviacaoSextoAutor{#1}}
\abreviacaoSextoAutor{}

\def\notaPrimeiroAutor#1{\def\@notaPrimeiroAutor{#1}}
\notaPrimeiroAutor{}

\def\notaSegundoAutor#1{\def\@notaSegundoAutor{#1}}
\notaSegundoAutor{}

\def\notaTerceiroAutor#1{\def\@notaTerceiroAutor{#1}}
\notaTerceiroAutor{}

\def\notaQuartoAutor#1{\def\@notaQuartoAutor{#1}}
\notaQuartoAutor{}

\def\notaQuintoAutor#1{\def\@notaQuintoAutor{#1}}
\notaQuintoAutor{}

\def\notaSextoAutor#1{\def\@notaSextoAutor{#1}}
\notaSextoAutor{}

\def\notaReferenciaPrimeiroAutor#1{\def\@notaReferenciaPrimeiroAutor{#1}}
\notaReferenciaPrimeiroAutor{}

\def\notaReferenciaSegundoAutor#1{\def\@notaReferenciaSegundoAutor{#1}}
\notaReferenciaSegundoAutor{}

\def\notaReferenciaTerceiroAutor#1{\def\@notaReferenciaTerceiroAutor{#1}}
\notaReferenciaTerceiroAutor{}

\def\notaReferenciaQuartoAutor#1{\def\@notaReferenciaQuartoAutor{#1}}
\notaReferenciaQuartoAutor{}

\def\notaReferenciaQuintoAutor#1{\def\@notaReferenciaQuintoAutor{#1}}
\notaReferenciaQuintoAutor{}

\def\notaReferenciaSextoAutor#1{\def\@notaReferenciaSextoAutor{#1}}
\notaReferenciaSextoAutor{}

\newcommand{\banner}{
	\hspace*{-3.7cm}
	\includegraphics[width=21cm]{banner.png} 
}

\newcommand{\construirtitulo}{
	\banner

	\begin{center}
		\bfseries
		\LARGE
		\@titulo
	\end{center}
}

\newcommand{\autor}[4]{\ifthenelse{\equal{}{#2}}{}{\ifthenelse{\equal{1}{#1}}{#2}{; #2}}\ifthenelse{\equal{}{#3}}{}{\footnote{\label{nota:#1} #3}}\ifthenelse{\equal{}{#4}}{}{\footref{nota:#4}}}

%Comandos
\newcommand{\construirautores}{
	\begin{center}
\large
\autor{1}{\@abreviacaoPrimeiroAutor}{\@notaPrimeiroAutor}{\@notaReferenciaPrimeiroAutor}\autor{2}{\@abreviacaoSegundoAutor}{\@notaSegundoAutor}{\@notaReferenciaSegundoAutor}\autor{3}{\@abreviacaoTerceiroAutor}{\@notaTerceiroAutor}{\@notaReferenciaTerceiroAutor}\autor{4}{\@abreviacaoQuartoAutor}{\@notaQuartoAutor}{\@notaReferenciaQuartoAutor}\autor{5}{\@abreviacaoQuintoAutor}{\@notaQuintoAutor}{\@notaReferenciaQuintoAutor}\autor{6}{\@abreviacaoSextoAutor}{\@notaSextoAutor}{\@notaReferenciaSextoAutor}
	\end{center}
}

%Ambientes
\newenvironment{resumo}{
	\noindent 
	{\bf Resumo}
	\newline
	\normalfont
}{

}

\newenvironment{palavras_chave}{
	\noindent 
	\textbf{Palavras-chave:}
	\normalfont
}{}