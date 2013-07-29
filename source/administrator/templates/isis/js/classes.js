/**
 * @package     XAP.Administrator
 * @subpackage  Templates.isis
 *
 * @copyright   Copyright (C) 1997 - 2013 devXive - research and development. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @since       3.0
 */

// Add classes

window.onload=function() {
var input = document.getElementsByTagName("input");
for (var i = 0; i < input.length; i++) {
    if (input[i].className == 'button') {
        input[i].className = 'btn btn-primary';
    }
}

var button = document.getElementsByTagName("button");
for (var i = 0; i < input.length; i++) {
    if (button[i].className == 'button') {
        button[i].className = 'btn btn-primary';
    }
}

var p = document.getElementsByTagName("p");
for (var i = 0; i < p.length; i++) {
    if (p[i].className == 'readmore') {
        p[i].className = 'btn';
    }
}

var table = document.getElementsByTagName("table");
for (var i = 0; i < table.length; i++) {
    if (table[i].className == 'category') {
        table[i].className = 'table table-striped';
    }
}

var ul = document.getElementsByTagName("ul");
for (var i = 0; i < ul.length; i++) {
    if (ul[i].className == 'actions') {
        ul[i].className = 'nav nav-pills';
    }
}

var ul = document.getElementsByTagName("ul");
for (var i = 0; i < ul.length; i++) {
    if (ul[i].className == 'pagenav') {
        ul[i].className = 'pagination';
    }
}
}