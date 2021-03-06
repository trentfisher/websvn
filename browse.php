<?php
// WebSVN - Subversion repository viewing via the web using PHP
// Copyright (C) 2004-2006 Tim Armes
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
//
// --
//
// browse.php
//
// Stub for MultiViewsIndex

// --- CONFIGURE THESE VARIABLES ---

// Location of websvn directory via HTTP
//
// e.g. For "http://www.example.com/websvn" use '/websvn'
//
// Note that browse.php need not be in the /websvn directory (and often isn't).
// If you want to use the root server directory, just use a blank string ('').
$locwebsvnhttp = !empty($_SERVER['CONTEXT_PREFIX']) ? $_SERVER['CONTEXT_PREFIX'] : '/websvn';

// Physical location of websvn directory. Change this if your browse.php is not in
// the same directory as the rest of the distribution
$locwebsvnreal = dirname(__FILE__);

require $locwebsvnreal.'/multiviews.php';

