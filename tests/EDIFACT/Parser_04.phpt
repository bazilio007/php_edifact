--TEST--
EDI_EDIFACT_Parser test 04
--FILE--
<?php

require_once dirname(__FILE__) . '/../tests.inc.php';

try {
    $parser = EDI::parserFactory('EDIFACT');
    $edidoc = $parser->parse(TEST_DATA_DIR . '/EDIFACT/ex4.edi');
    echo $edidoc->toEDI();
} catch (Exception $exc) {
    echo $exc->getMessage();
    exit(1);
}

?>
--EXPECT--
UNA:+.? '
UNB+UNOA:2+D--01RFN011+RFN020+980904:1616+EVA/0000003'
UNH+EVA0000001+INVOIC:D:95A:UN:ETEIB'
BGM+130+D--01/4300900020+9'
DTM+3:19981125'
DTM+263:9811:609'
NAD+II+++WUERZBURG+POSTFACH 10 00+WUERZBURG++97067+DE'
CTA+IC'
COM+0800 33 01094:TE'
COM+(0931) 33-2309:FX'
NAD+IV++381 4. DEB. 4300900020:ABNAHMESTR. 11:00739 BERLIN'
CUX+1:DEM'
LIN+1++781120020007/781120020052:I33:DT6:DTC++0'
LIN+2+++1:1+1'
PIA+1+R999+N'
MOA+203:2.086'
LOC+1+030557000:::R999 02050 FKTO 7'
QTY+107:20:PCE'
DTM+163:19980617120200:204'
DTM+48:123:807'
LIN+3+++1:1+1'
PIA+1+W998+N'
MOA+203:3.129'
LOC+1+030558000:::W998 02050 FKTO 7'
QTY+107:30:PCE'
DTM+163:19980618120300:204'
DTM+48:123:807'
LIN+4+++1:1+1'
PIA+1+W999+N'
MOA+203:4.172'
LOC+1+030559000:::W999 02050 FKTO 7'
QTY+107:40:PCE'
DTM+163:19980619120400:204'
DTM+48:123:807'
LIN+5+++1:1+1'
PIA+1+B024+S'
MOA+203:5.215'
LOC+1+030560000:::B024 02050 FKTO 7'
QTY+107:50:PCE'
DTM+163:19980620120500:204'
DTM+48:123:807'
LIN+6+++1:1+1'
PIA+1+N001+N'
MOA+203:1.043'
LOC+1+030556000:::N001 02050 FKTO 7'
QTY+107:10:PCE'
DTM+163:19981112120100:204'
DTM+48:123:807'
LIN+7+++1:1+1'
PIA+1+R999+N'
MOA+203:11.5773'
LOC+1+05555038699903024999:::R999'
QTY+107:111:PCE'
DTM+163:19981115120600:204'
DTM+48:123:807'
LIN+8+++1:1+1'
PIA+1+R999+N'
MOA+203:20.86'
LOC+1+05555038699903024999:::R999'
QTY+107:200:PCE'
DTM+163:19981115120700:204'
DTM+48:123:807'
LIN+9+++1:1+1'
PIA+1+R999+N'
MOA+203:34.7319'
LOC+1+05555038699903024999:::R999'
QTY+107:333:PCE'
DTM+163:19981115120800:204'
DTM+48:123:807'
LIN+10+++1:1+1'
PIA+1+R999+N'
MOA+203:0.1517'
LOC+1+05555038699967636999:::R999'
DTM+163:19981117120900:204'
DTM+48:123:807'
LIN+11+++1:1+1'
PIA+1+R999+N'
MOA+203:0.0759'
LOC+1+05555038699967636999:::R999'
DTM+163:19981117121000:204'
DTM+48:123:807'
LIN+12+++1:1+1'
PIA+1+R999+N'
MOA+203:0.0759'
LOC+1+05555038699967636999:::R999'
DTM+163:19981117121100:204'
DTM+48:123:807'
LIN+13+++1:1+1'
PIA+1+R999+N'
MOA+203:0.0379'
LOC+1+05555038699967636999:::R999'
DTM+163:19981117121200:204'
DTM+48:123:807'
UNS+S'
MOA+79:83.1556'
UNT+94+EVA0000001'
UNZ+1+EVA/0000003'