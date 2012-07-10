<?php
/*
Project: PHP Typography
Project URI: http://kingdesk.com/projects/php-typography/
License:     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

File modified to place pattern and exceptions in arrays that can be understood in php files.
This file is released under the same copyright as the below referenced original file
Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
Original file name: hyph-da.tex

//============================================================================================================
ORIGINAL FILE INFO

	% This file is part of hyph-utf8 package and resulted from
	% semi-manual conversions of hyphenation patterns into UTF-8 in June 2008.
	%
	% Source: dkcommon.tex (yyyy-mm-dd),  dkspecial.tex (yyyy-mm-dd)
	% Author: Frank Jensen <frank.jensen at hugin.com>
	%
	% The above mentioned file should become obsolete, 
	% and the author of the original file should preferaby modify this file instead.
	%
	% Modificatios were needed in order to support native UTF-8 engines, 
	% but functionality (hopefully) didn't change in any way,  at least not intentionally.
	% This file is no longer stand-alone; at least for 8-bit engines
	% you probably want to use loadhyph-foo.tex (which will load this file) instead.
	%
	% Modifications were done by Jonathan Kew,  Mojca Miklavec & Arthur Reutenauer
	% with help & support from:
	% - Karl Berry,  who gave us free hands and all resources
	% - Taco Hoekwater,  with useful macros
	% - Hans Hagen,  who did the unicodifisation of patterns already long before
	%               and helped with testing,  suggestions and bug reports
	% - Norbert Preining,  who tested & integrated patterns into TeX Live
	%
	% However,  the 'copyright/copyleft' owner of patterns remains the original author.
	%
	% The copyright statement of this file is thus:
	%
	%    Do with this file whatever needs to be done in future for the sake of
	%    'a better world' as long as you respect the copyright of original file.
	%    If you're the original author of patterns or taking over a new revolution, 
	%    plese remove all of the TUG comments & credits that we added here -
	%    you are the Queen / the King,  we are only the servants.
	%
	% If you want to change this file,  rather than uploading directly to CTAN, 
	% we would be grateful if you could send it to us (http://tug.org/tex-hyphen)
	% or ask for credentials for SVN repository and commit it yourself;
	% we will then upload the whole 'package' to CTAN.
	%
	% Before a new 'pattern-revolution' starts, 
	% please try to follow some guidelines if possible:
	%
	% - \lccode is *forbidden*,  and I really mean it
	% - all the patterns should be in UTF-8
	% - the only 'allowed' TeX commands in this file are: \patterns,  \hyphenation, 
	%   and if you really cannot do without,  also \input and \message
	% - in particular,  please no \catcode or \lccode changes, 
	%   they belong to loadhyph-foo.tex, 
	%   and no \lefthyphenmin and \righthyphenmin, 
	%   they have no influence here and belong elsewhere
	% - \begingroup and/or \endinput is not needed
	% - feel free to do whatever you want inside comments
	%
	% We know that TeX is extremely powerful,  but give a stupid parser
	% at least a chance to read your patterns.
	%
	% For more unformation see
	%
	%    http://tug.org/tex-hyphen
	%
	%------------------------------------------------------------------------------
	%
	% This file contains the hyphenation patterns for Danish.
	%
	%% Copyright 1994 Frank Jensen (Frank.Jensen@hugin.com)
	%
	% This work may be distributed and/or modified under the
	% conditions of the LaTeX Project Public License,  either version 1.3
	% of this license or (at your option) any later version.
	% The latest version of this license is in
	%   http://www.latex-project.org/lppl.txt
	% and version 1.3 or later is part of all distributions of LaTeX
	% version 2003/12/01 or later.


//============================================================================================================	

*/

// No direct access
defined( '_JEXEC' ) or die();

$patgenLanguage = 'Danish';

$patgenExceptions = array();

$patgenMaxSeg = 8;

