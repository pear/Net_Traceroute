#!/bin/sh
phpdoc -d ./ -i "docs,doc*,example*,generate_package.xml,package.xml,CVS" -t ../dochtml_Net_Traceroute -o HTML:frames:earthli -s -p -dn "Net_Traceroute" -dc networking -ti "Net_Traceroute"
