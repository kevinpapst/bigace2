<?php
/**
 * BIGACE - a PHP and MySQL based Web CMS.
 * Copyright (C) Kevin Papst.
 * 
 * BIGACE is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * BIGACE is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software Foundation, 
 * Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * For further information visit {@link http://www.bigace.de http://www.bigace.de}.
 *
 * @package bigace.classes
 * @subpackage exception
 */

import('classes.exception.AdministrationException');

/**
 * This represents a MissingRightException, using the 403 error code. 
 * 
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Kevin Papst 
 * @copyright Copyright (C) Kevin Papst
 * @version $Id$
 * @package bigace.classes
 * @subpackage exception
 */
class MissingRightException extends AdministrationException
{
	
    /**
     * Creates a new MissingRightException.
     * 
     * @param int the Error Code
     * @param String the Error Message
     * @param String the URL of this Exception (can be used for creating Back links)
     * @access public
     */
    function MissingRightException($code,$message,$url = '',$namespace="") 
    {
    	$this->AdministrationException(403,$message,$url,$namespace);
    }

}

?>