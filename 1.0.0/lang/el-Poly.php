<?php
/*
	Project: PHP Typography
	Project URI: http://kingdesk.com/projects/php-typography/
    License:     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
	
	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
	Original file name: hyph-el-polyton.tex
	
//============================================================================================================
	ORIGINAL FILE INFO

		% ****************************************************************
		%
		% File name: grphyph5-unicode.tex
		%
		% This file was first created by mechanical translation from 
		% GRPhyph5.tex via 'elhyph-utf8 -p -c' (version 0.1 by Peter 
		% Heslin -- p.j.heslin@durham.ac.uk). Some additions were 
		% also made by hand.
		%
		% Created:       June 6, 2008
		%
		% Hyphenation patterns for Modern Polytonic Greek.
		%
		% Created by Dimitrios Filippou with some ideas borrowed from 
		% Yannis Haralambous, Kostis Dryllerakis and Claudio Beccari.
		% 
		% These hyphenation patterns are explained in 'ancient.pdf'.
		% Hyphenation examples are given in the file 'anc-test.pdf'.
		% Some doubtful patterns are marked by three question marks '???'. 
		% 
		% Documentation in English can be found in: D. Filippou, 
		% 'Hyphenation patterns for Ancient and Modern Greek, ' in 
		% 'TeX, XML, and Digital Typography' (A. Syropoulos et al.,
		% eds.), Lecture Notes in Computer Science 3130, Springer-Verlag
		% Berlin-Heidelberg, 2004. ISBN 3-540-22801-2.
		% 
		% ****************************************************************
		%
		% \message{UTF-8 hyphenation patterns for Modern, Polytonic Greek}


//============================================================================================================	
	
*/

// No direct access
defined( '_JEXEC' ) or die();

$patgenLanguage = 'Greek (Modern Polytonic)';

$patgenExceptions = array();

$patgenMaxSeg = 10;