$patgen = array(
'begin'=>array(
'ae'=>'003',
'ank'=>'0030',
'ans'=>'0010',
'bela'=>'00500',
'bet'=>'0010',
'bitr'=>'00400',
'deri'=>'00030',
'diagno'=>'0000005',
'her'=>'0003',
'hoved'=>'000003',
'net'=>'0045',
'om'=>'001',
'ove'=>'0004',
'po'=>'001',
'til'=>'0003',
'ydr'=>'0050',
'så'=>'003',
'æri'=>'0050',
'øvr'=>'0030'
),
'end'=>array(
'ch'=>'400',
'ha'=>'400',
'iet'=>'0300',
'itre'=>'00500',
'jen'=>'4500',
'le'=>'100',
'or'=>'400',
'ore'=>'0300',
'ple'=>'4000',
'sk'=>'400',
'som'=>'5000',
'sprog'=>'300000',
'st'=>'400',
'ste'=>'1000',
'ster'=>'30000',
'ta'=>'500',
'træk'=>'30000'
),
'all'=>array(
'able'=>'00500',
'abst'=>'30000',
'ac'=>'030',
'adela'=>'000500',
'adg'=>'5000',
'ae'=>'010',
'afg'=>'5000',
'afl'=>'5410',
'afr'=>'0030',
'afri'=>'00400',
'afs'=>'5000',
'agef'=>'04000',
'agi'=>'0400',
'agin'=>'00500',
'agsi'=>'00500',
'agti'=>'30000',
'agy'=>'0400',
'ah'=>'030',
'aist'=>'00050',
'aj'=>'030',
'aka'=>'0500',
'ake'=>'0300',
'akr'=>'0500',
'aku'=>'0005',
'ala'=>'0300',
'ale'=>'0100',
'ali'=>'0100',
'alk'=>'0030',
'alkv'=>'40000',
'alo'=>'0100',
'alsi'=>'00500',
'alu'=>'0300',
'aly'=>'0100',
'ampa'=>'00400',
'analy'=>'300000',
'ankr'=>'00450',
'anu'=>'0300',
'anv'=>'3000',
'ao'=>'050',
'ape'=>'0500',
'api'=>'0300',
'apo'=>'0500',
'ara'=>'0100',
'araf'=>'00500',
'arb'=>'1000',
'are'=>'0100',
'arg'=>'5000',
'ari'=>'0100',
'aro'=>'0300',
'asa'=>'0300',
'asc'=>'0300',
'asi'=>'0100',
'ask'=>'0300',
'aso'=>'0300',
'asp'=>'3300',
'aste'=>'03000',
'asti'=>'03000',
'ata'=>'0101',
'ate'=>'0100',
'ati'=>'0100',
'atin'=>'04500',
'ato'=>'0100',
'atov'=>'00050',
'atr'=>'0500',
'atu'=>'0100',
'ava'=>'0500',
'ave'=>'0100',
'az'=>'050',
'ba'=>'100',
'bati'=>'00400',
'bd'=>'400',
'be'=>'100',
'bek'=>'0010',
'bero'=>'00300',
'beru'=>'00500',
'bes'=>'0014',
'betr'=>'00100',
'bi'=>'100',
'bisk'=>'00500',
'bj'=>'010',
'bn'=>'410',
'bo'=>'100',
'bogr'=>'00400',
'bora'=>'00300',
'bore'=>'00500',
'br'=>'104',
'bs'=>'400',
'bsk'=>'0050',
'bso'=>'0300',
'bst'=>'0100',
'bt'=>'050',
'bu'=>'300',
'bustr'=>'004500',
'bw'=>'050',
'by'=>'100',
'bys'=>'0050',
'cc'=>'410',
'ce'=>'100',
'cero'=>'00500',
'ch'=>'300',
'cio'=>'0040',
'ck'=>'003',
'cy'=>'500',
'da'=>'300',
'daf'=>'4300',
'danta'=>'050000',
'das'=>'0040',
'db'=>'010',
'dd'=>'014',
'de'=>'100',
'ded'=>'0050',
'delem'=>'404000',
'dereri'=>'0005000',
'derig'=>'004000',
'desk'=>'00500',
'df'=>'010',
'dg'=>'010',
'dh'=>'030',
'di'=>'100',
'die'=>'0010',
'dil'=>'0050',
'dj'=>'030',
'dk'=>'010',
'dl'=>'010',
'dm'=>'010',
'dn'=>'410',
'do'=>'300',
'dop'=>'4000',
'dov'=>'0500',
'dp'=>'010',
'drett'=>'400000',
'dreve'=>'540000',
'drif'=>'30000',
'driv'=>'30000',
'dros'=>'05000',
'dru'=>'0500',
'dsan'=>'00500',
'dsin'=>'00500',
'dski'=>'01000',
'dsm'=>'0400',
'dsu'=>'0400',
'dsul'=>'00050',
'dsvi'=>'00500',
'dta'=>'0300',
'dte'=>'0100',
'dto'=>'0050',
'dtr'=>'0500',
'dtu'=>'0050',
'du'=>'100',
'dub'=>'0005',
'dv'=>'010',
'dy'=>'300',
'ead'=>'0500',
'eaf'=>'0300',
'eag'=>'0500',
'eak'=>'0300',
'eal'=>'0100',
'eala'=>'00400',
'ean'=>'0300',
'eap'=>'0500',
'eat'=>'0300',
'ebl'=>'0300',
'ebs'=>'0003',
'eci'=>'0100',
'edar'=>'00500',
'edde'=>'00004',
'eddel'=>'000005',
'edo'=>'0400',
'edra'=>'00500',
'edre'=>'00300',
'edrin'=>'003000',
'edstr'=>'004000',
'ee'=>'030',
'eff'=>'3000',
'efr'=>'0300',
'eft'=>'3000',
'egu'=>'0300',
'eh'=>'010',
'ein'=>'0300',
'eis'=>'0050',
'eje'=>'0300',
'ejel'=>'04500',
'eka'=>'0100',
'eke'=>'0300',
'ekl'=>'0300',
'eko'=>'4100',
'ekr'=>'0500',
'eksa'=>'00500',
'eksem'=>'300000',
'eksp'=>'30000',
'eku'=>'0300',
'ekv'=>'0100',
'eky'=>'0500',
'elad'=>'03000',
'elak'=>'00300',
'elar'=>'00300',
'elas'=>'01000',
'ele'=>'0300',
'elek'=>'04000',
'elem'=>'30000',
'eli'=>'0100',
'elim'=>'50000',
'elo'=>'0300',
'elsa'=>'00500',
'elu'=>'0500',
'ely'=>'0300',
'emad'=>'04000',
'emple'=>'004500',
'ems'=>'0010',
'enak'=>'00500',
'enan'=>'04000',
'enn'=>'4000',
'eno'=>'0400',
'enso'=>'00300',
'enu'=>'0500',
'eol'=>'0500',
'eop'=>'0300',
'eor'=>'0100',
'eov'=>'0300',
'epi'=>'0003',
'epr'=>'0100',
'era'=>'0300',
'eraf'=>'00300',
'erag'=>'04000',
'erak'=>'04000',
'ere'=>'0100',
'eref'=>'04000',
'erege'=>'005000',
'erhv'=>'50000',
'eri'=>'0100',
'erib'=>'04000',
'erk'=>'0010',
'erod'=>'00050',
'erov'=>'00500',
'ers'=>'0030',
'ertr'=>'00500',
'erum'=>'03000',
'erun'=>'00500',
'ery'=>'0500',
'eta'=>'0100',
'ete'=>'0100',
'eteks'=>'000040',
'eti'=>'0100',
'etj'=>'0300',
'eto'=>'0100',
'etr'=>'0300',
'etu'=>'0300',
'ety'=>'0100',
'eum'=>'0300',
'eun'=>'0300',
'eur'=>'3000',
'eva'=>'0100',
'eve'=>'0300',
'everf'=>'043000',
'evi'=>'0100',
'ex'=>'050',
'fa'=>'100',
'face'=>'00400',
'fags'=>'00003',
'fb'=>'010',
'fd'=>'010',
'fe'=>'100',
'fej'=>'0004',
'fejl'=>'00001',
'ff'=>'010',
'fg'=>'010',
'fh'=>'010',
'fi'=>'100',
'fk'=>'010',
'fl'=>'300',
'fo'=>'100',
'foren'=>'000100',
'fori'=>'00400',
'fp'=>'010',
'fs'=>'014',
'ft'=>'400',
'fta'=>'0300',
'fte'=>'0100',
'fti'=>'0100',
'fto'=>'0500',
'ftvi'=>'05000',
'fu'=>'100',
'fv'=>'010',
'fy'=>'300',
'ga'=>'100',
'gart'=>'03000',
'gb'=>'010',
'gd'=>'010',
'ge'=>'100',
'genden'=>'4500000',
'gerin'=>'000300',
'ges'=>'0030',
'gf'=>'030',
'gg'=>'010',
'gh'=>'010',
'gi'=>'100',
'gib'=>'0040',
'gist'=>'00300',
'gj'=>'500',
'gk'=>'030',
'gl'=>'010',
'gm'=>'010',
'go'=>'300',
'gom'=>'4500',
'gov'=>'0500',
'gp'=>'030',
'gr'=>'100',
'gsa'=>'0010',
'gsdelen'=>'00004000',
'gse'=>'0400',
'gsha'=>'00004',
'gsla'=>'05000',
'gsor'=>'00300',
'gsp'=>'0010',
'gstide'=>'0540000',
'gstr'=>'04000',
'gsv'=>'0010',
'gta'=>'0300',
'gte'=>'0100',
'gti'=>'0100',
'gto'=>'0500',
'gtr'=>'0300',
'gts'=>'0040',
'gud'=>'0300',
'gun'=>'0005',
'gv'=>'030',
'gy'=>'100',
'gyd'=>'0500',
'heds'=>'00003',
'hes'=>'0050',
'het'=>'4000',
'hie'=>'0040',
'hin'=>'0045',
'his'=>'0030',
'hoko'=>'00500',
'hove'=>'00500',
'ht'=>'430',
'hun'=>'0004',
'hund'=>'00003',
'hvo'=>'0004',
'ia'=>'010',
'ib'=>'030',
'ible'=>'04000',
'ic'=>'010',
'idr'=>'0300',
'idsk'=>'00050',
'iel'=>'0100',
'ien'=>'0100',
'ier'=>'0300',
'ifr'=>'0030',
'igu'=>'0300',
'ih'=>'030',
'ii'=>'050',
'ij'=>'050',
'ika'=>'0100',
'ike'=>'0100',
'ikl'=>'0010',
'iko'=>'0500',
'ikre'=>'00300',
'ikri'=>'00500',
'ikst'=>'00050',
'iktu'=>'00400',
'iku'=>'0300',
'ikv'=>'0030',
'ilag'=>'03000',
'ileg'=>'00300',
'ilej'=>'00500',
'ilel'=>'00500',
'ili'=>'0300',
'ilid'=>'04500',
'ilk'=>'0030',
'ilo'=>'0100',
'ilu'=>'0050',
'imu'=>'0300',
'indt'=>'00030',
'inf'=>'5000',
'ings'=>'00001',
'ins'=>'0030',
'insv'=>'00400',
'inter'=>'000001',
'inu'=>'0300',
'iod'=>'0300',
'iog'=>'0300',
'iok'=>'0500',
'iol'=>'0300',
'ion'=>'0004',
'ions'=>'00001',
'ior'=>'0550',
'iot'=>'0300',
'ipi'=>'0500',
'ipli'=>'03000',
'ipr'=>'0500',
'ire'=>'0300',
'iri'=>'0300',
'irt'=>'0050',
'isc'=>'0300',
'isi'=>'0300',
'ism'=>'0400',
'isp'=>'0030',
'ister'=>'010000',
'isti'=>'03000',
'isua'=>'05000',
'ita'=>'0100',
'ite'=>'0100',
'iti'=>'0100',
'ito'=>'0300',
'itr'=>'0300',
'itu'=>'0100',
'ity'=>'0300',
'iu'=>'010',
'iva'=>'0100',
'ive'=>'0100',
'ivi'=>'0100',
'jag'=>'0300',
'jderer'=>'0004000',
'jds'=>'0001',
'jekto'=>'000400',
'jk'=>'050',
'jle'=>'0300',
'jli'=>'0300',
'jlmeld'=>'0000005',
'jlmeldi'=>'00000400',
'jr'=>'030',
'jre'=>'0005',
'jus'=>'0030',
'kap'=>'5000',
'kau'=>'0500',
'kav'=>'5000',
'kb'=>'050',
'kels'=>'00050',
'kesk'=>'00300',
'kest'=>'00500',
'keta'=>'00450',
'kh'=>'030',
'kie'=>'0030',
'kist'=>'00300',
'kk'=>'010',
'klak'=>'05000',
'kle'=>'0100',
'klu'=>'3000',
'kny'=>'0400',
'kod'=>'5000',
'kon'=>'1000',
'kora'=>'00300',
'kort'=>'30000',
'kov'=>'0030',
'kra'=>'1000',
'kry'=>'5000',
'ksan'=>'00300',
'ksi'=>'0100',
'ksk'=>'0030',
'ksp'=>'0010',
'kste'=>'03000',
'kstu'=>'05000',
'ksv'=>'0050',
'kt'=>'010',
'ktar'=>'04000',
'kterh'=>'040000',
'ktie'=>'00040',
'ktre'=>'00500',
'kts'=>'0050',
'kur'=>'3000',
'kus'=>'1000',
'kut'=>'3000',
'kvo'=>'0400',
'kvu'=>'0400',
'lab'=>'5000',
'ladr'=>'00030',
'lagd'=>'50000',
'lagr'=>'00430',
'lam'=>'5000',
'lat'=>'1000',
'lb'=>'010',
'ldiagnos'=>'000000005',
'ldr'=>'0300',
'ldst'=>'00300',
'led'=>'5000',
'lele'=>'40000',
'lemo'=>'00400',
'len'=>'3000',
'ler'=>'1000',
'les'=>'1000',
'leu'=>'4000',
'lf'=>'010',
'lfin'=>'00004',
'lfind'=>'000005',
'lgo'=>'0101',
'lh'=>'030',
'liga'=>'00400',
'lins'=>'45000',
'lint'=>'43000',
'lio'=>'0050',
'lj'=>'030',
'lke'=>'0100',
'lko'=>'0100',
'lky'=>'0300',
'll'=>'010',
'lmu'=>'0500',
'lodu'=>'00400',
'lop'=>'0300',
'lor'=>'4500',
'lov'=>'3000',
'lp'=>'430',
'lps'=>'0400',
'lr'=>'030',
'ls'=>'400',
'lses'=>'00001',
'lsin'=>'00500',
'lsj'=>'0500',
'lta'=>'0100',
'ltaf'=>'04000',
'lte'=>'0100',
'lterf'=>'045000',
'lti'=>'0300',
'lto'=>'0030',
'ltr'=>'0300',
'ltu'=>'0300',
'lul'=>'0050',
'lve'=>'0300',
'lvi'=>'0300',
'ma'=>'100',
'mb'=>'010',
'md'=>'030',
'me'=>'100',
'mej'=>'4500',
'mf'=>'030',
'mg'=>'010',
'mh'=>'030',
'mi'=>'100',
'mik'=>'0030',
'ming'=>'05000',
'mio'=>'0040',
'misty'=>'005000',
'mk'=>'030',
'ml'=>'010',
'mm'=>'010',
'mmen'=>'00005',
'mn'=>'010',
'mo'=>'300',
'moda'=>'00400',
'mop'=>'4000',
'mov'=>'4500',
'mpe'=>'0100',
'mpi'=>'0300',
'mpl'=>'0300',
'mpo'=>'0100',
'mpr'=>'0300',
'mr'=>'010',
'mses'=>'00050',
'msin'=>'00500',
'msk'=>'0500',
'msp'=>'0030',
'mste'=>'03000',
'msv'=>'0050',
'mta'=>'0300',
'mte'=>'0300',
'mti'=>'0300',
'mtr'=>'0300',
'mud'=>'0100',
'mul'=>'1000',
'muli'=>'00100',
'my'=>'300',
'na'=>'300',
'nak'=>'4000',
'nal'=>'1000',
'nb'=>'010',
'nc'=>'010',
'nd'=>'400',
'ndr'=>'0300',
'ndsi'=>'00500',
'ndsk'=>'00500',
'ndsp'=>'00500',
'ne'=>'100',
'nea'=>'0050',
'neda'=>'00400',
'nemen'=>'000004',
'nemente'=>'00000050',
'neo'=>'0004',
'nerk'=>'03000',
'nerl'=>'05000',
'nesl'=>'00500',
'nest'=>'00500',
'nf'=>'010',
'ngo'=>'0400',
'nh'=>'410',
'ni'=>'100',
'nim'=>'4000',
'nio'=>'0050',
'nist'=>'00300',
'nke'=>'0100',
'nko'=>'0100',
'nkr'=>'0300',
'nku'=>'0300',
'nkv'=>'0500',
'nl'=>'410',
'nm'=>'010',
'nn'=>'010',
'no'=>'100',
'nord'=>'03000',
'np'=>'050',
'nr'=>'030',
'ns'=>'400',
'nsi'=>'0300',
'nsku'=>'01000',
'nspo'=>'00300',
'nsta'=>'01000',
'nsti'=>'05000',
'nta'=>'0100',
'ntale'=>'000400',
'nte'=>'0100',
'nti'=>'0100',
'ntiali'=>'0000004',
'nto'=>'0300',
'ntr'=>'0100',
'ntst'=>'00450',
'ntsu'=>'00400',
'ntu'=>'0300',
'nty'=>'0300',
'nv'=>'410',
'ny'=>'300',
'nz'=>'030',
'oa'=>'030',
'oas'=>'0400',
'obli'=>'00300',
'oc'=>'010',
'odin'=>'04000',
'odri'=>'00500',
'ods'=>'0050',
'odun'=>'00500',
'oe'=>'010',
'ofr'=>'0050',
'ogek'=>'04000',
'ogel'=>'04000',
'ogo'=>'0450',
'ogre'=>'00500',
'ogsk'=>'00500',
'oh'=>'050',
'oin'=>'0500',
'oise'=>'00650',
'oj'=>'010',
'oka'=>'0300',
'oke'=>'0100',
'oku'=>'0300',
'ola'=>'0300',
'ole'=>'0300',
'oli'=>'0100',
'olo'=>'0100',
'olu'=>'0300',
'oly'=>'0500',
'omr'=>'1000',
'onk'=>'0030',
'ook'=>'0005',
'oor'=>'0300',
'oov'=>'0500',
'opi'=>'0300',
'opl'=>'0030',
'opr'=>'0030',
'ops'=>'0030',
'opta'=>'30000',
'oran'=>'00100',
'ordn'=>'30000',
'ords'=>'00050',
'oreg'=>'03000',
'orek'=>'03000',
'orer'=>'03000',
'ores'=>'03030',
'oret'=>'03000',
'ori'=>'0300',
'orient'=>'3000000',
'orim'=>'00500',
'orin'=>'04500',
'ork'=>'0030',
'oro'=>'0050',
'orsl'=>'00300',
'orst'=>'00300',
'osi'=>'0300',
'oso'=>'0300',
'ot'=>'030',
'ote'=>'0100',
'oun'=>'0500',
'ovs'=>'0040',
'pa'=>'300',
'pagh'=>'00500',
'panl'=>'05000',
'pd'=>'030',
'pec'=>'4000',
'pen'=>'3000',
'per'=>'1000',
'pera'=>'00100',
'pes'=>'0050',
'peu'=>'0030',
'pf'=>'030',
'ph'=>'450',
'pla'=>'1000',
'plan'=>'04000',
'pler'=>'40000',
'ples'=>'40000',
'pm'=>'030',
'pn'=>'030',
'pok'=>'5000',
'pore'=>'40300',
'pot'=>'3000',
'pp'=>'454',
'pro'=>'0400',
'proc'=>'10000',
'psk'=>'0300',
'pso'=>'0500',
'psp'=>'0040',
'pst'=>'0300',
'pt'=>'010',
'pu'=>'100',
'pub'=>'0050',
'pule'=>'05000',
'pv'=>'050',
'py'=>'503',
'qu'=>'004',
'raf'=>'4000',
'rais'=>'00500',
'rarb'=>'40000',
'rb'=>'010',
'rdar'=>'04500',
'rdr'=>'0300',
'rds'=>'0043',
'reks'=>'40000',
'rel'=>'1000',
'rela'=>'00500',
'renss'=>'050000',
'rese'=>'50000',
'respo'=>'005000',
'ress'=>'40000',
'rest'=>'00300',
'resu'=>'00540',
'rett'=>'50000',
'rf'=>'010',
'rgu'=>'0100',
'rh'=>'010',
'rie'=>'0010',
'rila'=>'00500',
'rimo'=>'40000',
'ring'=>'04000',
'ringse'=>'0000004',
'ringsor'=>'00000040',
'rinp'=>'40000',
'rint'=>'40000',
'rka'=>'0300',
'rke'=>'0100',
'rki'=>'0100',
'rkso'=>'00300',
'rku'=>'0300',
'rl'=>'010',
'rmo'=>'0004',
'rmu'=>'0500',
'rn'=>'010',
'rob'=>'0010',
'rop'=>'0030',
'ror'=>'0300',
'rp'=>'030',
'rr'=>'010',
'rres'=>'00050',
'rron'=>'00045',
'rsa'=>'0100',
'rsi'=>'0100',
'rskr'=>'05000',
'rskv'=>'04050',
'rsn'=>'0040',
'rsp'=>'0300',
'rstu'=>'05000',
'rsu'=>'0500',
'rsv'=>'0300',
'rtal'=>'05000',
'rte'=>'0100',
'rteli'=>'040000',
'rti'=>'0100',
'rto'=>'0300',
'rtor'=>'04500',
'rtrat'=>'005000',
'rtre'=>'00300',
'rtri'=>'05000',
'rtro'=>'05000',
'rts'=>'0030',
'rty'=>'0500',
'rud'=>'0300',
'runda'=>'000400',
'rut'=>'5000',
'rva'=>'0300',
'rve'=>'0100',
'rvi'=>'0300',
'rys'=>'0040',
'saf'=>'0300',
'sam'=>'1000',
'sama'=>'00400',
'sap'=>'0300',
'sar'=>'0100',
'sat'=>'1000',
'sb'=>'410',
'sd'=>'010',
'sdy'=>'0004',
'se'=>'100',
'sed'=>'0400',
'ser'=>'5400',
'sese'=>'00400',
'sf'=>'010',
'sg'=>'414',
'sh'=>'430',
'sibl'=>'00400',
'sig'=>'1000',
'sint'=>'05000',
'sis'=>'5000',
'sit'=>'5000',
'siu'=>'5000',
'sju'=>'0500',
'skab'=>'10000',
'ske'=>'1000',
'skl'=>'0300',
'sks'=>'0054',
'sky'=>'5000',
'sle'=>'0100',
'sli'=>'0100',
'slo'=>'0003',
'slu'=>'5000',
'sly'=>'0500',
'sm'=>'010',
'smy'=>'0400',
'snin'=>'40000',
'snit'=>'04000',
'sok'=>'0050',
'sol'=>'5000',
'somm'=>'30000',
'soms'=>'05000',
'somt'=>'50000',
'son'=>'3000',
'sop'=>'4100',
'sp'=>'004',
'spec'=>'30000',
'sper'=>'40000',
'spi'=>'3400',
'spl'=>'0100',
'sr'=>'054',
'ss'=>'014',
'stam'=>'54000',
'stan'=>'10000',
'stas'=>'00500',
'stat'=>'30000',
'stav'=>'10000',
'sted'=>'10000',
'stel'=>'30000',
'stemo'=>'500000',
'sten'=>'10000',
'step'=>'50000',
'stes'=>'30000',
'stet'=>'50000',
'stj'=>'5000',
'sto'=>'3000',
'stom'=>'00500',
'str'=>'1000',
'sud'=>'0100',
'sul'=>'3000',
'sun'=>'0300',
'sur'=>'3000',
'sve'=>'0300',
'sy'=>'340',
'sys'=>'1010',
'tag'=>'1000',
'tands'=>'000003',
'tanv'=>'40000',
'tb'=>'400',
'tedel'=>'000040',
'teds'=>'00005',
'teg'=>'3000',
'tekn'=>'50000',
'teo'=>'0001',
'term'=>'50000',
'tero'=>'00500',
'tf'=>'410',
'tg'=>'630',
'th'=>'010',
'tialist'=>'00000050',
'tid'=>'3000',
'tien'=>'00400',
'tist'=>'00300',
'tk'=>'430',
'tl'=>'410',
'tlis'=>'00045',
'tm'=>'010',
'tn'=>'010',
'tora'=>'00500',
'tore'=>'00100',
'tori'=>'00100',
'torm'=>'00040',
'tp'=>'430',
'tra'=>'0400',
'tres'=>'40000',
'trov'=>'00050',
'try'=>'1000',
'ts'=>'400',
'tsi'=>'0300',
'tspa'=>'00400',
'tspr'=>'00500',
'tst'=>'0300',
'tsul'=>'00500',
'tt'=>'410',
'tuds'=>'05000',
'tur'=>'5000',
'tve'=>'0500',
'typ'=>'1000',
'ua'=>'010',
'udl'=>'5000',
'udr'=>'0050',
'uds'=>'0030',
'udv'=>'3000',
'ue'=>'010',
'uet'=>'0045',
'ugeri'=>'000400',
'ugs'=>'0003',
'ugu'=>'0500',
'ui'=>'030',
'ukl'=>'0500',
'ukta'=>'00400',
'uktr'=>'00400',
'ula'=>'0100',
'ule'=>'0100',
'uly'=>'0500',
'upe'=>'0500',
'upl'=>'0050',
'uq'=>'050',
'ura'=>'0300',
'ure'=>'0300',
'ureg'=>'04300',
'urer'=>'01000',
'uro'=>'0300',
'usa'=>'0050',
'usi'=>'0300',
'uska'=>'05000',
'uso'=>'0500',
'usv'=>'0050',
'ute'=>'0100',
'uti'=>'0100',
'uto'=>'0100',
'utr'=>'0050',
'uts'=>'0054',
'uv'=>'550',
'vad'=>'0050',
'varm'=>'30000',
'ved'=>'1000',
'vele'=>'00450',
'vereg'=>'004000',
'ves'=>'0030',
'vet'=>'5000',
'vh'=>'050',
'vilin'=>'004300',
'vis'=>'1000',
'vj'=>'050',
'vk'=>'050',
'vl'=>'004',
'vle'=>'0300',
'vli'=>'0500',
'vls'=>'0001',
'vo'=>'100',
'vom'=>'4500',
'vp'=>'050',
'vre'=>'0500',
'vst'=>'0300',
'vsu'=>'0500',
'vt'=>'050',
'vu'=>'300',
'ya'=>'030',
'ydr'=>'0500',
'ye'=>'030',
'yke'=>'0300',
'yki'=>'0500',
'ykli'=>'00300',
'yko'=>'0300',
'yks'=>'0045',
'ykv'=>'0300',
'yli'=>'0500',
'ylo'=>'0500',
'ymu'=>'0500',
'yns'=>'0005',
'yo'=>'050',
'ype'=>'0100',
'ypi'=>'0300',
'yre'=>'0300',
'yrek'=>'00300',
'yri'=>'0300',
'ysi'=>'0300',
'yti'=>'0300',
'ytr'=>'0530',
'yve'=>'0500',
'zio'=>'0050',
'atø'=>'0300',
'avæ'=>'0500',
'brød'=>'00003',
'bæ'=>'500',
'drøv'=>'50000',
'dstå'=>'00004',
'dæ'=>'300',
'dø'=>'300',
'elæ'=>'0300',
'elø'=>'0300',
'erø'=>'0300',
'erøn'=>'00500',
'etæ'=>'0500',
'etø'=>'0500',
'evæ'=>'0100',
'eæ'=>'030',
'eå'=>'050',
'fæ'=>'300',
'fø'=>'300',
'føren'=>'004500',
'giø'=>'0004',
'gsø'=>'0400',
'gså'=>'0500',
'gæ'=>'300',
'gø'=>'301',
'gå'=>'300',
'itæ'=>'0500',
'iø'=>'030',
'kø'=>'300',
'kå'=>'300',
'lingeniø'=>'000000004',
'lvæ'=>'0300',
'løs'=>'5000',
'mtå'=>'0500',
'mæ'=>'100',
'mø'=>'300',
'må'=>'300',
'nkæ'=>'0300',
'ntæ'=>'0500',
'næ'=>'300',
'næb'=>'4500',
'nø'=>'500',
'olæ'=>'0500',
'orø'=>'0030',
'oå'=>'050',
'præ'=>'5000',
'pæd'=>'5000',
'på'=>'003',
'rkæ'=>'0500',
'rtæ'=>'0500',
'rtø'=>'0500',
'rvæ'=>'0300',
'ræl'=>'0500',
'røn'=>'4000',
'rør'=>'5000',
'råd'=>'3000',
'rår'=>'0500',
'skå'=>'0400',
'slå'=>'3000',
'snæ'=>'0400',
'stø'=>'5000',
'stå'=>'1000',
'sæ'=>'100',
'sæn'=>'4500',
'sø'=>'100',
'søk'=>'0500',
'sår'=>'0045',
'tiø'=>'0040',
'tsø'=>'0400',
'tså'=>'0500',
'tvæ'=>'0300',
'ulæ'=>'0300',
'værd'=>'30000',
'værk'=>'10000',
'vå'=>'500',
'yvæ'=>'0500',
'æbl'=>'0030',
'æc'=>'030',
'æe'=>'030',
'æga'=>'0050',
'ægek'=>'04000',
'ægr'=>'0450',
'ægs'=>'0005',
'æi'=>'050',
'ækv'=>'0500',
'ælle'=>'00004',
'ændr'=>'00100',
'æo'=>'050',
'ære'=>'0100',
'ærgr'=>'00450',
'æri'=>'0300',
'ærma'=>'00400',
'ærmo'=>'00400',
'ærs'=>'0050',
'æsi'=>'0500',
'æso'=>'0300',
'æste'=>'03000',
'æve'=>'0300',
'øde'=>'0005',
'øe'=>'030',
'øje'=>'0100',
'øke'=>'0300',
'øle'=>'0300',
'øms'=>'0005',
'ønst'=>'00300',
'ønt'=>'0043',
'øre'=>'0100',
'øri'=>'0300',
'ørne'=>'00003',
'øro'=>'0050',
'øve'=>'0100',
'åd'=>'010',
'åe'=>'010',
'åh'=>'050',
'ål'=>'030',
'åre'=>'0300',
'årst'=>'00050',
'åsk'=>'0500',
'åt'=>'030'
)
);

?>