<?php
/**
 * Locales extension for Twig
 *
 * PHP version 5
 *
 * Copyright © 2019 The Galette Team
 *
 * This file is part of Galette (http://galette.tuxfamily.org).
 *
 * Galette is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Galette is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  I18n
 * @package   Galette
 *
 * @author    Johan Cwiklinski <johan@x-tnd.be>
 * @copyright 2019 The Galette Team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @link      http://galette.tuxfamily.org
 */

namespace Galette\TwigExtension;

class Locales extends \Twig_Extension
{
   /**
    * Sets aliases for functions
    *
    * @see Twig_Extension::getFunctions()
    * @return array
    */
    public function getFunctions()
    {
        return [
         new \Twig_SimpleFunction('_T', '_T'),
         new \Twig_SimpleFunction('__s', '__s'),
         new \Twig_SimpleFunction('_e', '_e'),
         new \Twig_SimpleFunction('_ex', '_ex'),
         new \Twig_SimpleFunction('_n', '_n'),
         new \Twig_SimpleFunction('_nx', '_nx'),
         new \Twig_SimpleFunction('_sn', '_sn'),
         new \Twig_SimpleFunction('_sx', '_sx'),
         new \Twig_SimpleFunction('_x', '_x'),
        ];
    }

   /**
    * Returns the name of the extension.
    *
    * @return string The extension name
    *
    * @see Twig_ExtensionInterface::getName()
    */
    public function getName()
    {
        return 'galette_locales';
    }
}
