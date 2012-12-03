<?PHP // $Id: grades.php,v 1.23 2010/06/28 14:40:00 ueu_ueu Exp $ 
      // grades.php - created with Moodle 1.9.4+ (Build: 20090218) (2007101541)


$string['activities'] = 'Jarduerak';
$string['addcategory'] = 'Gehitu kategoria';
$string['addcategoryerror'] = 'Ezin izan da kategoria gehitu.';
$string['addexceptionerror'] = 'Errore bat gertatu da userid:gradeitem-i salbuespena gehitzean';
$string['addfeedback'] = 'Gehitu feedbacka';
$string['addgradeletter'] = 'Gehitu kalifikazio-letra';
$string['addidnumbers'] = 'Gehitu ID zenbakiak';
$string['additem'] = 'Gehitu kalifikazio-elementua';
$string['addoutcome'] = 'Gehitu helburua';
$string['addoutcomeitem'] = 'Gehitu helburu-elementua';
$string['addscale'] = 'Gehitu eskala';
$string['aggregateextracreditmean'] = 'Kalifikazioen batezbestekoa (aparteko kredituekin)';
$string['aggregatemax'] = 'Kalifikazio altuena';
$string['aggregatemean'] = 'Kalifikazioen batezbestekoa';
$string['aggregatemedian'] = 'Kalifikazioen mediana';
$string['aggregatemin'] = 'Kalifikazio baxuena';
$string['aggregatemode'] = 'Kalifikazioen modua';
$string['aggregateonlygraded'] = 'Hutsik ez dauden kalifikazioak bakarrik gehitu';
$string['aggregateonlygradedhelp'] = 'Ez dauden kalifikazioak gutxieneko kalifikazio gisa erabiliko dira edo ez dira batuketan sartzen.';
$string['aggregateoutcomes'] = 'Sartu helburuak agregazioan';
$string['aggregateoutcomeshelp'] = 'Helburuak batuketan sartzeak ez du emango agian nahi den kalifikazio orokorra; aukeran duzu, beraz, sartu ahal ez sartu.';
$string['aggregatesonly'] = 'Agregatutakoak baino ez';
$string['aggregatesubcats'] = 'Agregazioan azpikategoriak sartu';
$string['aggregatesubcatshelp'] = 'Agregazioa zuzenean azpian dauden beheragokoekin egitea da ohikoena baina posible da kalifikazioak azpikategoria guztietan agregatzea agregatutako beste kalifikazio batzuk kanpo utzita.';
$string['aggregatesum'] = 'Kalifikazioen batura';
$string['aggregateweightedmean'] = 'Kalifikazioen batezbesteko ponderatua';
$string['aggregateweightedmean2'] = 'Kalifikazioen batezbesteko ponderatu sinplea';
$string['aggregation'] = 'Agregazioa';
$string['aggregation_link'] = 'kalifikazioa/agregazioa';
$string['aggregationcoef'] = 'Agregazio-koefizientea';
$string['aggregationcoefextra'] = 'Aparteko kredituaren koefizientea';
$string['aggregationcoefextra_link'] = 'kalifikazioa/agregazioa';
$string['aggregationcoefextrahelp'] = 'Kalifikazio-elementu honi agregaziorako ezarriko zaion aparteko kreditua';
$string['aggregationcoefextrasum'] = 'Aparteko kreditua';
$string['aggregationcoefextrasumhelp'] = 'Kalifikazio-elementu honi agregaziorako ezarriko zaion aparteko kreditua';
$string['aggregationcoefweight'] = 'Elementuaren pisua';
$string['aggregationcoefweight_link'] = 'kalifikazioa/agregazioa';
$string['aggregationcoefweighthelp'] = 'Gainontzeko kalifikazio-elementuekiko agregazioan kalifikazio-elementu honek kalifikazioetarako izango duen pisua';
$string['aggregationhelp'] = 'Ikastaro bateko ikasle guztiei kalifikazioak agregatzeko erabilitako estrategia';
$string['aggregationposition'] = 'Agregazioaren kokapena';
$string['aggregationview'] = 'Ikusi agregazioa';
$string['allgrades'] = 'Kalifikazio guztiak kategoriaka';
$string['allstudents'] = 'Ikasle guztiak';
$string['allusers'] = 'Erabiltzaile guztiak';
$string['autosort'] = 'Automatikoki ordenatu';
$string['availableidnumbers'] = 'Eskura dauden ID zenbakiak';
$string['average'] = 'Batezbestekoa';
$string['averagesdecimalpoints'] = 'Hamartarrak batezbestekoetan';
$string['averagesdisplaytype'] = 'Batezbestekoak erakusteko modua';
$string['backupwithoutgradebook'] = 'Segurtasun-kopiak ez ditu Kalifikazio-liburuaren ezarpenak';
$string['badgrade'] = 'Emandako kalifikazioak ez du balio';
$string['badlyformattedscale'] = 'Mesedez, idatzi komaz bereizitako balore-zerrenda (gutxienez bi balore behar dira).';
$string['baduser'] = 'Emandako erabiltzaileak ez du balio';
$string['bonuspoints'] = 'Bonifikazio-puntuak';
$string['bulkcheckboxes'] = 'Egiaztapen masiboetarako laukitxoak';
$string['calculatedgrade'] = 'Kalifikazioa kalkulatuta';
$string['calculation'] = 'Kalkulua';
$string['calculation_link'] = 'kalifikazioa/kalkulua';
$string['calculationadd'] = 'Gehitu kalkulua';
$string['calculationedit'] = 'Editatu kalkulua';
$string['calculationsaved'] = 'Kalkulua gordeta';
$string['calculationview'] = 'Ikusi kalkulua';
$string['cannotaccessgroup'] = 'Ezin dira eskuratu aukeratutako taldearen kalifikazioa, barkatu.';
$string['categories'] = 'Kategoriak';
$string['categoriesanditems'] = 'Kategoria eta elementuak';
$string['categoriesedit'] = 'Kategoria eta elementuak editatu';
$string['category'] = 'Kategoria';
$string['categoryedit'] = 'Editatu kategoria';
$string['categoryname'] = 'Kategoriaren izena';
$string['categorytotal'] = 'Kategorian guztira';
$string['categorytotalfull'] = '$a->category guztira';
$string['changedefaults'] = 'Berezko baloreak aldatu';
$string['changereportdefaults'] = 'Txostenaren berezko baloreak aldatu';
$string['chooseaction'] = 'Ekintza bat aukeratu...';
$string['choosecategory'] = 'Kategoria aukeratu';
$string['combo'] = 'Tabuladoreak eta zabaltzen den menua';
$string['compact'] = 'Konpaktatu';
$string['configaggregationposition'] = 'Agregazioaren zutabeak txostenean izango duen kokapena zehazten du';
$string['configaggregationview'] = 'Kategoria bakoitza hiru eratara erakuts daiteke: osorik (agregazioaren zutabea eta kalifikazio-elementuenak), agregazioaren zutabea bakarrik edo kalifikazio-elementuenak bakarrik.';
$string['configaveragesdecimalpoints'] = 'Batezbestekoen zutabe bakoitzean erakutsiko diren hamarren kopurua zehazten du. Heredatu aukeratuta, zutabe bakoitzerako aukeratutako erakusteko modua erabiliko da.';
$string['configaveragesdisplaytype'] = 'Zutabe bakoitzean batezbestekoak nola erakutsiko diren zehazten du. Heredatu aukeratuta, zutabe bakoitza erakusteko modua erabiliko da.';
$string['configcoursegradedisplaytype'] = 'Aukeratu ikastaro honetako kalifikazioak erakusteko berezko modua. Gunearen berezko balorea ere aukera dezakezu. Kalifikazioak kalifikazio erreal gisa, ehunekotan (gehinezko eta gutxienezkoen arabera) edo letratan (A,B,C...) eman daitezke. Letrak aukeratuta, zeure letrak eta bakoitzaren mugak ere aukera ditzakezu.';
$string['configdecimalpoints'] = 'Kalifikazio bakoitzerako erakutsiko diren hamarren kopurua zehazten du. Aukeratutako kalifikazio-elementuak ezezta dezake.';
$string['configdisablegradehistory'] = 'Lotutako kalifikazio-tauletan aldaketa-bilaketaren historiala desgaitu. Honek zertxobait arindu dezake zerbitzariaren funtzionamendua eta datu-basearen lekua mantendu';
$string['configenableajax'] = 'Kalifikatzailearen txostenari AJAX funtzionalitate geruza bat gehitzen dio, ohiko eragiketak arinduz. Erabiltzailearen nabigatzaileak Javascript-a aktibatuta izan behar du.';
$string['configenableoutcomes'] = 'Helburuetarako (Gaitasunak, Estandarrak, Irizpideak...) osagarria. Helburuekin lotutako eskala bat edo gehiago erabilita kalifikatuko dugula esan nahi du. Helburuak aktibatuta gune osoan kalifika daiteke era berezi honetan.';
$string['configexportdecimalpoints'] = 'Esportazioarako erakutsi beharreko hamarren kopurua. Esportazioan zehar alde batera utz daiteke.';
$string['configgradeboundary'] = 'Kalifikazioei letra bat ezartzeko batezbestekoaren muga (letra bidezko kalifikazioa erabiltzen bada).';
$string['configgradedisplaytype'] = 'Kalifikatzailearen eta erabiltzailearen txostenetan kalifikazioak nola erakutsiko diren zehazten du. Kalifikazioak oraingo kalifikazio gisa, ehunekotan (gehienezko eta gutxienezkoen arabera) edo letratan eman daitezke.';
$string['configgradeexportdisplaytype'] = 'Kalifikazioak kalifikazio erreal gisa, ehunekotan (gehienezko eta gutxienezkoen arabera) edo letratan (A,B,C...) eman daitezke esportaziorako. Esportazioan zehar alde batera utzi daiteke hau.';
$string['configgradehistorylifetime'] = 'Lotutako kalifikazio-tauletan izandako aldaketen historiala zenbat denboraz mantendu nahi duzun zehazten du. Ahal beste mantentzea gomendatzen da. Funtzionamendu-arazoak edo datu-basean espazio txikia baduzu, saiatu balore txikiagoa ipintzen.';
$string['configgradeitemadvanced'] = 'Aukera itzazu kalifikazio-elementuak editatzean aurreratu gisa erakutsi behar diren elementuak.';
$string['configgradeletter'] = 'Kalifikazio-maila bat irudikatzeko letra edo sinboloa.';
$string['configgradeletterdefault'] = 'Kalifikazio-maila bat irudikatzeko letra edo sinboloa. Utzi zuri guneko berezko balorea erabiltzeko (orain $a).';
$string['configgradepublishing'] = 'Esportazio eta inportazioetan argitaratzea gaitu: esportatutako kalifikazioak URL batera joanda lor daitezke, Moodle gune batean gorde beharrik izan gabe. Kalifikazioak URL horretara joanda inporta daitezke (horrek ez du esan nahi Moodle gune batek beste batek argitaratutako kalifikazioak inporta ditzakeenik). Berez, kudeatzaileak bakarrik erabil dezake funtzio hau; mesedez, erakutsi erabiltzaileei beste rol batzuei hau egiteko gaitasunak eman aurretik.';
$string['confighiddenasdate'] = 'Erabiltzaileak ezin baditu ezkutuko kalifikazioak erakutsi bidalketa data \'-\'-en ordez.';
$string['confighideforcedsettings'] = 'Ez erakutsi behartutako ezarpenak UI kalifikazioan.';
$string['configincludescalesinaggregation'] = 'Ikastaro guztietan kalifikazio-liburu guztietan agregatutako kalifikazio guztietan eskalak zenbaki gisa sartuko diren erabaki ahal duzu. KONTUZ: ezarpen hau aldatzen baduzu kalifikazio guztiak berriz kalkulatuko dira.';
$string['configmeanselection'] = 'Aukeratu kalifikaziorik gabeko gelaxkak zutabe bakoitzaren batez bestekoa kalkulatzeko erabiliko diren ala ez.';
$string['configprofilereport'] = 'Erabiltzailearen profil-orrian erabilitako kalifikazio-txostena.';
$string['configquickgrading'] = 'Kalifikazio azkarrak kalifikazio-gelaxka bakoitzari testu bat gaineratzen dio kalifikatzailearen txostenean, aldi berean hainbat kalifikazio editatzeko aukera emanez. Eguneratu botoiari saka diezaiokezu aldaketak guztiak batera egiteko banan banan egin beharrean.';
$string['configrangesdecimalpoints'] = 'Kalifikazio zutabe baten gainean erakutsi beharreko hamarren kopurua. Elementua kalifikatuta anula daiteke ezarpen hau.';
$string['configshowactivityicons'] = 'Jardueraren izenaren ondoan jarduera-ikonoak erakutsi ala ez.';
$string['configshowaverages'] = 'Zutabe bakoitzerako batezbestekoa erakutsi ala ez.';
$string['configshowcalculations'] = 'Kalifikazio-elementu edo kategoria bakoitzaren ondoan ikonoak, kalkulatutako elementuen gainean tresnak eta zutabe bat kalkulatua delako adierazlea erakutsi ala ez.';
$string['configshoweyecons'] = 'Kalifikazio bakoitzaren ondoan erakutsi/ezkutatu ikonoa erakutsi ala ez (erabiltzaileak ikus dezakeen kontrolatzeko).';
$string['configshowgroups'] = 'Talde bakoitzaren batezbestekoa erakusteko';
$string['configshowuserimage'] = 'Kalfikatzailearen txostenean izenaren ondoren erabiltzailearen profilaren irudia erakutsi ala ez';
$string['configstudentsperpage'] = 'Orriko erakutsi beharreko ikasle-kopurua kalifikatzailearen txostenean';
$string['configstudentsperpagedefault'] = 'Orriko erakutsi beharreko ikasle-kopurua kalifikatzailearen txostenean. Utzi zuri gunearen berezko balorea erabiltzeko (orain $a).';
$string['contract'] = 'Uzkurtu kategoria';
$string['controls'] = 'Kontrolak';
$string['courseavg'] = 'Ikastaroaren batezbestekoa';
$string['coursegradecategory'] = 'Ikastaroaren kalifikazio-kategoria';
$string['coursegradedisplaytype'] = 'Ikastaroaren kalifikazioak erakusteko modua';
$string['coursegradedisplayupdated'] = 'Ikastaroaren kalifikazioak erakusteko modua eguneratu da.';
$string['coursegradesettings'] = 'Ikastaroaren kalifikazioen ezarpenak';
$string['coursename'] = 'Ikastaroaren izena';
$string['coursescales'] = 'Ikastaroaren eskalak';
$string['coursesettings'] = 'Ikastaroaren ezarpenak';
$string['coursetotal'] = 'Ikastaroan guztira';
$string['createcategory'] = 'Kategoria sortu';
$string['createcategoryerror'] = 'Ezin da kategoria berririk sortu';
$string['creatinggradebooksettings'] = 'Kalifikazio-liburuaren ezarpenak sortzen';
$string['csv'] = 'CSV';
$string['curveto'] = 'Hona borobildu';
$string['default'] = 'Berezkoa';
$string['defaultprev'] = 'Berezko balorea ({$a})';
$string['deletecategory'] = 'Ezabatu kategoria';
$string['disablegradehistory'] = 'Kalifikazioen historia desgaitu';
$string['displaylettergrade'] = 'Notak letren bidez erakutsi';
$string['displaypercent'] = 'Erakutsi portzentajeak';
$string['displaypoints'] = 'Erakutsi puntuak';
$string['displayweighted'] = 'Kalifikazio neurtuak erakutsi';
$string['dropdown'] = 'Zabaltzen den menua';
$string['droplow'] = 'Baxuena baztertu';
$string['dropped'] = 'Baztertuta';
$string['dropxlowest'] = 'X baino baxuagorik kontuan ez hartu';
$string['dropxlowestwarning'] = 'Oharra: \'X baino baxuagorik kontuan ez hartu\' erabiltzen baduzu, kalifikazioak kategoriako item guztiak gehienezko puntuazio berez balioesten direla suposatzen du. Aipatutako baloreak ezberdinak badira, emaitzak edonolakoak izango dira.';
$string['duplicatescale'] = 'Bikoiztu eskala';
$string['edit'] = 'Editatu';
$string['editcalculation'] = 'Editatu kalkulua';
$string['editcalculationverbose'] = 'Kalkulua editatu honentzat: $a->category$a->itemmodule $a->itemname';
$string['editfeedback'] = 'Editatu feedbacka';
$string['editgrade'] = 'Editatu kalifikazioa';
$string['editgradeletters'] = 'Editatu kalifikazio-letrak';
$string['editoutcome'] = 'Editatu helburua';
$string['editoutcomes'] = 'Editatu helburuak';
$string['editscale'] = 'Editatu eskala';
$string['edittree'] = 'Kategoriak eta elementuak';
$string['editverbose'] = 'Editatu: $a->category$a->itemmodule $a->itemname';
$string['enableajax'] = 'Gaitu AJAX';
$string['enableoutcomes'] = 'Gaitu helburuak';
$string['encoding'] = 'Kodifikazioa';
$string['errorcalculationnoequal'] = 'Formulak berdin sinboloarekin hasi behar du (=1+2)';
$string['errorcalculationunknown'] = 'Formulak ez du balio';
$string['errorgradevaluenonnumeric'] = 'Kalifikazio altu edo baxurako balore ez zenbakiduna jaso da';
$string['errornocalculationallowed'] = 'Kalkuluak ez daude baimenduta elementu honetarako';
$string['errornocategorisedid'] = 'Ez da kategorizatu gabeko id-rik lortu.';
$string['errornocourse'] = 'Ez da ikastaroaren informaziorik lortu';
$string['errorreprintheadersnonnumeric'] = 'Birrinprimaketa-goialdeetarako balore ez zenbakiduna jaso da';
$string['errorsavegrade'] = 'Ezin da kalifikazioa gorde, barkatu.';
$string['errorupdatinggradecategoryaggregation'] = 'Errorea $a->id IDdun kalifikazio-kategoriaren agregazio-mota eguneratzean';
$string['errorupdatinggradeitemaggregationcoef'] = 'Errorea $a->id IDdun kalifikazio-elementuaren agregazio-koefizientea eguneratzean (pisua edo aparteko kreditua)';
$string['exceptions'] = 'Salbuespenak';
$string['excluded'] = 'Baztertutakoak';
$string['expand'] = 'Zabaldu kategoria';
$string['export'] = 'Esportatu';
$string['exportalloutcomes'] = 'Helburu guztiak esportatu';
$string['exportfeedback'] = 'Feedbacka ere sartu esportatzean';
$string['exportplugins'] = 'Esportatu pluginak';
$string['exportsettings'] = 'Esportatu ezarpenak';
$string['exportto'] = 'Esportatu hona:';
$string['extracredit'] = 'Aparteko kreditua';
$string['extracreditwarning'] = 'Oharra: Kategoriko elementu guztiak krediturik gabe uzten badira, notaren kalkuluan ez dira kontuan hartuko eta, ondorioz, puntuazio orokorrik ez da izango';
$string['feedback'] = 'Feedbacka';
$string['feedbackadd'] = 'Gehitu feedbacka';
$string['feedbackedit'] = 'Editatu feedbacka';
$string['feedbacksaved'] = 'Feedbacka gordeta';
$string['feedbackview'] = 'Ikusi feedbacka';
$string['finalgrade'] = 'Amaierako kalifikazioa';
$string['forceoff'] = 'Behartu: Off';
$string['forceon'] = 'Behartu: On';
$string['forelementtypes'] = 'aukeratutako $a-(r)entzat';
$string['forstudents'] = 'Ikasleentzat';
$string['full'] = 'Osoa';
$string['fullmode'] = 'Ikusi osoa';
$string['fullview'] = 'Ikusi osoa';
$string['generalsettings'] = 'Ezarpen orokorrak';
$string['grade'] = 'Kalifikazioa';
$string['gradeadministration'] = 'Kalifikazioen kudeaketa';
$string['gradebook'] = 'Kalifikazio-txostena';
$string['gradebookhiddenerror'] = 'Kalifikazio-liburua konfiguratuta dago ikasleei ezer ez erakusteko.';
$string['gradebookhistories'] = 'Kalifikazioen historiak';
$string['gradeboundary'] = 'Kalifikazio-letren muga';
$string['gradecategories'] = 'Kalifikazio-kategoriak';
$string['gradecategory'] = 'Kalifikazio-kategoria';
$string['gradecategoryhelp'] = 'Kalifikazio-kategoriei buruzko laguntza';
$string['gradecategorysettings'] = 'Kalifikazio-kategorien ezarpenak';
$string['gradedisplay'] = 'Kalifikazioa erakutsi';
$string['gradedisplaytype'] = 'Kalifikazioa erakusteko modua';
$string['gradedon'] = 'Kalifikatuta: {$a}';
$string['gradeexceptions'] = 'Notatik kanpo utzi';
$string['gradeexceptionshelp'] = 'Kalifikazioen salbuespenei buruzko laguntza';
$string['gradeexportdisplaytype'] = 'Kalifikazioen esportatzea erakusteko modua';
$string['gradehelp'] = 'Kalifikazioei buruzko laguntza';
$string['gradehistorylifetime'] = 'Kalifikazio-historiaren iraupena';
$string['gradeimport'] = 'Kalifikazioa inportatu';
$string['gradeitem'] = 'Kalifikazio-elementua';
$string['gradeitemaddusers'] = 'Kalifikaziotik kanpo utzi';
$string['gradeitemadvanced'] = 'Kalifikazio-elementuen aukera aurreratuak';
$string['gradeitemlocked'] = 'Kalifikazioa blokeatu da';
$string['gradeitemmembersselected'] = 'Kalifikaziotik kanpo daudenak';
$string['gradeitemnonmembers'] = 'Kalifikazioan daudenak';
$string['gradeitemremovemembers'] = 'Kalifikazioan barneratu';
$string['gradeitems'] = 'Kalifikazio-elementuak';
$string['gradeitemsettings'] = 'Kalifikazio-elementuen ezarpenak';
$string['gradeitemsinc'] = 'Sartu beharreko kalifikazio-elementuak';
$string['gradeletter'] = 'Kalifikazio-letra';
$string['gradeletterhelp'] = 'Letren bidezko kalifikazioari buruzko laguntza';
$string['gradeletternote'] = 'Kalifikazio-letra bat ezabatzeko, bakarrik letra horren<br /> hiru testu-eremuetako bat hustu eta aldaketa gorde.';
$string['gradeletters'] = 'Kalifikazio-letrak';
$string['gradelocked'] = 'Kalifikazioa blokeatuta dago';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Gehienezko kalifikazioa';
$string['grademin'] = 'Gutxieneko kalifikazioa';
$string['gradeoutcomeitem'] = 'Kalifikaziorako helburu-elementuak';
$string['gradeoutcomes'] = 'Helburuak';
$string['gradeoutcomescourses'] = 'Ikastaroaren helburuak';
$string['gradepass'] = 'Gainditzeko kalifikazioa';
$string['gradepreferences'] = 'Kalifikazioen hobespenak';
$string['gradepreferenceshelp'] = 'Kalifikazio-hobespenei buruzko laguntza';
$string['gradepublishing'] = 'Argitaratzea gaitu';
$string['gradereport'] = 'Kalifikazio-txostena';
$string['graderreport'] = 'Kalifikatzailearen txostena';
$string['grades'] = 'Kalifikazioak';
$string['gradesonly'] = 'Kalifikazioak baino ez';
$string['gradessettings'] = 'kalifikazioen ezarpenak';
$string['gradetype'] = 'Kalifikazio-mota';
$string['gradeview'] = 'Ikusi kalifikazioa';
$string['gradeweighthelp'] = 'Kalifikazioen neurketari buruzko laguntza';
$string['groupavg'] = 'Taldearen batezbestekoa';
$string['hidden'] = 'Ezkutuan';
$string['hiddenasdate'] = 'Ezkutuko kalifikazioetan bidalketa-data erakutsi';
$string['hiddenuntil'] = 'Noiz arte ezkutuan';
$string['hiddenuntildate'] = 'Noiz arte ezkutuan: $a';
$string['hideadvanced'] = 'Ezaugarri aurreratuak ezkutatu';
$string['hideaverages'] = 'Batezbestekoak ezkutatu';
$string['hidecalculations'] = 'Kalkuluak ezkutatu';
$string['hidecategory'] = 'Ezkutuan';
$string['hideeyecons'] = 'Ikonoak ezkutatu/erakutsi/ezkutatu';
$string['hidefeedback'] = 'Ezkutatu feedbacka';
$string['hideforcedsettings'] = 'Ezkutatu behartutako ezarpenak';
$string['hidegroups'] = 'Ezkutatu taldeak';
$string['hidelocks'] = 'Blokeoak ezkutatu';
$string['hidenooutcomes'] = 'Helburuak erakutsi';
$string['hidequickfeedback'] = 'Feedback azkarra ezkutatu';
$string['hideranges'] = 'Ibiltartea ezkutatu';
$string['hideverbose'] = 'Ezkutatu $a->category$a->itemmodule $a->itemname';
$string['highgradeascending'] = 'Kalifikazioak gorantz ordenatu';
$string['highgradedescending'] = 'Kalifikazioak beherantz ordenatu';
$string['highgradeletter'] = 'Altuak';
$string['identifier'] = 'Erabiltzailea honela identifikatu';
$string['idnumbers'] = 'Id zenbakiak';
$string['import'] = 'Inportatu';
$string['importcsv'] = 'inportatu CSV';
$string['importcustom'] = 'Inportatu pertsonalizatutako helburu bezala (ikastaro honetan baino ez)';
$string['importfailed'] = 'Inportatzeak kale egin du';
$string['importfeedback'] = 'Inportatu feedbacka';
$string['importfile'] = 'Inportatu fitxategia';
$string['importfrom'] = 'Inportatu hemendik:';
$string['importoutcomes'] = 'Inportatu helburuak';
$string['importoutcomesuccess'] = 'Inportatutako helburua ($a->name) #$a->id ID-arekin';
$string['importplugins'] = 'inportatu pluginak';
$string['importpreview'] = 'Inportatu aurrebista';
$string['importsettings'] = 'Inportatu ezarpenak';
$string['importstandard'] = 'Inportatu helburu estandar bezala';
$string['importsuccess'] = 'Kalifikazioak ondo inportatu dira';
$string['importxml'] = 'Inportatu XML';
$string['includescalesinaggregation'] = 'Eskalak ete sartu agregazioan';
$string['incorrectcourseid'] = 'Ikastaroaren IDa okerra da';
$string['incorrectcustomscale'] = '(Eskala pertsonalizatu ezegokia, mesedez aldatu.)';
$string['incorrectminmax'] = 'Gutxienenekoak gehienekoak baino txikiagoa izan behar du.';
$string['inherit'] = 'Heredatu';
$string['item'] = 'Elementua';
$string['iteminfo'] = 'Elementuaren informazioa';
$string['iteminfohelp'] = 'Elementuari buruzko informazioa sartzeko tartea. Sartutako testua ez da beste inon agertuko.';
$string['itemname'] = 'Elementuaren izena';
$string['itemnamehelp'] = 'Elementu honen izena, moduluak emandakoa';
$string['items'] = 'Elementuak';
$string['itemsedit'] = 'Editatu kalifikazio-elementua';
$string['keephigh'] = 'Mantendu altuena';
$string['keymanager'] = 'Pasahitzen kudeatzailea';
$string['letter'] = 'Letra';
$string['lettergrade'] = 'Letren bidezko kalifikazioa';
$string['lettergradenonnumber'] = 'Kalifikazio baxu edo/eta altu ez zenbakidunak';
$string['letterpercentage'] = 'Letra (portzentajea)';
$string['letterreal'] = 'Letra (erreala)';
$string['letters'] = 'Letrak';
$string['linkedactivity'] = 'Estekatutako jarduera';
$string['linktoactivity'] = 'Esteka $a->name jarduerara';
$string['lock'] = 'Blokeatu';
$string['locked'] = 'Blokeatuta';
$string['locktime'] = 'Blokeatu honen ondoren';
$string['locktimedate'] = 'Blokeatu honen ondoren: $a';
$string['lockverbose'] = 'Blokeatu $a->category$a->itemmodule $a->itemname';
$string['lowest'] = 'Baxuena';
$string['lowgradeletter'] = 'Baxua';
$string['manualitem'] = 'Eskuzko elementua';
$string['mapfrom'] = 'Mapa hemendik';
$string['mappings'] = 'Kalifikazio-elementuen mapeoa';
$string['mapto'] = 'Mapa hona';
$string['max'] = 'Altuena';
$string['maxgrade'] = 'Gehien. Kal.';
$string['meanall'] = 'Kalifikazio guztiak';
$string['meangraded'] = 'Hutsik ez dauden kalifikazioak';
$string['meanselection'] = 'Batezbestekoen zutaberako aukeratutako kalifikazioak';
$string['median'] = 'Ertaina';
$string['min'] = 'Baxuena';
$string['missingscale'] = 'Eskala aukeratu beha da';
$string['mode'] = 'Modua';
$string['moveselectedto'] = 'Aukeratutako elementuak hona mugitu:';
$string['movingelement'] = '$a mugitzen';
$string['multfactor'] = 'Biderkatzailea';
$string['mypreferences'] = 'Nire hobespenak';
$string['myreportpreferences'] = 'Nire txostenaren hobespenak';
$string['navmethod'] = 'Nabigazio-metodoa';
$string['neverdeletehistory'] = 'Ez ezabatu historiala inoiz';
$string['newcategory'] = 'Kategoria berria';
$string['newitem'] = 'Kalifikazio-elementu berria';
$string['newoutcomeitem'] = 'Helburu-elementu berria';
$string['newuserkey'] = 'Erabiltzaile-giltza berria';
$string['no'] = 'Ez';
$string['nocategories'] = 'Ikasgai honetako kalifikazio-kategoriak ez dira erantsi edo aurkitu';
$string['nocategoryname'] = 'Kategoriak ez du izenik';
$string['nocategoryview'] = 'Ikusteko kategoriarik ez';
$string['nocourses'] = 'Oraindik ez dago ikastarorik';
$string['noforce'] = 'Ez behartu';
$string['nogradeletters'] = 'Kalifikazio-letrak ez dira ezarri';
$string['nogradesreturned'] = 'Ez da kalifikaziorik itzuli';
$string['noidnumber'] = 'ID zenbakirik ez';
$string['nolettergrade'] = 'Ikusteko kalifikaziorik ez';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Zenbakidun balorea jaso da';
$string['nonweightedpct'] = '%% ez neurtua';
$string['nooutcome'] = 'Helbururik ez';
$string['nopublish'] = 'Ez argitaratu';
$string['norolesdefined'] = 'Definitu gabeko rolak hemen: Kudeaketa > Kalifikazioak > Ezarpen orokorrak > Kalifikatutako rolak';
$string['notteachererror'] = 'Irakasleek soilik erabil dezakete aukera hau.';
$string['numberofgrades'] = 'Kalifikazio-kopurua';
$string['onascaleof'] = '$a->grademin -tik $a->grademax -ra bitarteko eskalan';
$string['operations'] = 'Eragiketak';
$string['options'] = 'Aukerak';
$string['outcome'] = 'Helburua';
$string['outcomecategory'] = 'Helburuak kategorian sortu';
$string['outcomecategorynew'] = 'Kategoria berria';
$string['outcomecreate'] = 'Beste helburu bat gehitu';
$string['outcomedelete'] = 'Helburua ezabatu';
$string['outcomeitem'] = 'Helburuaren elementua';
$string['outcomeitemsedit'] = 'Helburuaren elementua editatu';
$string['outcomename'] = 'Helburuaren izena';
$string['outcomereport'] = 'Helburuen txostena';
$string['outcomes'] = 'Helburuak';
$string['outcomescourse'] = 'Ikastaroan erabilitako helburuak';
$string['outcomescoursecustom'] = 'Erabilitako pertsonalizatua (ez kendu)';
$string['outcomescoursenotused'] = 'Erabili gabeko estandarra';
$string['outcomescourseused'] = 'Erabilitako estandarra (ez kendu)';
$string['outcomescustom'] = 'Helburuak pertsonalizatu';
$string['outcomesstandard'] = 'Helburu estandarrak';
$string['outcomesstandardavailable'] = 'Eskura dauden helburu estandarrak';
$string['outcomestandard'] = 'Helburu estandarra';
$string['overallaverage'] = 'Batezbesteko orokorra';
$string['overridesitedefaultgradedisplaytype'] = 'Ez hartu kontuan gunearen berezko baloreak';
$string['parentcategory'] = 'Goragoko kategoria';
$string['pctoftotalgrade'] = '%% kalifikazio orokorretik';
$string['percent'] = 'Portzentajea';
$string['percentage'] = 'Portzentajea';
$string['percentageletter'] = 'Portzentajea (letra)';
$string['percentagereal'] = 'Portzentajea (erreala)';
$string['percentascending'] = 'Portzentajeak gorantz sailkatu';
$string['percentdescending'] = 'Portzentajeak beherantz ordenatu';
$string['percentshort'] = '%%';
$string['plusfactor'] = 'Konpentsatu';
$string['points'] = 'puntuak';
$string['pointsascending'] = 'Puntuak gorantz sailkatu';
$string['pointsdescending'] = 'Puntuak beherantz sailkatu';
$string['positionfirst'] = 'Lehena';
$string['positionlast'] = 'Azkena';
$string['preferences'] = 'Hobespenak';
$string['prefgeneral'] = 'Orokorra';
$string['prefrows'] = 'Zutabe bereziak';
$string['previewrows'] = 'Zutabeak aurreikusi';
$string['profilereport'] = 'Erabiltzaile-profilaren txostena';
$string['publishing'] = 'Argitaratzen';
$string['quickfeedback'] = 'Feedback azkarra';
$string['quickgrading'] = 'Kalifikazio azkarra';
$string['range'] = 'Ibiltartea';
$string['rangesdecimalpoints'] = 'Hamartarrak erakutsi ibiltarteetan';
$string['rangesdisplaytype'] = 'Ibiltartea erakusteko modua';
$string['rank'] = 'Sailkapena';
$string['rawpct'] = '%% gordina';
$string['real'] = 'Erreala';
$string['realletter'] = 'Erreala (letra)';
$string['realpercentage'] = 'Erreala (portzentajea)';
$string['removeallcoursegrades'] = 'Kalifikazio guztiak ezabatu';
$string['removeallcourseitems'] = 'Elementu eta kategoria guztiak ezabatu';
$string['report'] = 'Txostena';
$string['reportdefault'] = 'Berezko ezarpena ($a)';
$string['reportplugins'] = 'Txostenetarako plugin-ak';
$string['reportsettings'] = 'Txostenaren ezarpenak';
$string['reprintheaders'] = 'Goialdeak berriz inprimatu';
$string['respectingcurrentdata'] = 'Egungo ezarpenak ez dira aldatu';
$string['rowpreviewnum'] = 'Zutabeak aurreikusi';
$string['savechanges'] = 'Aldaketak gorde';
$string['savepreferences'] = 'Hobespenak gorde';
$string['scaledpct'] = 'Eskalatua %%';
$string['seeallcoursegrades'] = 'Ikusi ikastaroko kalifikazio guztiak';
$string['selectalloroneuser'] = 'Aukeratu erabiltzaile bat edo guztiak';
$string['selectdestination'] = 'Aukeratu helbidea honentzat: $a';
$string['separator'] = 'Bereizlea';
$string['sepcomma'] = 'Koma';
$string['septab'] = 'Tabuladorea';
$string['setcategories'] = 'Kategoriak';
$string['setcategorieserror'] = 'Neurketak esleitu aurretik ikastaroko kategoriak ezarri behar dituzu.';
$string['setgradeletters'] = 'Letraz kalifikatu';
$string['setpreferences'] = 'Hobespenak';
$string['setting'] = 'Ezarpena';
$string['settings'] = 'Ezarpenak';
$string['setweights'] = 'Pisuak';
$string['showactivityicons'] = 'Jarduera-ikonoak erakutsi';
$string['showallhidden'] = 'Guztiak ezkutuan';
$string['showallstudents'] = 'Ikasle guztiak erakutsi';
$string['showaverages'] = 'Batezbestekoak erakutsi';
$string['showcalculations'] = 'Erakutsi kalkuluak';
$string['showeyecons'] = 'Erakutsi ikonoak erakutsi/ezkutatu';
$string['showfeedback'] = 'Feed-backa erakutsi';
$string['showgroups'] = 'Taldeak erakutsi';
$string['showhiddenitems'] = 'Ezkutuko elementuak erakutsi';
$string['showlocks'] = 'Blokeoak erakutsi';
$string['shownohidden'] = 'Ezkutuan ez';
$string['shownooutcomes'] = 'Helburuak ezkutatu';
$string['shownumberofgrades'] = 'Batezbestekoetan kalifikazio-kopurua erakutsi';
$string['showpercentage'] = 'Erakutsi portzentajea';
$string['showquickfeedback'] = 'Erakutsi feedback azkarra';
$string['showranges'] = 'Erakutsi ibiltarteak';
$string['showrank'] = 'Erakutsi sailkapena';
$string['showuseridnumber'] = 'Erabiltzailearen id zenbakia erakutsi';
$string['showuserimage'] = 'Erabiltzaile-profilaren irudiak erakutsi';
$string['showverbose'] = 'Erakutsi $a->category$a->itemmodule $a->itemname';
$string['sitewide'] = 'Gune osoa';
$string['sort'] = 'sailkatu';
$string['sortasc'] = 'Behetik gora sailkatu';
$string['sortbyfirstname'] = 'Izenaren arabera sailkatu';
$string['sortbylastname'] = 'Deituraren arabera sailkatu';
$string['sortdesc'] = 'Goitik behera sailkatu';
$string['standarddeviation'] = 'Desbiderapen estandarra';
$string['stats'] = 'Estatistikak';
$string['statslink'] = 'Estatistikak';
$string['student'] = 'Ikaslea';
$string['studentsperpage'] = 'Ikasleak orriko';
$string['subcategory'] = 'Ohiko kategoria';
$string['submissions'] = 'Bidalketak';
$string['submittedon'] = 'Bidalita: $a';
$string['synclegacygrades'] = 'Heredatutako kalifikazioak sinkronizatu';
$string['topcategory'] = 'Kategoria gorena';
$string['total'] = 'Guztira';
$string['totalweight100'] = 'Pisu osoa 100ekoa da';
$string['totalweightnot100'] = 'Pisu osoa ez da 100ekoa';
$string['turnfeedbackoff'] = 'Feedbacka desgaitu';
$string['turnfeedbackon'] = 'Feedbacka gaitu';
$string['typenone'] = 'Bat ere ez';
$string['typescale'] = 'Eskala';
$string['typetext'] = 'Testua';
$string['typevalue'] = 'Balorea';
$string['uncategorised'] = 'Kategorizatu gabea';
$string['unchangedgrade'] = 'Kalifikazioa ez da aldatu';
$string['unlock'] = 'Desblokeatu';
$string['unlockverbose'] = 'Desblokeatu $a->category$a->itemmodule $a->itemname';
$string['unused'] = 'Erabili gabea';
$string['updatedgradesonly'] = 'Kalifikazio berriak edo eguneratutakoak baino ez esportatu';
$string['uploadgrades'] = 'Kalifikazioak igo';
$string['useadvanced'] = 'Ezaugarri aurreratuak erabili';
$string['usedcourses'] = 'Erabilitako ikastaroak';
$string['usedgradeitem'] = 'Erabilitako kalifikazio-elementua';
$string['usenooutcome'] = 'Ez erabili helburua';
$string['usenoscale'] = 'Ez erabili eskala';
$string['usepercent'] = 'Portzentajea erabili';
$string['user'] = 'Erabiltzailea';
$string['usergrade'] = 'Erabiltzailea $a->fullname ($a->useridnumber) elementu honetan $a->gradeidnumber';
$string['userpreferences'] = 'Erabiltzailearen hobespenak';
$string['useweighted'] = 'Neurketa erabili';
$string['verbosescales'] = 'Ahozko eskalak';
$string['viewbygroup'] = 'Taldea';
$string['viewgrades'] = 'Notak ikusi';
$string['weight'] = 'Pisua';
$string['weightcourse'] = 'Ponderatu gabeko kalifikazioak erabili ikastarorako';
$string['weightedascending'] = 'Neurtutako portzentajearen arabera gorantz sailkatu';
$string['weighteddescending'] = 'Neurtutako portzentajearen arabera beherantz sailkatu';
$string['weightedpct'] = '%% neurtua';
$string['weightedpctcontribution'] = 'ekarpen %% neurtua';
$string['weightorextracredit'] = 'Pisua edo aparteko kreditua';
$string['weights'] = 'Pisuak';
$string['weightsedit'] = 'Editatu pisua eta aparteko kreditua';
$string['weightuc'] = 'Pisua';
$string['writinggradebookinfo'] = 'Kalifikazio-liburuaren ezarpenak idazten';
$string['xml'] = 'XML';
$string['yes'] = 'Bai';
$string['yourgrade'] = 'Zure kalifikazioa';
$string['errornocategorizedid'] = 'Ezin izan da kategorizatu gabeko id bat lortu!'; // ORPHANED

?>