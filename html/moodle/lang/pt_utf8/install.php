<?PHP // $Id$ 
      // install.php - created with Moodle 2.0 dev (2007101506)


$string['aborting'] = 'Abortando a instalação';
$string['admindirerror'] = 'O directório da administração especificado está errado';
$string['admindirname'] = 'Directório de Administração';
$string['admindirsetting'] = 'Alguns servidores Web utilizam /admin como endereço especial para acedera um painel de controlo, ou semelhante. Desafortunadamente, isso cria conflictos com o endereço padrão das páginas de gestão do Moodle. Poderá resolver o problema renomeando o directório admin na sua instalação do Moodle, e escrevendo aqui o novo nome que utilizou. Por exemplo:<br /><br /><b>moodleadmin</b><br /><br />
Assim resolverá o acesso às páginas de gestão do Moodle.';
$string['admindirsettinghead'] = 'A configurar o directório de gestão...';
$string['admindirsettingsub'] = 'Alguns servidores Web utilizam /admin como endereço especial para aceder a um painel de controlo, ou semelhante. Isso cria conflictos com o endereço padrão das páginas de gestão do Moodle. Poderá resolver o problema renomeando o directório admin na sua instalção do Moodle, e escrevendo aqui o novo nome que utilizou. Por exemplo:<br /><br /><b>moodleadmin</b><br /><br />
Assim resolverá o acesso às páginas de gestão do Moodle.';
$string['adminemail'] = 'Correio electrónico';
$string['adminfirstname'] = 'Nome:';
$string['admininfo'] = 'Dados do administrador:';
$string['adminlastname'] = 'Apelido:';
$string['adminpassword'] = 'Senha:';
$string['adminusername'] = 'Nome de utilizador:';
$string['askcontinue'] = 'Continuar (yes/no):';
$string['availabledbtypes'] = 'Tipos de bases de dados disponíveis';
$string['availablelangs'] = 'Lista de línguas disponíveis';
$string['cannotconnecttodb'] = 'Não é possível aceder à base de dados';
$string['caution'] = 'Advertência';
$string['checkingphpsettings'] = 'A verificar definições do PHP';
$string['chooselanguage'] = 'Escolha uma língua';
$string['chooselanguagehead'] = 'Escolha uma língua';
$string['chooselanguagesub'] = 'Escolha a língua substituta';
$string['compatibilitysettings'] = 'A conferir a configuração do PHP...';
$string['compatibilitysettingshead'] = 'A conferir a configuração do PHP...';
$string['compatibilitysettingssub'] = 'A conferir a língua substituta...';
$string['configfilecreated'] = 'Ficheiro de configuração criado com êxito';
$string['configfiledoesnotexist'] = 'O ficheiro de configuração não existe!!!';
$string['configfilenotwritten'] = 'O script de instalação não conseguiu criar o ficheiro config.php em forma automática, provavelmente por não ter autorização para escrever no directório do Moodle. Poderá copiar manualmente o código que se segue para um ficheiro que deverá chamar config.php, no directório principal do Moodle.';
$string['configfilewritten'] = 'O ficheiro config.php foi criado com sucesso';
$string['configurationcomplete'] = 'Configuração concluida';
$string['configurationcompletehead'] = 'Configuração concluida';
$string['configurationcompletesub'] = 'O Moodle tentou gravar a sua configuração  instalação do Moodle.';
$string['configurationfileexist'] = 'O ficheiro de configuração já existe!';
$string['creatingconfigfile'] = 'A criar ficheiro de configuração';
$string['database'] = 'Base de dados';
$string['databasecreationsettings'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados será criada automaticamente pelo programa de instalação, usando as seguintes definições:<br />
<br /><br />
<b>Tipo:</b> o instalador selecciona inicialmente \"mysql\"<br />
<b>Servidor:</b> nome do servidor; o instalador selecciona inicialmente \"localhost\"<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados; o instalador selecciona inicialmente \"root\"<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasecreationsettingshead'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados será criada automaticamente pelo programa de instalação, usando as seguintes definições:';
$string['databasecreationsettingssub'] = '<b>Tipo:</b> o instalador selecciona inicialmente \"mysql\"<br />
<b>Servidor:</b> nome do servidor; o instalador selecciona inicialmente \"localhost\"<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados; o instaldor selecciona inicialmente \"root\"<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasehost'] = 'Servidor da base de dados:';
$string['databasename'] = 'Nome da base de dados:';
$string['databasepass'] = 'Senha da base de dados:';
$string['databasesettings'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados deverá ter sido criada previamente, incluindo um nome de utilizador e senha para acedé-la.<br />
<br /><br />
<b>Tipo:</b>mysql ou postgres7<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasesettingsformoodle'] = 'Definições da base de dados para o Moodle';
$string['databasesettingshead'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados deverá ter sido criada previamente, incluindo um nome de utilizador e senha para acedé-la.';
$string['databasesettingssub'] = '<b>Tipo:</b>mysql ou postgres7<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasesettingssub_mssql'] = '<b>Tipo:</b> SQL*Server (sem UTF-8) <b><font color=\"red\">Experimental! (não deverá ser usado em produção)</font></b><br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (obrigatório)';
$string['databasesettingssub_mssql_n'] = '<b>Tipo:</b> SQL*Server (com UTF-8) <br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (obrigatório)';
$string['databasesettingssub_mysql'] = '<b>Tipo:</b> MySQL<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (optativo)';
$string['databasesettingssub_mysqli'] = '<b>Tipo:</b> MySQL Melhorado<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (optativo)';
$string['databasesettingssub_oci8po'] = '<b>Tipo:</b> Oracle<br />
<b>Servidor:</b> não se aplica; deverá ficar em branco<br />
<b>Nome:</b> nome dado à logação tnsnames.ora<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (obrigatório; máx. 2 caracteres)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tipo:</b> SQL*Server (sobre ODBC) <b><font color=\"red\">Experimental! (não deverá ser usado em produção)</font></b><br />
<b>Servidor:</b> nome do servidor DSN no painel de controlo do ODBC<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (obrigatório)';
$string['databasesettingssub_postgres7'] = '<b>Tipo:</b> PostgreSQL<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para aceder à base de dados<br />
<b>Senha:</b> para aceder à base de dados<br />
<b>Prefixo das tabelas:</b> um prefixo para os nomes de todas as tabelas na base de dados (obrigatório)';
$string['databasesettingswillbecreated'] = '<b>Nota:</b> O instalador tentará criar a base de dados automaticamente, se ainda não existir.';
$string['databasetype'] = 'Tipo de base de dados';
$string['databaseuser'] = 'Utilizador da base de dados:';
$string['dataroot'] = 'Directório de dados';
$string['datarooterror'] = 'Não foi possível encontrar ou criar o directório de dados que indicou. Terá que ou corrigir o caminho que indicou, ou criar o directório manualmente.';
$string['dbconnectionerror'] = 'Não foi possível estabelecer a ligação à base de dados que indicou. Por favor verifique as definições dessa base de dados.';
$string['dbcreationerror'] = 'Erro na criação da base de dados. Não foi possível criar a base de dados com o nome e definições que indicou.';
$string['dbhost'] = 'Servidor';
$string['dbpass'] = 'Senha';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dbtype'] = 'Tipo';
$string['dbwrongencoding'] = 'A base de dados seleccionada está a funcionar com uma codificação de caracteres não recomendada ($a). Seria melhor usar uma base de dados com codificação Unicode (UTF-8). De qualquer forma, poderá proceder com a base de dados que indicou, seleccionando \"Não testar codificação da Base de Dados\" aqui em baixo, mas poderá ter problemas no futuro.';
$string['dbwronghostserver'] = 'Deverá usar regras de \"Servidor\" como se explica acima.';
$string['dbwrongnlslang'] = 'A variável de configuração NLS_LANG no seu servidor Web deverá usar os caracteres AL32UTF8. Consulte como configurar correctamente o OCI8, na documentação do PHP.';
$string['dbwrongprefix'] = 'Deverá usar um \"Prefixo das Tabelas\" como se explica acima.';
$string['directorysettings'] = '<p>Por favor confira as localizações para esta instalação do Moodle</p>

<p><b>Endereço Web:</b>
Indique o endereço web completo que será usado para aceder ao Moodle. Se o seu sítio pode ser acedido com vários URL diferentes, seleccione o que seja mais natural para os alunos que usarem o Moodle. Não inclua a barra (/) no fim do URL.</p>

<p><b>Directório do Moodle:</b>
Indique o caminho completo do directório desta instalação, no disco do servidor. Tenha atenção com a distinção entre maiúsculas e minúsculas.</p>

<p><b>Directório de dados:</b>
Precisa de um local onde armazenar os ficheiros enviados para o Moodle. Esse directório deverá dar permissões de escrita e leitura ao utilizador que estiver a executar o servidor Web (geralmente, \'nobody\', \'apache\' ou \'www-data\'), mas não deverá ser acessível directamente via Web.</p>';
$string['directorysettingshead'] = 'Por favor confira as localizações para esta instalação do Moodle';
$string['directorysettingssub'] = '<b>Endereço Web:</b>
Indique o endereço web completo que será usado para aceder ao Moodle. Se o seu sítio pode ser acedido com vários URL diferentes, seleccione o que seja mais natural para os alunos que usarem o Moodle. Não inclua a barra (/) no fim do URL.
<br />
<br />
<b>Directório do Moodle:</b>
Indique o caminho completo do directório desta instalação, no disco do servidor. Tenha atenção com a distinção entre maiúsculas e minúsculas.
<br />
<br />
<b>Directório de dados:</b>
Precisa de um local onde armazenar os ficheiros enviados para o Moodle. Esse directório deverá dar permissões de escrita e leitura ao utilizador que estiver a executar o servidor Web (geralmente, \'nobody\', \'apache\' ou \'www-data\'), mas não deverá ser acessível directamente via Web.';
$string['dirroot'] = 'Directório do Moodle';
$string['dirrooterror'] = 'O \'Directório do Moodle\' indicado parece estar errado; não conseguimos encontrar uma instalação do Moodle nesse directório. O nome foi alterado para o que se mostra em baixo';
$string['disagreelicense'] = 'A actualização não pode continuar devido à não aceitação da licença GPL!';
$string['download'] = 'Descarregar';
$string['downloadlanguagebutton'] = 'Descarregar o pacote linguístico \"$a\"';
$string['downloadlanguagehead'] = 'Descarregar pacote linguístico';
$string['downloadlanguagenotneeded'] = 'Pode continuar com o processo de instalação usando o pacote linguístico por omissão, \"$a\".';
$string['downloadlanguagepack'] = 'Quer descarregar pacotes linguísticos agora (yes/no):';
$string['downloadlanguagesub'] = 'Agora, se quiser, pode descarregar um pacote linguístico e continuar com o processo de instalação nessa língua.<br /><br />Se não conseguir descarregar o pacote linguístico, o processo de instalação continuará em inglês. (Uma vez a instalação for concluida, terá a oportunidade de descarregar e instalar pacotes linguísticos adicionais.)';
$string['downloadsuccess'] = 'Pacote linguístico descarregado com êxito';
$string['doyouagree'] = 'Esta de acordo ? (yes/no)';
$string['environmenthead'] = 'A verificar o seu ambiente ...';
$string['environmentsub'] = 'Estamos a verificar que os vários componentes do seu sistema estejam de acordo com os requerimentos do Moodle';
$string['errorsinenvironment'] = 'Erros no ambiente!';
$string['fail'] = 'Falha';
$string['fileuploads'] = 'Transferência de ficheiros para o servidor';
$string['fileuploadserror'] = 'Isto deveria estar activo';
$string['fileuploadshelp'] = '<p>A transferência de ficheiros para o servidor parece estar deshabilitada no seu servidor.</p>

<p>Moodle poderá ainda ser instalado, mas sem essa funcionalidade, não poderá enviar ficheiros de uma disciplina nem fotografias de utilizadores.</p>

<p>Para activar a transferência de ficheiros terá que editar (ou pedir ao administrador do sistema que o faça) o ficheiro principal php.ini do seu sistema, modificando o valor de <b>file_upload</b> para \'1\', e reiniciando o servidor Web.</p>';
$string['gdversion'] = 'Versão do GD';
$string['gdversionerror'] = 'A biblioteca GD deverá estar instalada para processar e criar imagens.';
$string['gdversionhelp'] = '<p>O seu servidor não parece ter GD instalado.</p>

<p>GD é uma biblioteca que o PHP precisa para permitir que o Moodle processe imagens (por exemplo, para criar os ícones com as fotos dos utilizadores). Moodle poderá ainda funcionar sem GD - simplesmente essas funcionalidades não estarão disponíveis.</p>

<p>Para adicionar GD ao PHP, em Unix, compile o PHP usando o parâmetro --with-gd.</p>

<p>Em Windows, normalmente poderá editar php.ini e descomentar a linha que faz referência a php_gd2.dll.</p>';
$string['globalsquotes'] = 'Variáveis globais manipuladas em forma insegura';
$string['globalsquoteserror'] = 'Corrija as suas definições do PHP: desactive o register_globals e/ou active magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Não se recomenda a combinação simultânea de Magic Quotes GPC desactivada e Register Globals activa.</p>

<p>A definição recomendada no seu ficheiro php.ini é <b>magic_quotes_gpc = On</b> e <b>register_globals = Off</b>

<p>Se não tiver acesso ao seu ficheiro php.ini, poderá colocar as linhas seguintes num ficheiro com nome .htaccess, no seu directório do Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['inputdatadirectory'] = 'Directório de dados:';
$string['inputwebadress'] = 'Endereço Web:';
$string['inputwebdirectory'] = 'Directório do Moodle:';
$string['installation'] = 'Instalação';
$string['installationiscomplete'] = 'A instalação foi concluida!';
$string['invalidargumenthelp'] = 'Erro: Argumento(s) inválido(s)
Uso: \$ php cliupgrade.php OPÇÕES
Para obter ajuda use a opção --help';
$string['invalidemail'] = 'Endereço de correio inválido';
$string['invalidhost'] = 'Servidor inválido';
$string['invalidint'] = 'Erro: o valor não é um inteiro';
$string['invalidintrange'] = 'Erro: O valor está fora dos limites permitidos';
$string['invalidpath'] = 'Caminho inválido';
$string['invalidsetelement'] = 'Erro: O valor dado não está entre as opções dadas';
$string['invalidtextvalue'] = 'Valor do texto inválido';
$string['invalidurl'] = 'URL inválido';
$string['invalidvalueforlanguage'] = 'Valor inválido para a opção --lang. Escreva --help para obter ajuda';
$string['invalidyesno'] = 'Erro: o valor não é um argumento válido yes/no';
$string['langdownloaderror'] = 'A língua \"$a\" não foi instalada. O processo de instalação continuará em inglês.';
$string['langdownloadok'] = 'A língua \"$a\" foi instalada com êxito. O processo de instalação continuará nessa língua.';
$string['locationanddirectories'] = 'Localização e directórios';
$string['magicquotesruntime'] = '\"Magic Quotes Run Time\"';
$string['magicquotesruntimeerror'] = 'Isto deveria estar desactivado';
$string['magicquotesruntimehelp'] = '<p>\"Magic Quotes Run Time\" deveria ser desactivado para que o Moodle funcione correctamente</p>

<p>Normalmente, encontra-se desactivado por omissão...confira o estado de <b>magic_quotes_runtime</b> no seu ficheiro php.ini.</p>

<p>Se não tiver acesso ao seu ficheiro php.ini, poderá colocar a linha seguinte num ficheiro com nome .htaccess, no seu directório do Moodle:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Limite de memoria';
$string['memorylimiterror'] = 'O limite de memoria imposto ao PHP é muito baixo... poderá ter problemas mais tarde.';
$string['memorylimithelp'] = '<p>Actualmente o seu servidor impõe ao PHP um limite de memoria de $a.</p>

<p>Isso poderá causar mais tarde problemas de memoria, especialmente se tiver um grande número de módulos activos e/ou um número elevado de utilizadores.</p>

<p>Recomendamos que configure o PHP com um limite maior, por exemplo, 40M.
Existem várias formas que pode tentar para fazer essa alteração:</p>
<ol>
<li>Se poder, recompile o PHP com <i>--enable-memory-limit</i>.
Isso permitirá que o próprio Moodle modifique o limite de memoria.</li>
<li>Se tiver acesso ao seu ficheiro php.ini, poderá modificar o valor de <b>memory_limit</b> para algo como 40M. Se não tiver acesso, poderá pedir ao adiminstrador do seu sistema que o faça</li>
<li>Em alguns servidores PHP poderá criar um ficheiro .htaccess, no directório do Moodle, com a linha seguinte:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>No entanto, em alguns servidores isso faz com que nenhuma página PHP funcione (verá erros quando tentar ver as páginas) e terá que apagar o ficheiro .htaccess.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server com suporte UTF-8 (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'O PHP não tem sido configurado correctamente com a extensão MSSQL, para que possa comunicar-se com o SQL*Server. Por favor confira o ficheiro php.ini ou recompile o PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'O PHP não está configurado correctamente com a extensão MySQL, para que possa comunicar-se com o MySQL. Por favor verifique o seu ficheiro php.ini ou recompile o PHP.';
$string['mysqli'] = 'MySQL Melhorado (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'O PHP não está configurado correctamente com a extensão MySQLi, para que possa comunicar-se com o MySQL. Por favor verifique o seu ficheiro php.ini ou recompile o PHP. A extensão MySQLi não está disponível no PHP 4.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'O PHP não está configurado correctamente com a extensão OCI8, para que possa comunicar-se com o Oracle. Por favor confira o ficheiro php.ini ou recompile o PHP.';
$string['odbc_mssql'] = 'SQL*Server sobre ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'O PHP não está configurado correctamente com a extensão ODBC, para que possa comunicar-se com o SQL*Server. Por favor confira o ficheiro php.ini ou recompile o PHP.';
$string['pass'] = 'Passa';
$string['pgsqlextensionisnotpresentinphp'] = 'O PHP não está configurado correctamente com a extensão PGSQL, para que possa comunicar-se com o PostgreSQL. Por favor confira o ficheiro php.ini ou recompile o PHP.';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionerror'] = 'A versão do PHP deverá ser, pelo menos, 4.3.0 ou 5.1.0 (5.0.x tem alguns problemas)';
$string['phpversionhelp'] = '<p>Moodle precisa da vesão 4.3.0 ou 5.1.0 do PHP (5.0.x produz vários problemas).</p>
<p>Actualmente está a utilizar a versão $a</p>
<p>Deverá actualizar o PHP ou migrar para outro servidor com uma versão do PHP mais recente!</p>
(No caso da versão 5.0.x, poderá regredir para uma versão 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Para obter informação sobre esta versão do Moodle, consulte as notas de lançamento em $a';
$string['safemode'] = 'Modo seguro';
$string['safemodeerror'] = 'Moodle poderá ter problemas com o modo seguro';
$string['safemodehelp'] = '<p>Moodle poderá ter uma variedade de problemas com o modo seguro activo; um dos piores problemas é que provavelmente não terá autorização para criar novos ficheiros.</p>

<p>Geralmente o modo seguro só é activado por alguns  administradores paranoicos de sítios Web públicos, assim que poderá ter que procurar outra entidade para alojar o seu sítio Moodle.</p>

<p>Se quiser, pode tentar avançar com a instalação, mas esteja preparado para possíveis problemas mais tarde.</p>';
$string['selectlanguage'] = 'A seleccionar uma língua para a instalação';
$string['sessionautostart'] = 'Auto-início de sessão';
$string['sessionautostarterror'] = 'Isto deveria estar desactivado';
$string['sessionautostarthelp'] = 'Moodle precisa do suporte de sessões e não funciona sem ele.</p>

<p>O uso de sessões poderá ser activado no ficheiro php.ini... procure o parâmetro session.auto_start.</p>';
$string['sitefullname'] = 'Nome completo do sítio:';
$string['siteinfo'] = 'Pormenores do sítio:';
$string['sitenewsitems'] = 'Notícias:';
$string['siteshortname'] = 'Nome curto do sítio:';
$string['sitesummary'] = 'Sumário do sítio:';
$string['skipdbencodingtest'] = 'Não testar codificação da base de dados';
$string['tableprefix'] = 'Prefixo das tabelas:';
$string['upgradingactivitymodule'] = 'Actualização do módulo de actividades';
$string['upgradingbackupdb'] = 'Actualização da base de dados de cópias de segurança';
$string['upgradingblocksdb'] = 'Actualização da base de dados de blocos';
$string['upgradingblocksplugin'] = 'Actualização do plugin de blocos';
$string['upgradingcompleted'] = 'Actualização completa ...';
$string['upgradingcourseformatplugin'] = 'Actualização do plugin de formato de disciplinas';
$string['upgradingenrolplugin'] = 'Actualização do plugin de inscrições';
$string['upgradinggradeexportplugin'] = 'Actualização do plugin de exportação de notas';
$string['upgradinggradeimportplugin'] = 'Actualização do plugin de importação de notas';
$string['upgradinggradereportplugin'] = 'Actualização do plugin de relatório de notas';
$string['upgradinglocaldb'] = 'Actualização da base de dados local';
$string['upgradingmessageoutputpluggin'] = 'Actualização do plugin de saída de mensagens';
$string['upgradingqtypeplugin'] = 'Actualização do plugin de tipo de perguntas';
$string['upgradingrpcfunctions'] = 'Actualização das funções RPC';
$string['usagehelp'] = 'Sinopse:
$php cliupgrade.php OPTIONS

OPÇÕES
--lang Língua válida para a instalação. Por omissãoValid inglês (en)
--webaddr Endereço Web para o sítio Moodle
--moodledir Localização do directório Web do Moodle
--datadir Localização do directório de dados para o Moodle (não deverá estar vissível na Web)
--dbtype Tipo de base de dados. Por omissão, mysql
--dbhost Servidor da base de dados. Por omissão, localhost
--dbname Nome da base de dados. Por omissão, moodle
--dbuser Utilizador que acede à base de dados. Por omissão, em branco
--dbpass Senha para aceder à base de dados. Por omissão, em branco
--prefix Prefixo para as tabelas na base de dados acima. Por omissão, mdl
--verbose 0 Sem saída, 1 Saída de sumário (por omissão), 2 Saída com pormenores
--interactivelevel 0 Sem interacção, 1 semi-interactivo (por omissão), 2 interactivo
--agreelicense Yes(por omissão) ou No
--confirmrelease Yes(por omissão) ou No
--sitefullname Nome completo para o sítio. Por omissão: Sítio Moodle (Por favor altere o nome!!)
--siteshortname Nome curto para o sítio. Por omissão, moodle
--sitesummary Sumário do sítio. Por omissão, em branco
--adminfirstname Nome do administrador. Por omissão, Admin
--adminlastname Apelido do administrador. Por omissão, User
--adminusername Nome de utitlizador para o administrador. Por omissão, admin
--adminpassword Senha para o administrador. Por omissão, admin
--adminemail Endereço de correio do administrador. Por omissão, root@localhost
--help mostra esta ajuda

Uso:
$php cliupgrade.php --lang=en --webaddr=http://www.example.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost --dbname=moodle --dbuser=root --prefix=mdl --agreelicense=yes --confirmrelease=yes --sitefullname=\"O meu sítio Moodle\" --siteshortname=moodle --sitesummary=siteforme --adminfirstname=Admin --adminlastname=User --adminusername=admin --adminpassword=admin --adminemail=admin@example.com --verbose=1 --interactivelevel=2';
$string['versionerror'] = 'O utilizador abortou, devido a erro de versão';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Está a ver esta página porque o pacote <strong>$a->packname $a->packversion</strong> foi instalado e posto a funcionar com sucesso no seu computador. Parabens!';
$string['welcomep30'] = 'Esta versão do <strong>$a->installername</strong> inclui aplicações para criar um ambiente onde o <strong>Moodle</strong> possa funcionar, nomeadamente:';
$string['welcomep40'] = 'Este pacote também inclui <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'A utilização de todas as aplicações neste pacote está regida pelas respectivas licenças. O pacote <strong>$a->installername</strong> completo é <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> distribuido nos termos da licença <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'As páginas seguintes vão conduzí-lo por alguns passos simples de seguir para configurar o <strong>Moodle</strong> no seu computador. Poderá aceitar as definições seleccionadas por omissão, ou, opcionalmente, usar outras definições mais apropriadas às suas necessidades.';
$string['welcomep70'] = 'Clique no botão \"Seguinte\" em baixo, para continuar com a configuração do <strong>Moodle</strong>.';
$string['welcometext'] = '--Bem-vindo ao instalador do Moodle por linha de comandos--';
$string['writetoconfigfilefaild'] = 'Erro: A gravação do ficheiro de configuração falhou';
$string['wwwroot'] = 'Endereço Web';
$string['wwwrooterror'] = 'O \'Endereço Web\' não parece ser válido - esta instalação do Moodle não parece estar lá. O endereço foi modificado para o que se mostra em baixo.';
$string['yourchoice'] = 'A sua escolha:';

?>
