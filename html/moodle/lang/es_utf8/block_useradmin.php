<?PHP // $Id: block_useradmin.php,v 1.2 2009/04/07 16:59:39 barias Exp $ 
      // block_useradmin.php - created with Moodle 1.9.3+ (Build: 20081126) (2007101532)


$string['CONTEXT_COURSE'] = 'Curso';
$string['CONTEXT_COURSECAT'] = 'Categoría de Curso';
$string['CONTEXT_SYSTEM'] = 'Sitio';
$string['addedtogroup'] = 'Agregado al grupo $a->group en el curso $a->course';
$string['addedtogroupnot'] = 'No agregado al grupo $a->group in course $a->course';
$string['addedtogroupnotenrolled'] = 'No agregado al grupo $a->group porque no está matriculado en el curso $a->course';
$string['allow_denymnetaccess'] = 'Acceso actualmente permitido --> Denegar';
$string['alreadyassigned'] = 'Ya asignado';
$string['and'] = 'Y';
$string['anyauth'] = 'Cualquiera';
$string['anyhost'] = 'Cualquiera';
$string['assignedroleincourse'] = 'Asignado el rol $a->role en el curso $a->course';
$string['assignrole'] = 'Asignar rol';
$string['assignrole_contextlevel_label'] = 'En Contexto';
$string['assignrole_donthaverole_label'] = 'acción';
$string['assignrole_have'] = 'ASIGNAR';
$string['assignrole_havehidden'] = 'ASIGNAR (oculto)';
$string['assignrole_havenot'] = 'DESASIGNAR';
$string['assignrole_role_label'] = 'el Rol';
$string['assignrolehidden'] = 'Asignar Rol (oculto)';
$string['assignselectedusers'] = 'Gestionar roles de usuarios seleccionados';
$string['auth'] = 'Auntenticación';
$string['blockname'] = 'Administración de Usuarios';
$string['cannotassignroleincourse'] = 'No puede asignar el rol $a->role en el curso $a->course';
$string['changescancelled'] = 'Cancelar';
$string['clearallfilters'] = 'Borrar todas las condiciones y recargar';
$string['clearsearch'] = 'Borrar búsqueda';
$string['comma'] = 'Coma: \",\"';
$string['confirmed'] = 'Confirmado';
$string['deleteselectedusers'] = 'ELIMINAR a los usuarios seleccionados';
$string['deny_allowmnetaccess'] = 'Acceso actualmente Denegado --> Permitir';
$string['doseol'] = 'DOS/Windows (CR+LF)';
$string['downloaduser'] = 'Descargar usuarios a un archivo';
$string['duplicatemails'] = 'Duplicar direcciones e-mail';
$string['emaildisable'] = 'E-mail de este usuario deshabilitado';
$string['enrolledasnoneditingteacher'] = 'Matriculado como profesor sin permiso de edición en el curso $a';
$string['enrolledasstudent'] = 'Matriculado como estudiante en el curso $a';
$string['enrolledasteacher'] = 'Matriculado como profesor en el curso $a';
$string['enrolledwithdefaultrole'] = 'Matriculado en el curso $a (con rol por defecto)';
$string['execute'] = 'Ejecutar';
$string['exporttheseuserstofile'] = 'Exportar estos usuarios a un archivo CSV';
$string['fakemail'] = 'Generar direcciones de email falsas';
$string['fakemaildomain'] = 'Dominio falso para generar direcciones de email falsas';
$string['fakemailgeneration'] = 'Generación de direcciones de email falsas';
$string['fakemails'] = 'generadas direcciones de email falsas (y mail deshabilitado)';
$string['fieldseparator'] = 'Carácter separador de campos (formato de texto)';
$string['filencoding'] = 'Codificación de caracteres';
$string['filterauth'] = 'Modo de autenticación';
$string['filterbymnethost'] = 'Usuarios MNET de';
$string['filterconfirmed_all'] = 'Cualquiera';
$string['filterconfirmed_confirmedonly'] = 'Sólo confirmados';
$string['filterconfirmed_unconfirmedonly'] = 'Sólo no confirmados';
$string['filterconfirmedusers'] = 'Usuarios confirmados';
$string['filterctx_contextlevel_label'] = 'Sólo usuarios en contexto';
$string['filterctx_have'] = 'tienen';
$string['filterctx_havenot'] = 'NO tienen';
$string['filterctx_role_label'] = 'el Rol';
$string['hide_showfilterform'] = 'Formulario Ocultar/Mostrar';
$string['hidefield'] = 'Ocultar columna $a';
$string['includeremote'] = 'Incluir usuarios MNET (remotos)';
$string['includeunconfirmed'] = 'Incluir usuarios no confirmados';
$string['inthecontextof'] = 'en el Contexto';
$string['invalidfieldname_areyousure'] = '$a no es un nombre de campo válido</br>Compruebe que selecciona el carácter separador de campo correcto';
$string['invalidmails'] = 'Direcciones e-mail no válidas';
$string['linenumber'] = 'Fila';
$string['localhost'] = '(sitio local)';
$string['maceol'] = 'Mac (CR)';
$string['maxnumberofcoursefield'] = 'Número máximo de campos <code>curso</code>, <code>grupo</code>, <code>rol</code> y <code>tipo</code>';
$string['mnethostidnotexists'] = 'No existe un \'peer\' MNET con hostid=$a';
$string['mnethostname'] = '\'Peer\' MNET';
$string['n_a'] = 'n/d';
$string['newuseradded'] = 'Agregado nuevo usuario';
$string['noactionselected'] = 'Seleccionar una acción a ejecutar';
$string['nomailplaceholder'] = 'Cadena para \"no mail\"';
$string['nosearchcondition'] = 'No condición de filtrado';
$string['notassigned'] = 'No asignado';
$string['nousermatchingconditions'] = 'No condiciones de emparejamiento de Usuario';
$string['nouserselected'] = '¡No se han seleccionado usuarios!';
$string['onlyalphanum'] = 'sólo letras y dígitos, no espacios';
$string['or'] = 'o';
$string['search'] = 'Buscar';
$string['searchbyauth'] = 'autentificado por <em>$a</em>';
$string['searchbycontext'] = '$a->donthaverole el rol <em>$a->role</em> en $a->contextlevel <em>$a->contexto</em>';
$string['searchbyfirstinitial'] = 'El nombre comienza por \'<em>$a</em>\'';
$string['searchbyhost'] = 'usuario remoto de <em>$a</em>';
$string['searchbylastinitial'] = 'El apellido comienza con \'<em>$a</em>\'';
$string['searchbystring'] = 'contiene \'<em>$a</em>\'';
$string['searchconditions'] = '<strong>Condiciones de filtrado:</strong>';
$string['searchhave'] = 'ha';
$string['searchhavenot'] = 'No ha';
$string['searchin'] = 'Buscar en';
$string['semicolon'] = 'Punto y coma: \";\"';
$string['showfield'] = 'Expandir columna $a';
$string['skipthisline'] = 'FILA DE ARCHIVO PASADA POR ALTO';
$string['tab'] = 'Tabulador';
$string['truncatefield'] = 'El campo $a->fieldname es demasiado largo. Truncado a $a->length caracteres.';
$string['unassignrole'] = 'Desasignar rol';
$string['unconfirm'] = 'Cancelar confirmación';
$string['unixeol'] = 'Unix (LF)';
$string['uploadfile'] = 'Subir archivo';
$string['uploaduser'] = 'Subir usuarios desde un archivo';
$string['userlist'] = 'Hojear lista de usuarios';
$string['username'] = 'Nombre de usuario';
$string['usernotaddederror'] = 'Nuevo usuario no agregado. Error desconocido';
$string['usernotaddedregistered'] = 'Es usuario ya existe. No se ha añadido nuevo usuario';
$string['usernotupdatederror'] = 'Error al actualizar el usuario';
$string['userperpage'] = 'Usuarios por página';
$string['usersontotalusers'] = '$a->searchcount en $a->totalcount usuarios ($a->pagecount en esta página)';
$string['userswillbedeleted'] = '<b>¡Estos usuarios han sido completamente eliminados!</b> Esta operación no se puede deshacer';
$string['willbedeleted'] = '¡Serán eliminados!';
$string['wrongwillbeskipped'] = 'la asignación/desasignación errónea será pasada por alto';

?>