$patgen = array(
'begin'=>array(
'ί'=>'03',
'ῖ'=>'03',
'ἰ'=>'03',
'ἱ'=>'03',
'ή'=>'03',
'ῆ'=>'03',
'ἠ'=>'03',
'ἡ'=>'03',
'ύ'=>'03',
'ῦ'=>'03',
'ὑ'=>'03',
'β'=>'06',
'γ'=>'06',
'δ'=>'06',
'ζ'=>'06',
'θ'=>'06',
'κ'=>'06',
'λ'=>'06',
'μ'=>'06',
'ν'=>'06',
'ξ'=>'06',
'π'=>'06',
'ρ'=>'06',
'σ'=>'06',
'ϲ'=>'06',
'τ'=>'06',
'φ'=>'06',
'χ'=>'06',
'ψ'=>'06',
'γιουγκο'=>'00005200',
'καραγκι'=>'00005200',
'μαγκιό'=>'0052000',
'μπαγκ'=>'000520',
'μπιγκ'=>'000520',
'ντάγκλ'=>'0005200',
'νταγκλ'=>'0005200',
'ξεγκ'=>'00520',
'ξέγκ'=>'00520',
'σαλτιπάγκ'=>'0000000520',
'ϲαλτιπάγκ'=>'0000000520',
'σιγκ'=>'00520',
'ϲιγκ'=>'00520',
'σπάγκ'=>'000520',
'ϲπάγκ'=>'000520',
'σπαγκ'=>'000520',
'ϲπαγκ'=>'000520',
'φιόγκ'=>'000520',
'φιογκ'=>'000520',
'χούλιγκ'=>'00000520',
'χουλιγκ'=>'00000520',
'βόμπιρ'=>'0052000',
'βομπιρ'=>'0052000',
'γάμπι'=>'005200',
'γαμπι'=>'005200',
'γιαραμπ'=>'00000520',
'ζεϊμπ'=>'000520',
'καλαμπα'=>'00005200',
'καλίμπρ'=>'00005200',
'καλιμπρ'=>'00005200',
'καμπάδ'=>'0052000',
'καμπαρέ'=>'00520000',
'καμπαρὲ'=>'00520000',
'καμπαρε'=>'00520000',
'καμπίν'=>'0052000',
'καμπῖν'=>'0052000',
'καμπιν'=>'0052000',
'κάμποτ'=>'0052000',
'καμπότ'=>'0052000',
'καμποτ'=>'0052000',
'καουμπ'=>'0000520',
'καραμπ'=>'0000520',
'καραμπόλ'=>'000063000',
'καραμπολ'=>'000063000',
'καρναμπ'=>'00000520',
'κεμπ'=>'00520',
'κολιμπρ'=>'00005200',
'κολούμπρ'=>'000005200',
'κολοῦμπρ'=>'000005200',
'κολουμπρ'=>'000005200',
'κόμπρ'=>'005200',
'κομπρ'=>'005200',
'κομπρέσσ'=>'006300000',
'κομπρέϲϲ'=>'006300000',
'κομπρεσσ'=>'006300000',
'κομπρεϲϲ'=>'006300000',
'κοντραμπ'=>'000000520',
'κουλούμπρ'=>'0000005200',
'κουλοῦμπρ'=>'0000005200',
'κουλουμπρ'=>'0000005200',
'κουμπού'=>'00052000',
'κουμποῦ'=>'00052000',
'κουμπου'=>'00052000',
'κωλούμπρ'=>'000005200',
'κωλοῦμπρ'=>'000005200',
'κωλουμπρ'=>'000005200',
'λιμπρ'=>'005200',
'λόμπ'=>'00520',
'μανιτόμπ'=>'000000520',
'μπαμπάκι'=>'000630000',
'μπαμπακι'=>'000630000',
'μπασκετμπ'=>'0000002520',
'μπαϲκετμπ'=>'0000002520',
'μπασιμπουζ'=>'00000520000',
'μπαϲιμπουζ'=>'00000520000',
'μπιμπ'=>'000520',
'μπόμπιρ'=>'00052000',
'μπομπιρ'=>'00052000',
'μπομπότ'=>'00052000',
'μπομποτ'=>'00052000',
'μπουμπούν'=>'0000520000',
'μπουμποῦν'=>'0000520000',
'μπουμπουν'=>'0000520000',
'νόμπελ'=>'0052000',
'νομπελ'=>'0052000',
'ντόμπρ'=>'0005200',
'ντομπρ'=>'0005200',
'ξεμπ'=>'00520',
'ξέμπ'=>'00520',
'ρεμπ'=>'00520',
'ρέμπ'=>'00520',
'ρεπούμπλ'=>'000005200',
'ρεπουμπλ'=>'000005200',
'ρομπ'=>'00520',
'τρομπ'=>'000630',
'τρόμπ'=>'000630',
'ρουμπ'=>'000520',
'σαμποτ'=>'0025000',
'ϲαμποτ'=>'0025000',
'σέμπρ'=>'005200',
'ϲέμπρ'=>'005200',
'σκαμπαβ'=>'00052000',
'ϲκαμπαβ'=>'00052000',
'σνομπ'=>'000520',
'ϲνομπ'=>'000520',
'σούμπ'=>'000520',
'ϲούμπ'=>'000520',
'σουμπ'=>'000520',
'ϲουμπ'=>'000520',
'ταβλαμπ'=>'00000520',
'ταμπ'=>'00520',
'ταμπεραμ'=>'006300000',
'ταμποῦρλ'=>'006300000',
'ταμπούρλ'=>'006300000',
'τεμπεσ'=>'0052000',
'τεμπεϲ'=>'0052000',
'τζάμπ'=>'000520',
'τζαμπ'=>'000520',
'τζαναμπ'=>'00000520',
'τζιμπ'=>'000520',
'τζουμπ'=>'0000520',
'τόμπρ'=>'005200',
'τομπρ'=>'005200',
'τραμπάλ'=>'00052000',
'τραμπαλ'=>'00052000',
'τραμποῦκ'=>'000520000',
'τραμπούκ'=>'000520000',
'τραμπουκ'=>'000520000',
'τσάμπα'=>'0005200',
'τϲάμπα'=>'0005200',
'τσαμπα'=>'0005200',
'τϲαμπα'=>'0005200',
'τσιμπούκ'=>'000520000',
'τϲιμπούκ'=>'000520000',
'τσιμπουκ'=>'000520000',
'τϲιμπουκ'=>'000520000',
'τσιμπούσ'=>'000520000',
'τϲιμπούϲ'=>'000520000',
'τσιμπουσ'=>'000520000',
'τϲιμπουϲ'=>'000520000',
'φάμπρικ'=>'00520000',
'φαμπρικ'=>'00520000',
'φραμπ'=>'000520',
'χαμπ'=>'00520',
'χόμπ'=>'00520',
'χοντρομπα'=>'0000005200',
'βίντε'=>'005200',
'βιντε'=>'005200',
'γιαχουντ'=>'000000520',
'γιβεντ'=>'0000520',
'γκάιντ'=>'0000520',
'γκάϊντ'=>'0000520',
'γκαϊντ'=>'0000520',
'κανταΐ'=>'0052000',
'κανταϊ'=>'0052000',
'καντρ'=>'005200',
'λικβινταρ'=>'0000052000',
'μαϊντ'=>'000520',
'μαντάμ'=>'0052000',
'μαντὰμ'=>'0052000',
'μανταμ'=>'0052000',
'μαντέμ'=>'0052000',
'μαντεμ'=>'0052000',
'μεϊντά'=>'0005200',
'μεϊντα'=>'0005200',
'μοντέλ'=>'0052000',
'μοντελ'=>'0052000',
'μπαλάντ'=>'00000520',
'μπαλαντ'=>'00000520',
'μπανταν'=>'00052000',
'μπεντ'=>'000520',
'μπιντ'=>'000520',
'μπουντα'=>'00005200',
'μπουντρ'=>'00005200',
'νισαντ'=>'0000520',
'νιϲαντ'=>'0000520',
'νταντ'=>'000520',
'ντερμπεντ'=>'0000000520',
'ντουντούκ'=>'0000520000',
'ντουντοῦκ'=>'0000520000',
'ντουντουκ'=>'0000520000',
'ξεντ'=>'00520',
'ξέντ'=>'00520',
'ρεζεντ'=>'0000520',
'ρεντί'=>'005200',
'ρεντι'=>'005200',
'ροῦντ'=>'000520',
'ρούντ'=>'000520',
'σεντέφ'=>'0052000',
'ϲεντέφ'=>'0052000',
'σεντεφ'=>'0052000',
'ϲεντεφ'=>'0052000',
'σεντοῦ'=>'0052000',
'ϲεντοῦ'=>'0052000',
'σεντού'=>'0052000',
'ϲεντού'=>'0052000',
'σεντου'=>'0052000',
'ϲεντου'=>'0052000',
'τσαντί'=>'0005200',
'τϲαντί'=>'0005200',
'τσαντι'=>'0005200',
'τϲαντι'=>'0005200',
'φαστφουντ'=>'0000000520',
'φαϲτφουντ'=>'0000000520',
'χαντο'=>'005200',
'χαντρ'=>'005200',
'χάντρ'=>'005200'
),
'end'=>array(
'άη'=>'030',
'άι'=>'030',
'άϊ'=>'030',
'όη'=>'030',
'όι'=>'030',
'όϊ'=>'030',
'β'=>'60',
'γ'=>'60',
'γκ'=>'600',
'δ'=>'60',
'ζ'=>'60',
'θ'=>'60',
'κ'=>'60',
'λ'=>'60',
'μ'=>'60',
'μπ'=>'600',
'ν'=>'60',
'ντ'=>'600',
'ξ'=>'60',
'π'=>'60',
'ρ'=>'60',
'σ'=>'60',
'ϲ'=>'60',
'ς'=>'60',
'τ'=>'60',
'τζ'=>'600',
'τσ'=>'600',
'τϲ'=>'600',
'τς'=>'600',
'φ'=>'60',
'χ'=>'60',
'ψ'=>'60',
'γκραντ'=>'5200000',
'μπέης'=>'520000',
'μπέηϲ'=>'520000',
'μπεης'=>'520000',
'μπεηϲ'=>'520000',
'μπέησ'=>'520000',
'μπεησ'=>'520000',
'μπέη'=>'52000',
'μπεη'=>'52000',
'μπέηδες'=>'52000000',
'μπέηδεϲ'=>'52000000',
'μπέηδεσ'=>'52000000',
'μπέηδων'=>'52000000',
'βρ'=>'600',
'γλ'=>'600',
'κλ'=>'600',
'κτ'=>'600',
'κς'=>'600',
'κϲ'=>'600',
'κσ'=>'600',
'λς'=>'600',
'λϲ'=>'600',
'λσ'=>'600',
'μπλ'=>'6200',
'μπν'=>'6200',
'μπρ'=>'6200',
'μς'=>'600',
'μϲ'=>'600',
'μσ'=>'600',
'νς'=>'600',
'νϲ'=>'600',
'νσ'=>'600',
'ρς'=>'600',
'ρϲ'=>'600',
'ρσ'=>'600',
'σκ'=>'600',
'ϲκ'=>'600',
'στ'=>'600',
'ϲτ'=>'600',
'τλ'=>'600',
'τρ'=>'600',
'φτ'=>'600',
'χτ'=>'600'
),
'all'=>array(
'α'=>'01',
'ε'=>'01',
'η'=>'01',
'ι'=>'01',
'ο'=>'01',
'υ'=>'01',
'ω'=>'01',
'ϊ'=>'01',
'ϋ'=>'01',
'ἀ'=>'01',
'ἁ'=>'01',
'ἂ'=>'01',
'ἃ'=>'01',
'ἄ'=>'01',
'ἅ'=>'01',
'ἆ'=>'01',
'ἇ'=>'01',
'ἐ'=>'01',
'ἑ'=>'01',
'ἒ'=>'01',
'ἓ'=>'01',
'ἔ'=>'01',
'ἕ'=>'01',
'ἠ'=>'01',
'ἡ'=>'01',
'ἢ'=>'01',
'ἣ'=>'01',
'ἤ'=>'01',
'ἥ'=>'01',
'ἦ'=>'01',
'ἧ'=>'01',
'ἰ'=>'01',
'ἱ'=>'01',
'ἲ'=>'01',
'ἳ'=>'01',
'ἴ'=>'01',
'ἵ'=>'01',
'ἶ'=>'01',
'ἷ'=>'01',
'ὀ'=>'01',
'ὁ'=>'01',
'ὂ'=>'01',
'ὃ'=>'01',
'ὄ'=>'01',
'ὅ'=>'01',
'ὐ'=>'01',
'ὑ'=>'01',
'ὒ'=>'01',
'ὓ'=>'01',
'ὔ'=>'01',
'ὕ'=>'01',
'ὖ'=>'01',
'ὗ'=>'01',
'ὠ'=>'01',
'ὡ'=>'01',
'ὢ'=>'01',
'ὣ'=>'01',
'ὤ'=>'01',
'ὥ'=>'01',
'ὦ'=>'01',
'ὧ'=>'01',
'ὰ'=>'01',
'ὲ'=>'01',
'ὴ'=>'01',
'ὶ'=>'01',
'ὸ'=>'01',
'ὺ'=>'01',
'ὼ'=>'01',
'ᾀ'=>'01',
'ᾁ'=>'01',
'ᾂ'=>'01',
'ᾃ'=>'01',
'ᾄ'=>'01',
'ᾅ'=>'01',
'ᾆ'=>'01',
'ᾇ'=>'01',
'ᾐ'=>'01',
'ᾑ'=>'01',
'ᾒ'=>'01',
'ᾓ'=>'01',
'ᾔ'=>'01',
'ᾕ'=>'01',
'ᾖ'=>'01',
'ᾗ'=>'01',
'ᾠ'=>'01',
'ᾡ'=>'01',
'ᾢ'=>'01',
'ᾣ'=>'01',
'ᾤ'=>'01',
'ᾥ'=>'01',
'ᾦ'=>'01',
'ᾧ'=>'01',
'ᾲ'=>'01',
'ᾳ'=>'01',
'ᾴ'=>'01',
'ᾶ'=>'01',
'ᾷ'=>'01',
'ῂ'=>'01',
'ῃ'=>'01',
'ῄ'=>'01',
'ῆ'=>'01',
'ῇ'=>'01',
'ῒ'=>'01',
'ῖ'=>'01',
'ῗ'=>'01',
'ῢ'=>'01',
'ῦ'=>'01',
'ῧ'=>'01',
'ῲ'=>'01',
'ῳ'=>'01',
'ῴ'=>'01',
'ῶ'=>'01',
'ῷ'=>'01',
'ά'=>'01',
'έ'=>'01',
'ή'=>'01',
'ί'=>'01',
'ό'=>'01',
'ύ'=>'01',
'ώ'=>'01',
'ΐ'=>'01',
'ΰ'=>'01',
'αι'=>'020',
'αί'=>'020',
'αὶ'=>'020',
'αῖ'=>'020',
'αἰ'=>'020',
'αἴ'=>'020',
'αἲ'=>'020',
'αἶ'=>'020',
'αἱ'=>'020',
'αἵ'=>'020',
'αἳ'=>'020',
'αἷ'=>'020',
'άι'=>'020',
'άϊ'=>'020',
'αυ'=>'020',
'αύ'=>'020',
'αὺ'=>'020',
'αῦ'=>'020',
'αὐ'=>'020',
'αὔ'=>'020',
'αὒ'=>'020',
'αὖ'=>'020',
'αὑ'=>'020',
'αὕ'=>'020',
'αὓ'=>'020',
'αὗ'=>'020',
'άυ'=>'030',
'ει'=>'020',
'εί'=>'020',
'εὶ'=>'020',
'εῖ'=>'020',
'εἰ'=>'020',
'εἴ'=>'020',
'εἲ'=>'020',
'εἶ'=>'020',
'εἱ'=>'020',
'εἵ'=>'020',
'εἳ'=>'020',
'εἷ'=>'020',
'έι'=>'020',
'έϊ'=>'020',
'ευ'=>'020',
'εύ'=>'020',
'εὺ'=>'020',
'εῦ'=>'020',
'εὐ'=>'020',
'εὔ'=>'020',
'εὒ'=>'020',
'εὖ'=>'020',
'εὑ'=>'020',
'εὕ'=>'020',
'εὓ'=>'020',
'εὗ'=>'020',
'έυ'=>'030',
'ηυ'=>'020',
'ηύ'=>'020',
'ηὺ'=>'020',
'ηῦ'=>'020',
'ηὐ'=>'020',
'ηὔ'=>'020',
'ηὒ'=>'020',
'ηὖ'=>'020',
'ηὑ'=>'020',
'ηὕ'=>'020',
'ηὓ'=>'020',
'ηὗ'=>'020',
'οι'=>'020',
'οί'=>'020',
'οὶ'=>'020',
'οῖ'=>'020',
'οἰ'=>'020',
'οἴ'=>'020',
'οἲ'=>'020',
'οἶ'=>'020',
'οἱ'=>'020',
'οἵ'=>'020',
'οἳ'=>'020',
'οἷ'=>'020',
'όι'=>'020',
'όϊ'=>'020',
'ου'=>'020',
'ού'=>'020',
'οὺ'=>'020',
'οῦ'=>'020',
'οὐ'=>'020',
'οὔ'=>'020',
'οὒ'=>'020',
'οὖ'=>'020',
'οὑ'=>'020',
'οὕ'=>'020',
'οὓ'=>'020',
'οὗ'=>'020',
'όυ'=>'030',
'υι'=>'020',
'υί'=>'020',
'υὶ'=>'020',
'υῖ'=>'020',
'υἰ'=>'020',
'υἴ'=>'020',
'υἲ'=>'020',
'υἶ'=>'020',
'υἱ'=>'020',
'υἵ'=>'020',
'υἳ'=>'020',
'υἷ'=>'020',
'αη'=>'020',
'αϊ'=>'020',
'αϋ'=>'020',
'άϋ'=>'030',
'εη'=>'020',
'έη'=>'020',
'εϊ'=>'020',
'εϋ'=>'020',
'όει'=>'0200',
'όη'=>'020',
'οϊ'=>'020',
'ωι'=>'020',
'ὠι'=>'020',
'ια'=>'020',
'ιά'=>'020',
'ιὰ'=>'020',
'ιᾶ'=>'020',
'ιε'=>'020',
'ιέ'=>'020',
'ιὲ'=>'020',
'ιο'=>'020',
'ιό'=>'020',
'ιὸ'=>'020',
'οϊό'=>'0330',
'οϊὸ'=>'0330',
'ιω'=>'020',
'ιώ'=>'020',
'ιὼ'=>'020',
'ιῶ'=>'020',
'ηα'=>'020',
'ῃα'=>'020',
'ηά'=>'020',
'ηὰ'=>'020',
'ηᾶ'=>'020',
'ῃά'=>'020',
'ῃὰ'=>'020',
'ῃᾶ'=>'020',
'ηε'=>'020',
'ῃε'=>'020',
'ηέ'=>'020',
'ηὲ'=>'020',
'ῃέ'=>'020',
'ῃὲ'=>'020',
'ηο'=>'020',
'ῃο'=>'020',
'ηό'=>'020',
'ηὸ'=>'020',
'ῃό'=>'020',
'ῃὸ'=>'020',
'ηω'=>'020',
'ῃω'=>'020',
'ηώ'=>'020',
'ηὼ'=>'020',
'ηῶ'=>'020',
'ῃώ'=>'020',
'ῃὼ'=>'020',
'ῃῶ'=>'020',
'υα'=>'020',
'υά'=>'020',
'υὰ'=>'020',
'υᾶ'=>'020',
'υε'=>'020',
'υέ'=>'020',
'υὲ'=>'020',
'υο'=>'020',
'υό'=>'020',
'υὸ'=>'020',
'υω'=>'020',
'υώ'=>'020',
'υὼ'=>'020',
'υῶ'=>'020',
'\''=>'60',
'ʼ'=>'60',
'᾿'=>'60',
'β\''=>'600',
'βʼ'=>'600',
'β᾿'=>'600',
'γ\''=>'600',
'γʼ'=>'600',
'γ᾿'=>'600',
'δ\''=>'600',
'δʼ'=>'600',
'δ᾿'=>'600',
'ζ\''=>'600',
'ζʼ'=>'600',
'ζ᾿'=>'600',
'θ\''=>'600',
'θʼ'=>'600',
'θ᾿'=>'600',
'κ\''=>'600',
'κʼ'=>'600',
'κ᾿'=>'600',
'λ\''=>'600',
'λʼ'=>'600',
'λ᾿'=>'600',
'μ\''=>'600',
'μʼ'=>'600',
'μ᾿'=>'600',
'μπ\''=>'6000',
'μπʼ'=>'6000',
'μπ᾿'=>'6000',
'ν\''=>'600',
'νʼ'=>'600',
'ν᾿'=>'600',
'ντ\''=>'6000',
'ντ’'=>'6000',
'ντ᾿'=>'6000',
'ξ\''=>'600',
'ξʼ'=>'600',
'ξ᾿'=>'600',
'π\''=>'600',
'πʼ'=>'600',
'π᾿'=>'600',
'ρ\''=>'600',
'ρʼ'=>'600',
'ρ᾿'=>'600',
'σ\''=>'600',
'σʼ'=>'600',
'σ᾿'=>'600',
'ϲ\''=>'600',
'ϲʼ'=>'600',
'ϲ᾿'=>'600',
'τ\''=>'600',
'τʼ'=>'600',
'τ᾿'=>'600',
'τζ\''=>'6000',
'τζʼ'=>'6000',
'τζ᾿'=>'6000',
'τσ\''=>'6000',
'τσʼ'=>'6000',
'τσ᾽'=>'6000',
'τϲ\''=>'6000',
'τϲʼ'=>'6000',
'τϲ᾿'=>'6000',
'φ\''=>'600',
'φʼ'=>'600',
'φ᾿'=>'600',
'χ\''=>'600',
'χʼ'=>'600',
'χ᾿'=>'600',
'ψ\''=>'600',
'ψʼ'=>'600',
'ψ᾿'=>'600',
'ββ'=>'410',
'γγ'=>'410',
'δδ'=>'410',
'ζζ'=>'410',
'θθ'=>'410',
'κκ'=>'410',
'λλ'=>'410',
'μμ'=>'410',
'νν'=>'410',
'ππ'=>'410',
'ρρ'=>'410',
'ῤῥ'=>'410',
'σσ'=>'410',
'ϲϲ'=>'410',
'ττ'=>'410',
'φφ'=>'410',
'χχ'=>'410',
'ψψ'=>'410',
'βζ'=>'410',
'βθ'=>'410',
'βκ'=>'410',
'βμ'=>'410',
'βν'=>'410',
'βξ'=>'410',
'βπ'=>'410',
'βσ'=>'410',
'βϲ'=>'410',
'βτ'=>'410',
'βφ'=>'410',
'βχ'=>'410',
'βψ'=>'410',
'γβ'=>'410',
'γζ'=>'410',
'γθ'=>'410',
'γκ'=>'410',
'γμ'=>'410',
'ργμ'=>'4520',
'γξ'=>'410',
'γπ'=>'410',
'γσ'=>'410',
'γϲ'=>'410',
'γτ'=>'410',
'γφ'=>'410',
'γχ'=>'410',
'γψ'=>'410',
'δβ'=>'410',
'δγ'=>'410',
'δζ'=>'410',
'δθ'=>'410',
'δκ'=>'410',
'δλ'=>'410',
'δξ'=>'410',
'δπ'=>'410',
'δσ'=>'410',
'δϲ'=>'410',
'δτ'=>'410',
'δφ'=>'410',
'δχ'=>'410',
'δψ'=>'410',
'ζβ'=>'410',
'ζγ'=>'410',
'ζδ'=>'410',
'ζθ'=>'410',
'ζκ'=>'410',
'ζλ'=>'410',
'ζμ'=>'410',
'τζμ'=>'0020',
'ζν'=>'410',
'ζξ'=>'410',
'ζπ'=>'410',
'ζρ'=>'410',
'ζσ'=>'410',
'ζϲ'=>'410',
'ζτ'=>'410',
'ζφ'=>'410',
'ζχ'=>'410',
'ζψ'=>'410',
'θβ'=>'410',
'θγ'=>'410',
'θδ'=>'410',
'θζ'=>'410',
'θκ'=>'410',
'θμ'=>'410',
'ρθμ'=>'4520',
'σθμ'=>'0020',
'ϲθμ'=>'0020',
'θξ'=>'410',
'θπ'=>'410',
'θσ'=>'410',
'θϲ'=>'410',
'θτ'=>'410',
'θφ'=>'410',
'θχ'=>'410',
'θψ'=>'410',
'κβ'=>'410',
'κγ'=>'410',
'κδ'=>'410',
'κζ'=>'410',
'κθ'=>'410',
'λκμ'=>'4520',
'ρκμ'=>'4520',
'κξ'=>'410',
'κπ'=>'410',
'κσ'=>'410',
'κϲ'=>'410',
'κφ'=>'410',
'γκφ'=>'4520',
'νκφ'=>'4520',
'κχ'=>'410',
'κψ'=>'410',
'λβ'=>'410',
'λγ'=>'410',
'λδ'=>'410',
'λζ'=>'410',
'λθ'=>'410',
'λκ'=>'410',
'λμ'=>'410',
'λν'=>'410',
'λξ'=>'410',
'λπ'=>'410',
'λρ'=>'410',
'λσ'=>'410',
'λϲ'=>'410',
'λτ'=>'410',
'λφ'=>'410',
'λχ'=>'410',
'λψ'=>'410',
'μβ'=>'410',
'μγ'=>'410',
'μδ'=>'410',
'μζ'=>'410',
'μθ'=>'410',
'μκ'=>'410',
'μλ'=>'410',
'μξ'=>'410',
'μπ'=>'410',
'μρ'=>'410',
'μσ'=>'410',
'μϲ'=>'410',
'μτ'=>'410',
'μφ'=>'410',
'μχ'=>'410',
'μψ'=>'410',
'νβ'=>'410',
'νγ'=>'410',
'νδ'=>'410',
'νζ'=>'410',
'νθ'=>'410',
'νκ'=>'410',
'νλ'=>'410',
'νμ'=>'410',
'νξ'=>'410',
'νπ'=>'410',
'νρ'=>'410',
'νσ'=>'410',
'νϲ'=>'410',
'ντ'=>'410',
'νφ'=>'410',
'νχ'=>'410',
'νψ'=>'410',
'ξβ'=>'410',
'ξγ'=>'410',
'ξδ'=>'410',
'ξζ'=>'410',
'ξθ'=>'410',
'ξκ'=>'410',
'ξλ'=>'410',
'ξμ'=>'410',
'ξν'=>'410',
'ξπ'=>'410',
'ξρ'=>'410',
'ξσ'=>'410',
'ξϲ'=>'410',
'ξτ'=>'410',
'γξτ'=>'4520',
'ρξτ'=>'4520',
'ξφ'=>'410',
'ξχ'=>'410',
'ξψ'=>'410',
'πβ'=>'410',
'πγ'=>'410',
'πδ'=>'410',
'πζ'=>'410',
'πθ'=>'410',
'πκ'=>'410',
'πμ'=>'410',
'πξ'=>'410',
'πσ'=>'410',
'πϲ'=>'410',
'πφ'=>'410',
'πχ'=>'410',
'πψ'=>'410',
'ρβ'=>'410',
'ργ'=>'410',
'ρδ'=>'410',
'ρζ'=>'410',
'ρθ'=>'410',
'ρκ'=>'410',
'ρλ'=>'410',
'ρμ'=>'410',
'ρν'=>'410',
'ρξ'=>'410',
'ρπ'=>'410',
'ρσ'=>'410',
'ρϲ'=>'410',
'ρτ'=>'410',
'ρφ'=>'410',
'ρχ'=>'410',
'ρψ'=>'410',
'σδ'=>'410',
'ϲδ'=>'410',
'σζ'=>'410',
'ϲζ'=>'410',
'σν'=>'410',
'ϲν'=>'410',
'σξ'=>'410',
'ϲξ'=>'410',
'σρ'=>'410',
'ϲρ'=>'410',
'σψ'=>'410',
'ϲψ'=>'410',
'τβ'=>'410',
'τγ'=>'410',
'τδ'=>'410',
'τθ'=>'410',
'τν'=>'410',
'τξ'=>'410',
'τπ'=>'410',
'τφ'=>'410',
'στφ'=>'0020',
'ϲτφ'=>'0020',
'τχ'=>'410',
'τψ'=>'410',
'φβ'=>'410',
'φγ'=>'410',
'φδ'=>'410',
'φζ'=>'410',
'φκ'=>'410',
'φν'=>'410',
'ρφν'=>'4520',
'φξ'=>'410',
'φπ'=>'410',
'φσ'=>'410',
'φϲ'=>'410',
'φχ'=>'410',
'φψ'=>'410',
'χβ'=>'410',
'χγ'=>'410',
'χδ'=>'410',
'χζ'=>'410',
'χκ'=>'410',
'χμ'=>'410',
'ρχμ'=>'4520',
'χξ'=>'410',
'χπ'=>'410',
'χσ'=>'410',
'χϲ'=>'410',
'χφ'=>'410',
'χψ'=>'410',
'ψβ'=>'410',
'ψγ'=>'410',
'ψδ'=>'410',
'ψζ'=>'410',
'ψθ'=>'410',
'ψκ'=>'410',
'ψλ'=>'410',
'ψμ'=>'410',
'ψν'=>'410',
'ψξ'=>'410',
'ψπ'=>'410',
'ψρ'=>'410',
'ψσ'=>'410',
'ψϲ'=>'410',
'ψτ'=>'410',
'μψτ'=>'4520',
'ψφ'=>'410',
'ψχ'=>'410',
'βγκ'=>'0020',
'λγκ'=>'4520',
'νγκ'=>'4520',
'ργκ'=>'4520',
'σγκ'=>'0020',
'ϲγκ'=>'0020',
'τγκ'=>'4520',
'ἐμιγκρ'=>'0005200',
'ἰγκου'=>'052000',
'ἴντριγκ'=>'00000520',
'ἰντριγκ'=>'00000520',
'ζμπ'=>'4520',
'λμπ'=>'4520',
'νμπ'=>'4520',
'ρμπ'=>'4520',
'σμπ'=>'0020',
'ϲμπ'=>'0020',
'ἀλαμπου'=>'00052000',
'ἄμακ'=>'05200',
'ἀμπάκ'=>'052000',
'ἀμπαν'=>'052000',
'ἀμπάρ'=>'052000',
'ἀμπᾶρ'=>'052000',
'ἀμπαρ'=>'052000',
'ἀμπάρι'=>'0630000',
'ἀμπαρι'=>'0630000',
'ἀμπρ'=>'05200',
'ἀραμπ'=>'000520',
'ἀρλούμπ'=>'00000520',
'ἀρλοῦμπ'=>'00000520',
'ἀρλουμπ'=>'00000520',
'ἰμπρα'=>'052000',
'μπαμπ'=>'520520',
'μπάμπ'=>'520520',
'μπέμπ'=>'520520',
'μπεμπ'=>'520520',
'μπογι'=>'520000',
'ὄμπο'=>'05200',
'ὀμπο'=>'05200',
'ρόμπα'=>'005200',
'ρόμπε'=>'005200',
'ρόμπω'=>'005200',
'ρομπῶ'=>'005200',
'ρομπα'=>'005200',
'ρομπε'=>'005200',
'ρομπω'=>'005200',
'σόμπα'=>'005200',
'ϲόμπα'=>'005200',
'σόμπε'=>'005200',
'ϲόμπε'=>'005200',
'σομπῶ'=>'005200',
'ϲομπῶ'=>'005200',
'σόμπω'=>'005200',
'ϲόμπω'=>'005200',
'σομπα'=>'005200',
'ϲομπα'=>'005200',
'σομπε'=>'005200',
'ϲομπε'=>'005200',
'σομπω'=>'005200',
'ϲομπω'=>'005200',
'βντ'=>'0520',
'ζντ'=>'0520',
'λντ'=>'0520',
'μντ'=>'0020',
'ρντ'=>'0520',
'σντ'=>'0020',
'ϲντ'=>'0020',
'ἀντάτζ'=>'0520000',
'ἀτραντέ'=>'00005200',
'ἀτραντὲ'=>'00005200',
'μοντέρν'=>'00520000',
'μοντερν'=>'00520000',
'ντίβαν'=>'5200000',
'ὀντά'=>'05200',
'ὀντὰ'=>'05200',
'ὀντᾶ'=>'05200',
'γκμπ'=>'62520',
'γκντ'=>'62520',
'γκτζ'=>'62100',
'γκτσ'=>'62100',
'γκτϲ'=>'62100',
'μπντ'=>'62520',
'μπτζ'=>'62100',
'μπτσ'=>'62100',
'μπτϲ'=>'62100',
'ντμπ'=>'62520',
'τσγκ'=>'60520',
'τϲγκ'=>'60520',
'τσμπ'=>'60520',
'τϲμπ'=>'60520',
'τσντ'=>'60520',
'τϲντ'=>'60520'
)
);

?>