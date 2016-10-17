<?php /* */
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author    EllisLab Dev Team
 * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright    Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 * @since    Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'El método de validación de correo electrónico se debe pasar una array.';
$lang['email_invalid_address'] = 'Dirección de correo electrónico no válida:% s';
$lang['email_attachment_missing'] = 'No se puede localizar el siguiente archivo adjunto:% s';
$lang['email_attachment_unreadable'] = 'No se puede abrir este archivo adjunto:% s';
$lang['email_no_from'] = 'No se puede enviar correo sin encabezado "From".';
$lang['email_no_recipients'] = 'Debe incluir destinatarios: Para, CC o CCO';
$lang['email_send_failure_phpmail'] = 'No se puede enviar correo electrónico usando PHP mail(). Su servidor no esté configurado para enviar correo mediante este método';
$lang['email_send_failure_sendmail'] = 'No se puede enviar correo electrónico usando PHP Sendmail. Su servidor no esté configurado para enviar correo mediante este método';
$lang['email_send_failure_smtp'] = 'No se puede enviar correo electrónico SMTP usando PHP. Su servidor no esté configurado para enviar correo mediante este método';
$lang['email_sent'] = 'Su mensaje ha sido enviado con éxito utilizando el siguiente protocolo:% s';
$lang['email_no_socket'] = 'No se puede abrir un socket para Sendmail. Por favor, compruebe la configuración';
$lang['email_no_hostname'] = 'No se ha especificado un nombre de host SMTP.';
$lang['email_smtp_error'] = 'Se encontró el siguiente error SMTP:% s';
$lang['email_no_smtp_unpw'] = 'Error: Se debe asignar un nombre de usuario y la contraseña SMTP.';
$lang['email_failed_smtp_login'] = 'No se pudo enviar el comando de autenticación de acceso. Error:% s';
$lang['email_smtp_auth_un'] = 'No se ha podido autenticar nombre de usuario. Error:% s';
$lang['email_smtp_auth_pw'] = 'No se ha podido autenticar contraseña. Error:% s';
$lang['email_smtp_data_failure'] = 'No se pueden enviar los datos:% s';
$lang['email_exit_status'] = 'Código de estado de salida:% s';
