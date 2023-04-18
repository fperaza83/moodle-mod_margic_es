<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// Tú should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * English strings for margic plugin.
 *
 * @package   mod_margic
 * @category  string
 * @copyright 2022 coactum GmbH
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Events.
$string['eventdownloadentries'] = 'Descargar Entradas';
$string['evententrycreated'] = 'Entrada Margic creada';
$string['evententryupdated'] = 'Entrada Margic actualizada';
$string['eventannotationcreated'] = 'Anotación Margic creada';
$string['eventannotationupdated'] = 'Anotación Margic actualizada';
$string['eventannotationdeleted'] = 'Anotación Margic borrada';
$string['eventfeedbackupdated'] = 'Retroalimentación Margic actualizada';
$string['eventinvalidaccess'] = 'Acceso Inválido ';

// Common.
$string['modulename'] = 'Margic';
$string['modulenameplural'] = 'Margics';
$string['modulename_help'] = 'En la actividad Margic, los participantes pueden crear entradas ilimitadas las cuáles pueden entonces ser evaluadas y anotadas por profesores.

Margics pueden ser usadas in a manera significante en lenguaje lecciones, por ejemplo. Los estudiantes pueden crear entradas para responder tareas variadas, escribir su propios textos e historias, o prácticar vocabulario.

Los profesores entonces pueden ver, corregir y evaluar estas entradas en una vista previa de página personalizable. Para este propósito, ellos pueden marcar textos específicos, pasajes y escribir anotaciones para ellas, por lo cual, un tipo de error y un texto corto puede ser guardados para cada anotación. La entrada completa pueden también ser calificada y hecha con retroalimentación textual ó acústica . Los participantes pueden tener la oportunidad de revisar su entrada original y usar la retroalimentación recibida para mejorarla.

Los tipos de error disponibles para las anotaciones pueden ser flexiblemente ajustados. En un resumen de error, los instructores pueden tambien evaluar para cada participante cuántos y cuáles errores ellos han cometido en Margic. Finalmente, también es posible exportar las entradas escritas para uso futuro.

Core features del plugin:

* Escribir y revisar entradas multimedia.
* Individualmente personalizable vista previa de página con todas las (propias) entradas disponibles en Margic
* Extensivas posibilidades para anotación y evaluación de entradas para profesores
* Tipos de error personalizables y precisar errores de evaluación';
$string['modulename_link'] = 'mod/margic/view';
$string['pluginadministration'] = ' Administración de Margic';

// General errors.
$string['erraccessdenied'] = 'Acceso denegado';
$string['generalerrorinsert'] = 'No se pudo guardar la nueva Entrada Margic.';
$string['incorrectcourseid'] = ' ID de curso es incorrecto';
$string['incorrectmodule'] = 'Módulo ID de curso es incorrecto';

// Entry (template).
$string['entry'] = 'Entrada';
$string['revision'] = 'Revisión';
$string['baseentry'] = 'Entrada Base';
$string['editthisentry'] = 'Editar esta entrada';
$string['blankentry'] = 'Entrada Vacía ';
$string['created'] = 'Hace {$a->years} años, {$a->month} meses, {$a->days} días y {$a->hours} horas';
$string['details'] = 'Estadísticas';
$string['numwordsraw'] = '{$a->wordscount} palabras de texto  usando {$a->charscount} caracteres, incluyendo {$a->spacescount} espacios.';
$string['lastedited'] = 'última vez editada';
$string['needsgrading'] = ' Esta entrada no ha tenido retroalimentación ó una calificación aún.';
$string['needsregrading'] = 'Esta entrada ha sido cambiada desde que una retroalimentación ó una calificación fué dada.';
$string['getallentriesofuser'] = 'Muestra todas las entradas Margic para este usuario';
$string['toggleannotation'] = 'Alternar anotación';
$string['id'] = 'ID';
$string['at'] = 'al';
$string['from'] = 'de';
$string['toggleolderversions'] = 'Alternar versiones mas anitguas de la Entrada';
$string['hoverannotation'] = 'Sobre la anotación';

