# Mapa de fontes - Territórios da Água

Este documento registra a origem de cada conteúdo usado no tema WordPress. A prioridade editorial seguida foi:

1. `Lista Atualizada.pdf` para textos, imagens, infográficos, fotografias, legendas e links de conteúdo.
2. `tda (1).pdf` para logo oficial, cores, tipografias e arquitetura da plataforma.
3. `landing-tda-paleta-oficial.html` somente como referência visual de ritmo, espaçamento, composição e responsividade.

| Seção do site | Arquivo-fonte | Página(s) | Tipo de conteúdo | Status | Arquivo gerado |
| ------------- | ------------- | --------: | ---------------- | ------ | -------------- |
| Início / Hero | `tda (1).pdf` | 1 | Logo oficial; composição abstrata baseada na identidade | logo extraído; texto ausente marcado como `[texto]` | `territorios-da-agua/assets/images/logo/territorios-da-agua-logo.png`; `territorios-da-agua/assets/images/logo/territorios-da-agua-logo-original.png` |
| Introdução | `Lista Atualizada.pdf` | 2 | Texto | `[texto]` | `territorios-da-agua/patterns/introducao.php` |
| Sobre o Projeto | `Lista Atualizada.pdf` | 2 | Texto | `[texto]` | `territorios-da-agua/patterns/sobre-projeto.php` |
| Contextualização do Projeto | `Lista Atualizada.pdf` | 2 | Texto | `[texto]` | `territorios-da-agua/patterns/contextualizacao.php` |
| Programa de Conservação e Recuperação das APPs | `Lista Atualizada.pdf` | 2 | Texto | texto completo | `territorios-da-agua/patterns/programa-apps.php` |
| Avaliação das Intervenções em APPs | `Lista Atualizada.pdf` | 2-5 | Texto, resultados, nota, link e infográficos | texto completo; link presente; infográficos extraídos | `territorios-da-agua/patterns/avaliacao-apps.php`; `assets/images/infograficos/avaliacao-panorama-intervencoes.webp`; `assets/images/infograficos/avaliacao-tipos-intervencao-2002-2024.webp`; `assets/images/infograficos/avaliacao-serie-temporal.webp`; `assets/images/infograficos/avaliacao-proponentes.webp` |
| Link do artigo científico | `Lista Atualizada.pdf` | 3 | URL | link completo | `https://editorarealize.com.br/artigo/visualizar/122574` |
| Tipologias de APPs | `Lista Atualizada.pdf` | 6-10 | Texto, resultados, nota de rodapé e tabela | texto completo; tabela reconstruída como bloco Table; nota de fonte preservada | `territorios-da-agua/patterns/tipologias-apps.php` |
| Figuras de Tipologias | `Lista Atualizada.pdf` | 11-17 | Mapas e diagramas estáticos | figuras extraídas; usadas somente na seção Tipologias | `assets/images/tipologias/tipologias-mapas-tematicos-caracterizacao.webp`; `assets/images/tipologias/tipologias-niveis-ramificacao.webp`; `assets/images/tipologias/tipologias-arvore-decisao.webp`; `assets/images/tipologias/tipologias-tipo-1.webp`; `assets/images/tipologias/tipologias-tipo-2.webp`; `assets/images/tipologias/tipologias-tipo-3.webp`; `assets/images/tipologias/tipologias-tipo-4.webp` |
| Tipologias - Tipo 5 e Tipo 6 | `Lista Atualizada.pdf` | 18-19 | Títulos sem conteúdo visual final | não utilizado por ausência de conteúdo visual/textual além dos títulos | nenhum |
| Mapas Interativos | `tda (1).pdf`; briefing do usuário | 31 | Arquitetura da plataforma | mapa reservado; front-end vazio; editor exibe orientação via CSS | `territorios-da-agua/patterns/mapa-interativo.php` |
| Projetos Piloto | `tda (1).pdf`; `Lista Atualizada.pdf` | 31; 20-23 | Arquitetura e nomes finais | arquitetura seguida; nome de piloto não autorizado no diagrama ignorado por conflito com `Lista Atualizada.pdf`; Parelheiros e Baracela usados | `territorios-da-agua/patterns/projeto-parelheiros.php`; `territorios-da-agua/patterns/projeto-baracela.php` |
| Projeto Piloto Parelheiros | `Lista Atualizada.pdf` | 20-22 | Texto e fotografias | texto completo; fotografias extraídas individualmente | `assets/images/parelheiros/parelheiros-equipe-oficina.webp`; `assets/images/parelheiros/parelheiros-corrego-01.webp`; `assets/images/parelheiros/parelheiros-corrego-02.webp`; `assets/images/parelheiros/parelheiros-corrego-03.webp` |
| Projeto Piloto Baracela | `Lista Atualizada.pdf` | 23 | Texto | `[texto]` | `territorios-da-agua/patterns/projeto-baracela.php` |
| Eventos | `Lista Atualizada.pdf` | 23 | Texto | `[texto]`; estrutura vazia para inserção futura | `territorios-da-agua/patterns/eventos.php` |
| Biblioteca | `Lista Atualizada.pdf` | 23 | Texto | texto completo; link da Biblioteca de Publicações Científicas pendente por ausência de URL | `territorios-da-agua/patterns/biblioteca.php` |
| Quem Somos | `Lista Atualizada.pdf` | 23 | Texto | `[texto]`; estrutura vazia para pessoas e instituições futuras | `territorios-da-agua/patterns/quem-somos.php` |
| Cores | `tda (1).pdf`; briefing do usuário | 28-29 | Identidade visual | valores hexadecimais registrados no `theme.json` | `territorios-da-agua/theme.json` |
| Tipografias | `tda (1).pdf`; briefing do usuário | 28-29 | Anton Regular; Roboto Light, Medium e Bold | fontes hospedadas localmente com licenças | `assets/fonts/anton/`; `assets/fonts/roboto/` |
| Arquitetura da página | `tda (1).pdf` | 31 | Diagrama "PROPOSTA INICIAL" | ordem geral usada, com nomes finais da `Lista Atualizada.pdf`; conteúdo semeado como página Gutenberg editável | `territorios-da-agua/templates/front-page.html`; `territorios-da-agua/functions.php` |

