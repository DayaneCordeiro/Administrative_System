<h1 align="center">Administrative System 📊</h1>

![Badge](https://img.shields.io/github/forks/DayaneCordeiro/Administrative_System?style=social)&nbsp;&nbsp;&nbsp;
![Badge](https://img.shields.io/github/stars/DayaneCordeiro/Administrative_System?style=social)&nbsp;&nbsp;&nbsp;
![Badge](https://img.shields.io/github/license/DayaneCordeiro/Administrative_System?style=social)<br>

![Badge](https://img.shields.io/badge/PHP-8.0.3-blue)
![Badge](https://img.shields.io/badge/Docker-20.10.8-blue)
![Badge](https://img.shields.io/badge/Laravel-8.68.0-critical)
![Badge](https://img.shields.io/badge/MySQL-5.7.22-important)
![Badge](https://img.shields.io/badge/Composer-2.1.6-yellowgreen)
![Badge](https://img.shields.io/badge/PHPMyAdmin-5.1.0_apache-orange)
![Badge](https://img.shields.io/badge/Nginx-1.19.8_alpine-sucess)
![Badge](https://img.shields.io/badge/Apidoc-0.50.1-blue)
![Badge](https://img.shields.io/badge/Redis-6.2.1_buster-red)
![Badge](https://img.shields.io/badge/MailHog-v1.0.1-success)
![Badge](https://img.shields.io/badge/Carbon-2.0-success)

<h1>Desenvolvimento de uma aplicação com ênfase em serviços administrativos.</h1>

<p align="center">
    <a href="#about">Sobre</a> •
    <a href="#pre-requirements">Pré requerimentos</a> • 
    <a href="#how-to-use">Como usar</a> • 
    <a href="#software-configs">Configurações do Software</a> •
    <a href="#businnes-rulers">Regras de negócio aplicadas</a> •
    <a href="#enhancements">Melhorias propostas para as próximas versões</a> •
    <a href="#technologies">Tecnologias</a> •
    <a href="#author">Autora</a>
</p>

<h4 align="center"> 
	🚧 Em construção 🚧
</h4>

<div id="about">
<h1>Sobre</h1>
<h3>Descrição</h3>
<div align="justify">

</div>

<h3>Ferramentas utilizadas</h3>
<div align="justify"> 
<li><b>Laravel-AdminLTE: Ferramenta de tema administrativo para a aplicação.</b></li>
<li><b>Laravel-ui: Ferramenta de autenticação para uma aplicação Laravel.</b></li>
</div>

<div id="pre-requirements">
    <h1>Pré requerimentos</h1>
    <div align="justify">
        Para a instalação do pacote AdminLTE, basta executar os seguintes comandos na raiz do projeto:<br>
        <code>
        composer require jeroennoten/laravel-adminlte<br>
        php artisan adminlte:install
        </code>

        Para a instalação do pacote laravel-ui, é necessário executar os comandos:
        <code>
        composer require laravel/ui<br>
        php artisan ui vue --auth
        </code>
    </div>
</div>

<div id="how-to-use">
<h1>Como usar</h1>
<li>O link para a documentação da API encontra-se a seguir: https://htmlpreview.github.io/?https://github.com/DayaneCordeiro/Digital_Payments/blob/main/documents/apidoc/index.html</li>
<li>Através desta documentação é possível utilizar todas as rotas desta API de forma correta.</li>
</div>

<div id="software-configs">
<h1>Configurações do Software</h1>
<div align="justify">
<li>O software foi construído com a arquitetura de uso padrão do Laravel, MVC (Model, View e Controller). Tendo os principais controllers dentro da pasta de versionamento da API (v1). E um controller com funções de validação reutilizadas em outros controllers.</li></br>
<li>Foi utilizado um sistema de roteamento, com algumas funções nativas do Laravel e outras incluídas sob demanda do projeto. O Laravel possui cinco tipos de rotas padrão (index, show, store, destroy e update) acessadas através da função <code>Route::apiResource();</code> nem todas foram necessárias no projeto visto as regras de negócio aplicadas.</li></br>
<li>Para manipulação simplificada das datas, foi utilizada a extensão Carbon.</li>
</div>
</div>

<div id="businnes-rulers">
<h1>Regras de negócio aplicadas</h1>
<div align="justify">
<li>Apenas usuários comuns podem fazer transferência de dinheiro.</li>
<li>Usuários comuns e lojistas podem receber transferências de dinheiro.</li>
<li>A criação de um usuário, instancia também sua carteira (que é onde fica seu saldo).</li>
<li>A exclusão de um usuário é apenas lógica e afeta também sua carteira, ou seja, o usuário e sua carteira se tornam inoperantes.</li>
<li>A ativação de um usuário afeta também sua carteira, ou seja, ambos são ativos.</li>
<li>O método de cancelamento de transações foi criado com o intuído de apenas pessoas autorizadas ao suporte interno acessarem, mas o sucesso do cancelamento depende do saldo da carteira do recebedor.</li>
<li>O método de cancelamento de transação por usuário permite que o recebedor ou pagador cancelem a transação e retornem o dinheiro à sua origem.</li>
<li>A transação precisa ser aprovada por um serviço externo, caso contrário, ela recebe o status "not-approved" e o valor não é enviado.</li>
<li>O recebedor precisa ser notificado quando a transação é realizada, caso ocntrário, a transação não é aprovada.</li>
<li>Um recebedor sempre pode cancelar a transação, retornando assim, o valor à sua origem.</li>
<li>Um pagador tem uma tolerância de cinco minutos para cancelar uma transação, contanto que ainda haja saldo na carteira do recebedor. Sendo esse tempo passado, é necessário entrar em contato com o suporte interno da aplicação.</li>
<li>Caso a transação seja aprovada pelo serviço externo e a notificação seja enviada ao recebedor, o valor é transferido.</li>
</div>
</div>

<div id="enhancements">
<h1>Melhorias propostas para as próximas versões</h1>
<div align="justify">
<li>Autenticação da API.</li>
<li>Criação de logs para os controllers.</li>
<li>Reaproveitamento das validações e modularização em formato de resources.</li>
</div>
</div>

<div id="technologies">
    <h1>Tecnologias</h1>
 
 As sequintes tecnologias foram utilizadas na construção do projeto:

- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [Apidoc](https://apidocjs.com/)
- [Composer](https://getcomposer.org/)
- [Docker](https://www.docker.com/)
- [Laravel](https://laravel.com/)
</div>

<div id="author">
    <h1>Autora</h1>
    <a href="https://github.com/DayaneCordeiro">
        <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/50596100?v=4" width="150px;" alt=""/>
        <br />
        <sub><b>Dayane Cordeiro</b></sub>
    </a>

Made with ❤️ by Dayane Cordeiro!

✔ Computer Engineering student at PUC Minas<br>
✔ PHP Developer<br>
✔ Passionate about software development, computer architecture and learning.<br>

[![Linkedin Badge](https://img.shields.io/badge/-Dayane-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/dayane-cordeiro-1b761318b/)](https://www.linkedin.com/in/dayane-cordeiro-1b761318b/)
[![Gmail Badge](https://img.shields.io/badge/-dayane.cordeirogs@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:dayane.cordeirogs@gmail.com)](mailto:dayane.cordeirogs@gmail.com)

</div>