// Ver (y template).
$string['overview'] = 'Descripción general';
$string['viewentries'] = 'Ver entradas';
$string['startnewentry'] = 'Nueva Entrada';
$string['togglegradingform'] = 'Calificación';
$string['viewannotations'] = 'Ver anotaciones';
$string['hideannotations'] = 'Ocultar anotaciones';
$string['norating'] = 'Calificación deshabilitada.';
$string['forallmyentries'] = 'para todas mis entradas';
$string['entries'] = 'entradas';
$string['myentries'] = 'Mis entradas';
$string['annotations'] = 'Anotaciones';
$string['toggleallannotations'] = 'Alternar todaslas anotaciones';
$string['csvexport'] = 'Exportar como .csv file';
$string['pagesize'] = 'entradas por página';
$string['sorting'] = 'Ordenamiento';
$string['currenttooldest'] = 'Muestra entradas desde más recientes hasta la más vieja';
$string['oldesttocurrent'] = 'Muestra entradas desde la más vieja hasta la más reciente';
$string['lowestgradetohighest'] = 'Muestra entradas desde la más baja clasificada hasta la más alta';
$string['highestgradetolowest'] = 'Muestra entradas desde la más alta clasificada hasta la más baja';
$string['currententry'] = 'Entrada actual';
$string['oldestentry'] = 'Entradas mas antiguas';
$string['lowestgradeentry'] = 'Entradas clasificadas más bajas';
$string['highestgradeentry'] = 'Entradas clasificadas más altas';
$string['editingstarts'] = 'Editando período comienza en {$a}';
$string['editingends'] = 'Editando período finaliza en {$a}';
$string['editingended'] = 'Editando período finalizado en {$a}';
$string['notstarted'] = 'Tú no has agregado ninguna entrada a esta Margic aún';
$string['noentriesfound'] = 'Ninguna entrada encontrada';
$string['viewallentries'] = 'Ver todas las entradas';
$string['viewallmargics'] = 'Ver todas las margics en curso';

// Anotaciones.
$string['annotationcreated'] = 'Creada al {$a}';
$string['annotationmodified'] = 'Modificada a las {$a}';
$string['editannotation'] = 'Editar';
$string['deleteannotation'] = 'Borrar';
$string['annotationadded'] = 'Anotación agregada';
$string['annotationedited'] = 'Anotación editada';
$string['annotationdeleted'] = 'Anotación borrada';
$string['annotationinvalid'] = 'Anotación inválida';
$string['annotatedtextnotfound'] = ' Texto Anotado no encontrado';
$string['annotatedtextinvalid'] = 'El texto original anotado se ha vuelto inválido. La Calificación para esta anotación por lo tanto debe ser rehecha.';
$string['notallowedtodothis'] = 'No tiene permisos para hacer esto.';
$string['deletederrortype'] = 'Erorr de tipo Borrado';
$string['errtypedeleted'] = 'Tipo de Anotación no existe.';
$string['annotationsarefetched'] = 'Anotaciones siendo cargadas';
$string['reloadannotations'] = 'Recargar anotaciones';

// Form: mod_form.
$string['margicname'] = 'Nombre de la Margic';
$string['margicdescription'] = 'Description de la Margic';
$string['margicopentime'] = 'Tiempo Abierto';
$string['margicopentime_help'] = 'Si está habilitado, tú puedes colocar la fecha desde la cual las entradas pueden ser creadas en el Margic.';
$string['margicclosetime'] = 'Close time';
$string['margicclosetime_help'] = 'Si está activado, tú puedes colocar una fecha desde la cuál las entradas pueden ser creadas ó editadas en el Margic.';
$string['annotationareawidth_help'] = 'El ancho del área de la anotación en porcentaje. Mínimo 20 y máximo 80 por ciento.';
$string['errannotationareawidthinvalid'] = 'Ancho inválido (mínimo: {$a->minwidth}%, máximo: {$a->maxwidth}%).';

// Form: edit_form.
$string['addnewentry'] = 'Agregar nueva Entrada';
$string['editentry'] = 'Editar Entrada';
$string['margicentrydate'] = 'Fijar fecha para esta Entrada';
$string['editentrynotpossible'] = 'No puedes editar esta Entrada.';
$string['editdateinfuture'] = 'La fecha especificada de la entrada  está en el futuro.';
$string['entryaddedoredited'] = 'Entrada agregada ó modificada.';
$string['timecreatedinvalid'] = 'Cambio falló. Hay una version más reciente de esta Entrada.';
$string['entryadded'] = 'Entrada agregada';

// Form: grading_form.
$string['gradeingradebook'] = 'Actual Calificación desde libro de calificaciones';
$string['feedbackingradebook'] = 'Actual retroalimentación desde libro de calificaciones';
$string['savedrating'] = 'Calificación guardada para esta Entrada';
$string['newrating'] = 'Nueva calificación para esta Entrada';
$string['forallentries'] = 'para todas las entradas de';
$string['grader'] = 'Calificador';
$string['feedbackupdated'] = 'Retroalimentacion y / ó calificación actualizada';
$string['errfeedbacknotupdated'] = 'Retroalimentacion y nota no actualizada';
$string['errnograder'] = 'No hay calificador.';
$string['errnofeedbackorratingdisabled'] = 'No hay retroalimentación ó calificación deshabilitada.';