## Conteúdos pendentes

| Local | Pendência |
| ----- | --------- |
| Hero | `[texto]` |
| Introdução | `[texto]` |
| Sobre o Projeto | `[texto]` |
| Contextualização do Projeto | `[texto]` |
| Projeto Piloto Baracela | `[texto]` |
| Eventos | `[texto]` |
| Quem Somos | `[texto]` |
| Biblioteca de Publicações Científicas | URL pendente; mantida como texto sem link |
| Tipologias de APPs | Nota original preservada: `AINDA FALTA TEXTO E PRINCIPALMENTE MAPAS` |

## Elementos do HTML provisório deliberadamente ignorados

Os itens abaixo aparecem em `landing-tda-paleta-oficial.html`, mas não foram usados porque o briefing define esse HTML apenas como referência visual:

- SVG falso do logo no cabeçalho.
- Tarja `PREVIEW`.
- Slogans, chamadas e descrições do hero.
- Textos institucionais de apresentação.
- Estatísticas digitadas como cards.
- Mapa/moldura visual com gradiente ou ícone.
- Conteúdos de projetos piloto não autorizados pela `Lista Atualizada.pdf`.
- Cards de eventos e datas.
- Cards de biblioteca, relatórios e links fictícios.
- Listas de equipe, nomes, funções e instituições.
- E-mails e contatos.
- Conteúdo do rodapé.
- Logos simulados ou nomes de instituições usados apenas como texto no HTML.

## Elementos do `tda (1).pdf` deliberadamente não utilizados

- Fotografias, mapas, diagramas técnicos, infográficos e ilustrações das demais páginas.
- Logos da FAPESP, UFABC, Prefeitura de São Paulo e Ondas.
- Conteúdo textual de apresentações.
- Materiais de divulgação, redes sociais e cards de resultados.
- O nome de piloto não autorizado no diagrama de arquitetura, substituído por "Parelheiros" por prioridade da `Lista Atualizada.pdf`.
