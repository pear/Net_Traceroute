#!/bin/sh
phpdoc -d ./ -i "docs,doc*,example*,generate_package.xml,package.xml,CVS" -t ../peardoc2_Net_Traceroute -o XML:DocBook/peardoc2 -s -p -dn "Net_Traceroute" -dc networking -ti "Net_Traceroute"