// Error resumen.
$string['errorsummary'] = 'Resumen de errores';
$string['participant'] = 'Participante';
$string['backtooverview'] = 'Regresar vista previa';
$string['adderrortype'] = 'Agregar tipo de error';
$string['errortypeadded'] = 'Tipo de error agregado';
$string['editerrortype'] = 'Tipo error de edición';
$string['errortypeedited'] = 'Tipo de Error editado';
$string['editerrortypetemplate'] = 'Tipo de error Editar template';
$string['errortypecantbeedited'] = 'Tipo de Error no pudo ser editada';
$string['deleteerrortype'] = 'Borrar tipo de error';
$string['errortypedeleted'] = 'Tipo de Error de borrado';
$string['deleteerrortypetemplate'] = 'Borrar template';
$string['deleteerrortypetemplateconfirm'] = 'Debería este tipo de error plantilla realmente ser borrado? Esto borra la plantilla de la entrada completa, para que ella no pueda no ser usada más como un tipo de error concreto en las nuevas Margics. Esta acción no puede ser desecha!';
$string['errortypeinvalid'] = 'Tipo de Error inválido';
$string['nameoferrortype'] = 'Nombre de tipo de error';
$string['margicerrortypes'] = 'Tipos de error de Margic';
$string['errortypetemplates'] = 'Tipo de Error plantillas';
$string['errortypes'] = 'Tipos de Error';
$string['template'] = 'Plantilla';
$string['addtomargic'] = 'Agregar a Margic';
$string['switchtotemplatetypes'] = 'Cambiar a tipo de error plantillas';
$string['switchtomargictypes'] = 'Cambiar a tipos de error para la Margic';
$string['notemplatetypes'] = 'Tipo de error de plantillas no disponibles';
$string['movefor'] = 'Mostrar hacia adelante';
$string['moveback'] = 'Mostrar hacia atrás';
$string['prioritychanged'] = 'Orden cambiada';
$string['prioritynotchanged'] = 'Orden no pudo ser cambiada';

// Form: mod_margic_errortypes_form.
$string['annotationcolor'] = 'Color del tipo de error';
$string['standardtype'] = 'Tipo de error Estándar ';
$string['manualtype'] = 'Tipo de error Manual';
$string['standard'] = 'Estándar';
$string['custom'] = 'Personalizado';
$string['type'] = 'Tipo';
$string['color'] = 'Color';
$string['errnohexcolor'] = 'No hay valor hexadecimal para este color.';
$string['warningeditdefaulterrortypetemplate'] = 'ADVERTENCIA: Esto cambiará el tipo de error plantilla en todo el sistema. Cuando esté creando una nueva Margics,  la plantilla cambiada entonces estará disponible para seleccionar los tipos de error concretos de Margic .';
$string['changetemplate'] = 'Cambiar el nombre ó color del tipo de error solo afecta la plantilla y por lo tanto sólo tomará efecto cuando una nueva Margics sea creada. Los tipos de error existintes en Margics no son afectados por estos cambios.';
$string['explanationtypename'] = 'Nombre del tipo de error';
$string['explanationtypename_help'] = 'El nombre del tipo de error. Para el siguiente estándard de tipos de error, traducciones ya fueron guardadas en Moodle: "verbo_gramatical", "sintaxis_gramatical", "congruencia_gramatical", "gramática_otro", "expresión", "ortografía", "puntuación" y "otros". Todos los  otros nombres no son traducidos.';
$string['explanationhexcolor'] = 'Color de el tipo de error';
$string['explanationhexcolor_help'] = 'El color de el tipo de error como valor hexadecimal . Esto consiste de exactamente 6 caracteres (A-F y también desde 0-9) y representa a un color. Tú puedes encontrar out the hexadecimal valor de cualquier color, por ejemplo, at <a href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">https://www.w3schools.com/colors/colors_picker.asp</a>.';
$string['explanationstandardtype'] = 'Aqui tú puedes seleccionar si el tipo de error deberia ser de tipo por defecto. En este caso los profesores pueden seleccionarlo como tipo de error que puede ser usado en sus Margics. De otra forma, solo tú puedes agregar este tipo de error a tus Margics.';

// Calendar.
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';

// CSV exportar.
$string['pluginname'] = 'Margic';
$string['userid'] = 'Id de usuario';
$string['timecreated'] = 'Tiempo de creación';
$string['timemodified'] = 'Tiempo de modificación';
$string['text'] = 'Texto';
$string['feedback'] = 'Entrada de retroalimentación';
$string['format'] = 'Formato';
$string['teacher'] = 'Profesor';
$string['timemarked'] = 'Tiempo calificado';
$string['rating'] = 'Calificación';
$string['exportfilenamemyentries'] = 'Mis_Margic_Entradas';
$string['exportfilenamemargicentries'] = 'Margic_Entradas';
$string['exportfilenameallentries'] = 'Todas_Margic_Entradas';

// Capabilities.
$string['margic:addentries'] = 'Agregar entradas Margic';
$string['margic:addinstance'] = 'Agregar Margic instances';
$string['margic:manageentries'] = 'Administrar entradas Margic';
$string['margic:rate'] = 'Ponderar entradas Margic';
$string['margic:receivegradingmessages'] = 'Recibir mensajes acerca de la ponderacion de las entradas ';
$string['margic:manageerrortypes'] = 'Administrar tipos de error de Margic';
$string['margic:viewerrorsummary'] = 'Ver resumen de error de Margic ';
$string['margic:viewerrorsfromallparticipants'] = 'Ver errores de todos los participantes';
$string['margic:editdefaulterrortypes'] = 'Editar por defecto tipo de error plantillas';
$string['margic:viewannotations'] = 'Ver anotaciones';
$string['margic:makeannotations'] = 'Hacer anotaciones';
$string['margic:deleteannotations'] = 'Borrar anotaciones';

// Recent activity.
$string['newmargicentries'] = 'Nueva entradas de  Margic';

// User complete.
$string['noentry'] = 'Sin Entrada';

// Search.
$string['search'] = 'Buscar';
$string['search:activity'] = 'Margic - actividad información';
$string['search:entry'] = 'Entradas Margic';
$string['search:feedback'] = 'Retroalimentacion a las entradas Margic';

// Default error tipo plantillas.
$string['grammar_verb'] = 'Gramática: Forma Verbal';
$string['grammar_syntax'] = 'Gramática: Sintáxis';
$string['grammar_congruence'] = 'Gramática: congruencia';
$string['grammar_other'] = 'Gramática: Otro';
$string['expression'] = 'Expresión';
$string['orthography'] = 'Ortografía';
$string['punctuation'] = 'Puntuación';
$string['other'] = 'Otro';

// Lib.
$string['deletealluserdata'] = 'Borrar todas entradas, anotaciones, archivos y calificaciones';
$string['alluserdatadeleted'] = 'Todas las entradas, anotaciones, archivos y calificaciones serán borradas';
$string['deleteerrortypes'] = 'Error de tipo borrar';
$string['errortypesdeleted'] = 'Error de tipo borrados';

// Messages.
$string['messageprovider:gradingmessages'] = 'Notificaciónes cuando las entradas son clasificadas';
$string['sendgradingmessage'] = 'Notificar al creador de la Entrada inmediatamente acerca de la calificación';
$string['gradingmailsubject'] = 'Recibida retroalimentación para entrada Margic ';
$string['gradingmailfullmessage'] = 'Felicitaciones {$a->user},
{$a->teacher} has published a retroalimentación ó rating para tus entrada en Margic {$a->margic}.
Aqui tú puedes verlas: {$a->url}';
$string['gradingmailfullmessagehtml'] = 'Felicitaciones {$a->user},<br>
{$a->teacher} ha publicado una retroalimentación ó calificación para tus entradas en Margic <strong>{$a->margic}</strong>.<br><br>
<a href="{$a->url}"><strong>Aquí</strong></a> tú puedes verlas.';
$string['mailfooter'] = 'Este mensaje se trata de una Margic en {$a->systemname}. Tú puedes encontrar más información en el siguiente enlace: <br> {$a->coursename} -> Margic -> {$a->name} <br> {$a->url}';

// Admin settings.
$string['defaulterrortypetemplateseditable'] = 'Editando el tipo de error por defecto plantillas';
$string['defaulterrortypetemplateseditable_help'] = 'Si está habilitado, los administradores ó usuarios con el permiso editdefaulterrortypes pueden editar el tipo de error por defecto  plantillas en una Margic en la página de resumen error. Modificando una plantilla cambiandola a traves del sistema, para que cuando la nueva Margics sea creada, la plantilla modificada sea mostrada cuando el tipo de error concreto sea seleccionado. Los tipos de error concretos existentes en Margic no son cambiados modificando una plantilla. Si no es selecccionada aquí, el tipo de error plantillas no puede ser cambiada desde adentro de una Margic.';
$string['editentrydates'] = 'Editar fechas de entrada';
$string['editentrydates_help'] = 'Si está habilitado, los profesores pueden configurar en cada Margic si los usuarios pueden o nó editar sus propias entradas.';
$string['editentries'] = 'Editar propias entradas';
$string['editentries_help'] = 'Si está habilitado, los profesores pueden configurar en cada Margic si los usuarios pueden o nó editar la fecha de cada nueva entrada.';
$string['annotationareawidth'] = 'Ancho del área de anotación ';
$string['annotationareawidthall'] = 'El ancho del área de la anotación en porcentaje para todas las margics. Pueden ser sobreescritos por profesores en las margics individuales. Mínimo 20 y máximo 80 por ciento.';
$string['editability'] = 'Editable';
$string['entrybgc_title'] = 'Color de fondo para las entradas y anotaciones';
$string['entrybgc_descr'] = 'Aqui tú puedes establecer el color de fondo de las areas para las entradas y anotaciones.';
$string['textbgc_title'] = 'Color de fondo de los textos';
$string['textbgc_descr'] = 'Aqui tú puedes establecer el color de fondo de los textos en las entradas y anotaciones.';

// Privacy.
$string['privacy:metadata:margic_entries'] = 'Contiene las entradas del usuario guardadas en todas las margics.';
$string['privacy:metadata:margic_annotations'] = 'Contiene las anotaciones hechas en todas las margics.';
$string['privacy:metadata:margic_errortype_templates'] = 'Contiene el error de tipo plantillas creada por los profesores.';
$string['privacy:metadata:margic_entries:margic'] = 'ID de la Margic de la entrada perteneciente.';
$string['privacy:metadata:margic_entries:userid'] = 'ID del usuario de la entrada perteneciente.';
$string['privacy:metadata:margic_entries:timecreated'] = 'Fecha en la cuál la entrada fué creada.';
$string['privacy:metadata:margic_entries:timemodified'] = 'Tiempo en el que la entrada fué modificada por última vez.';
$string['privacy:metadata:margic_entries:text'] = 'El contenido de la entrada.';
$string['privacy:metadata:margic_entries:rating'] = 'La nota con la cuál la entrada fué calificada.';
$string['privacy:metadata:margic_entries:feedback'] = 'Retroalimentación de los profesores para la entrada.';
$string['privacy:metadata:margic_entries:teacher'] = 'ID de la calificador.';
$string['privacy:metadata:margic_entries:timemarked'] = 'Tiempo en el que la entrada fué calificada.';
$string['privacy:metadata:margic_entries:baseentry'] = 'El ID de la entrada original en la cuál esta entrada revisada está basada';
$string['privacy:metadata:margic_annotations:margic'] = 'ID de la Margic de la anotación de la entrada .';
$string['privacy:metadata:margic_annotations:entry'] = 'ID de la entrada a la que pertenece la anotación .';
$string['privacy:metadata:margic_annotations:userid'] = 'ID del usuario que hizo la anotación.';
$string['privacy:metadata:margic_annotations:timecreated'] = 'Fecha en la cual la anotación fué creada.';
$string['privacy:metadata:margic_annotations:timemodified'] = 'Tiempo en que la anotación fué por última modificada.';
$string['privacy:metadata:margic_annotations:type'] = 'ID del tipo de la anotación.';
$string['privacy:metadata:margic_annotations:text'] = 'Contenido de la anotación.';
$string['privacy:metadata:margic_errortype_templates:timecreated'] = 'Fecha en la cuál el tipo de error plantilla fué creada.';
$string['privacy:metadata:margic_errortype_templates:timemodified'] = 'Tiempo en el cual el tipo de error plantilla fué última por vez modificado.';
$string['privacy:metadata:margic_errortype_templates:name'] = 'Nombre del tipo de error plantilla.';
$string['privacy:metadata:margic_errortype_templates:color'] = 'Color del tipo de error plantilla como valor hexadecimal .';
$string['privacy:metadata:margic_errortype_templates:userid'] = 'ID del usuario que hizo el tipo de error plantilla.';
$string['privacy:metadata:core_rating'] = 'Calificaciones agregadas a las entradas Margic fueron guardadas.';
$string['privacy:metadata:core_files'] = 'Archivos associados con  entradas Margic están guardadas.';
$string['privacy:metadata:core_message'] = 'Los mensajes a ser enviados a los usuarios acerca de la calificación de entradas Margic.';
$string['privacy:metadata:preference:margic_sortoption'] = 'La preferencia para el ordenamiento de una Margic.';
$string['privacy:metadata:preference:margic_pagecount'] = 'El número de entradas que debieron ser mostradas por página para una Margic.';
$string['privacy:metadata:preference:margic_activepage'] = 'El número de la última página abierta de una Margic.';
